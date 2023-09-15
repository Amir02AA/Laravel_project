<?php

use Illuminate\Support\Facades\Route;

\Illuminate\Support\Facades\Route::get('/myRoute',function (){
    return 'hi';
});
//\Illuminate\Support\Facades\Route::get('/test2',function (){
//    return path;
//});

Route::get('/national-code/{code}', function ($code) {
    return $code;
})->where('code', '^[0-9]{10}$');
