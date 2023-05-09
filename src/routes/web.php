<?php

use Deno\Obfuscator\Controllers\ObfuscatorController;
use Illuminate\Support\Facades\Route;

Route::get('checker', [ObfuscatorController::class, 'checkerPage']);