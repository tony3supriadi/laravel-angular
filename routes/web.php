<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

Route::get('{any}', function(){
    return File::get(public_path() . '/dist/index.html');
})->where('any', '.*');
