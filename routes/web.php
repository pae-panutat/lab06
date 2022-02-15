<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function(){
    return view('welcome');
});

//การสร้าง Route
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/member', [MemberController::class, 'index'])->name('mem');
Route::get('/admin', [AdminController::class, 'index']);



// Route::get('/user/{name}/{lastname}', function ($name, $lastname) {
//     echo "<h1>ชื่อ: $lastname </h1>";
//     echo "<h1>นามสกุล: $lastname </h1>";
// });
