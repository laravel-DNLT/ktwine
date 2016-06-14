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
Route::get('/contact', function() {
    return view('pages.form.contact');
});
Route::get('/sale-contact', function() {
    return view('pages.form.sale-contact');
});
Route::get('/change-order', function() {
    return view('pages.form.change-order');
});
Route::get('/change-request', function() {
    return view('pages.form.change-request');
});
Route::get('/purchase-order', function() {
    return view('pages.form.purchase-order');
});
Route::get('/request-quote', function() {
    return view('pages.form.request-quote');
});
Route::get('/supply-form', function() {
    return view('pages.form.supply-form');
});
Route::get('/vendor', function() {
    return view('pages.form.vendor');
});

Route::get('blog/blog-category-1', function() {
    return view('pages.blog.blog-category-1');
});
Route::get('blog/blog-category-2', function() {
    return view('pages.blog.blog-category-2');
});
Route::get('blog/blog-category-3', function() {
    return view('pages.blog.blog-category-3');
});
Route::get('blog/blog-1', function() {
    return view('pages.blog.blog-1');
});
Route::get('blog/blog-2', function() {
    return view('pages.blog.blog-2');
});
Route::get('blog/blog-3', function() {
    return view('pages.blog.blog-3');
});
Route::get('blog/blog-4', function() {
    return view('pages.blog.blog-4'); 
});
Route::get('blog/blog-5', function() {
    return view('pages.blog.blog-5');
});
Route::get('blog/blog-6', function() {
    return view('pages.blog.blog-6');
});
Route::get('blog/blog-7', function() {
    return view('pages.blog.blog-7');
});

Route::get('/product-1', function() {
   return view('pages.products.product-1');
});
Route::get('/product-2', function() {
    return view('pages.products.product-2');
});
Route::get('/product-3', function() {
    return view('pages.products.product-3');
});
Route::get('/product-4', function() {
    return view('pages.products.product-4');
});
Route::get('/product-5', function() {
    return view('pages.products.product-5');
});
Route::get('/product-6', function() {
    return view('pages.products.product-6');
});
Route::get('/product-7', function() {
    return view('pages.products.product-7');
});
Route::get('/product-8', function() {
    return view('pages.products.product-8');
});
Route::get('/product-9', function() {
    return view('pages.products.product-9');
});
Route::get('/product-10', function() {
    return view('pages.products.product-10');
});
Route::get('/product-11', function() {
    return view('pages.products.product-11');
});
Route::get('/product-12', function() {
    return view('pages.products.product-12');
});