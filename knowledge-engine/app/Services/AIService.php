<?php

namespace App\Services;


use Gemini\Data\SafetySetting;
use Gemini\Enums\HarmBlockThreshold;
use Gemini\Enums\HarmCategory;
use Gemini\Laravel\Facades\Gemini;
use Gemini\Resources\GenerativeModel;
use Gemini\Responses\GenerativeModel\GenerateContentResponse;
use PhpOffice\PhpWord\IOFactory;
use Smalot\PdfParser\Parser;

class AIService extends AbstractService
{
    public static $client;

    protected function configure() {
        $client = static::client();

        if($client instanceof GenerativeModel) {
            $client->withSafetySetting(new SafetySetting(
                HarmCategory::HARM_CATEGORY_DANGEROUS_CONTENT,
                HarmBlockThreshold::BLOCK_ONLY_HIGH
            ))
            ->withSafetySetting(new SafetySetting(
                HarmCategory::HARM_CATEGORY_HARASSMENT,
                HarmBlockThreshold::BLOCK_ONLY_HIGH
            ))
            ->withSafetySetting(new SafetySetting(
                HarmCategory::HARM_CATEGORY_SEXUALLY_EXPLICIT,
                HarmBlockThreshold::BLOCK_ONLY_HIGH
            ))
            ->withSafetySetting(new SafetySetting(
                HarmCategory::HARM_CATEGORY_HATE_SPEECH,
                HarmBlockThreshold::BLOCK_ONLY_HIGH
            ));

            $ss = [];
            foreach($client->safetySettings as $s) {
                $ss[$s->category->value] = $s;
            }

            $client->safetySettings = array_values($ss);

            static::$client = $client;
            return static::$client;
        }
    }

    static function client() {
        if(empty(static::$client)) {
            static::$client =  Gemini::generativeModel('models/gemini-1.5-flash-8b');
        }

        return static::$client;
    }

    function generate(...$prompt) {
        $result = $this->configure()->generateContent(...$prompt);

        return $this->parseResponse($result);
    }

    function parseResponse($result) {
        if($result instanceof GenerateContentResponse) {
            return rescue(fn() => $result->text());
        } 

        return null;
    }

}
