<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/members', [MemberController::class, 'index']);

Route::get('/members/{member:slug}', [MemberController::class, 'show']);

Route::get('/form-member', [MemberController::class, 'input']);
Route::post('/store', [MemberController::class, 'store']);
