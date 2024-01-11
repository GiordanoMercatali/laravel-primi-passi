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
    $page_title = "Hello World!";

    $data = [
        'title' => $page_title,
        'people' => [
            'Giordano',
            'Paolo',
            'Marco',
            'Gigi'
        ],
    ];

    return view('welcome', $data);
});
