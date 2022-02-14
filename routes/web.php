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
    return view('welcome');
});


//การสร้าง Route
Route::get('/about', function () {
    echo '<h1>สวัสดีครับ</h1>';
});

Route::get('/user/{name}/{lastname}', function ($name, $lastname) {
    echo "<h1>ชื่อ: $lastname </h1>";
    echo "<h1>นามสกุล: $lastname </h1>";
});
