<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MemberController;

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


//การสร้าง Route
Route::get('/about', [AboutController::class, 'showData']);
Route::get('/member', [MemberController::class, 'index']);


Route::get('/admin', function () {
    return view('admin.index');
});

// Route::get('/user/{name}/{lastname}', function ($name, $lastname) {
//     echo "<h1>ชื่อ: $lastname </h1>";
//     echo "<h1>นามสกุล: $lastname </h1>";
// });
