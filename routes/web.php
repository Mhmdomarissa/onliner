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
Route::get('category/{id}',function ($id) {

    $cats = [
        '1' => 'games' , 
        '2' => 'movies' ,
        '3' => 'books'  ,
        '4' => 'electronics'  ,
        '5' => 'clothes'  ,
        '6' => 'other'  

    ];

    return view('category',[
        'the_id' => $cats[$id] ?? "This category does not exist."
    ]) ;
    // return view('category');
});
