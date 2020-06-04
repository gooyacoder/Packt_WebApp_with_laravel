<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome', ['name'=>'Amirhosein', 'records'=>['Completed', 'Successful', 'Failed'], 
    'data' => array('title'=>'HTML', 'desc'=>'Learning HTML is fun and interactive.'),
    'country' => 'Iran']);
});


Route::get('/about', function () {
    return view('about');
})->name('knowus');


Route::get('/service', function () {
    return view('service');
});

Route::get('posts/create', function(){
    return 'data created with "get"!';
});

// Route::post('posts/create', function(){
//     return 'data created with "post"!';
// });

// Route::match(['get', 'post'], 'posts/create', function(){
//     return 'data created with "get"';
// });