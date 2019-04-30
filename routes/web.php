<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact-us',function(){
    return view('contact');
});
Route::get('/customer',function(){

    $keys = [
        'Name',
        'Addess',
        'Phone',
    ];

    $values = [
        'Momin',
        'Sylhet',
        '123-123-123',
    ];

    return view('internals.customers',[
        'keys' => $keys,
        'values' => $values,
    ]);
});
