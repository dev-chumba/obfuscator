<?php

namespace Deno\Obfuscator;

use Illuminate\Support\Facades\Http;

class Obfuscator {
    public function justDoIt() {
        $response = Http::get('https://inspiration.goprogram.ai/');

        return $response['quote'] . ' -' . $response['author'];
    }
}