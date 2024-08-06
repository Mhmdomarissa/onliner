<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-me', function () {
    return view('about');
});

//(uri)
Route::view('contact-me',"contact",[
    'page_name' => 'Contact Me page ',
    'page_description' => "<script> this is description</script>"
]);
