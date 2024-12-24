<?php

use App\Services\AIService;
use App\Services\DocumentService;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('gemini-test', function () {
 
    $pdfContents = DocumentService::new()->processDocument('Lexical_Analysis.pdf');
    $summary = AIService::new()->generate("summarize the following" . $pdfContents);

    echo $summary;

});
