<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/about', function() {
    return view('pages.about');
});
Route::get('/champagne', function() {
    return view('pages.champagne');
});
Route::get('/kosher', function() {
    return view('pages.kosher');
});
Route::get('/rose', function() {
    return view('pages.rose');
});
Route::get('/delivery', function() {
    return view('pages.delivery');
});
Route::get('/blog', function() {
    return view('pages.blog');
});
Route::get('blog/blog-category', function() {
    return view('pages.blog.blog');
});