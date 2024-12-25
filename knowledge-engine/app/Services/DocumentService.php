<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpWord\IOFactory;
use Smalot\PdfParser\Parser;

class DocumentService extends AbstractService
{
 
    /**
     * Extracts the content from the pdf/word document
     * 
     * @param string $filePath - the path to the document that needs to be processed
     * @return string 
     * 
     */
    public function processDocument($filePath) {
        $extension = pathinfo($filePath, PATHINFO_EXTENSION);
        $text = '';

       
        if ($extension === 'docx' || $extension === 'doc') {
            $phpWord = IOFactory::load($filePath);
            foreach ($phpWord->getSections() as $section) {
                foreach ($section->getElements() as $element) {
                    if (method_exists($element, 'getText')) {
                        $text .= $element->getText();
                    }
                }
            }
        } elseif ($extension === 'pdf') {
            $pdfParser = new Parser();
            $pdf = $pdfParser->parseFile($filePath);
            $text = $pdf->getText();
        }

        return trim($text);
    }

    /**
     * Store the uploaded document.
     *
     * @param \Illuminate\Http\UploadedFile $file
     * @return string|null
     */
    public function storeDocument($file)
    {
        if (!$file instanceof \Illuminate\Http\UploadedFile) {
            return null;
        }

        $path = $file->store('documents', 'public');

        return $path;
    }

    /**
     * Get the URL of the stored document.
     *
     * @param string $path
     * @return string
     */
    public function getDocumentUrl($path)
    {
        return Storage::url($path); 
    }

}