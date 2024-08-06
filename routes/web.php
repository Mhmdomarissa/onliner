<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/welcome');
})->name('home');

Route::get('/about-us', function () {
    return view('pages/about');
})->name('about');

//(uri)
Route::view('contact-me',"pages/contact",[
    'page_name' => 'Contact me page ',
    'page_description' => "<script> this is description</script>"
])->name('contact');
Route::get('category/{id}',function ($id) {

    $cats = [
        '1' => 'games' , 
        '2' => 'movies' ,
        '3' => 'books'  ,
        '4' => 'electronics'  ,
        '5' => 'clothes'  ,
        '6' => 'other'  

    ];

    return view('pages/category',[
        'the_id' => $cats[$id] ?? "This category does not exist."
    ]) ;
    // return view('category');
});
