<?php
namespace Deno\Obfuscator\Controllers;

use Illuminate\Http\Request;
use Deno\Obfuscator\Obfuscator;

class ObfuscatorController
{
    public function checkerPage(Obfuscator $obfuscator) {
        $response = $obfuscator->justDoIt();
        
       // return $response;

        //send data to view blade 
        $data = $response;

        return view('obfuscator::index', compact('data'));

    }
}