<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberListController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/memberListCreate', [MemberListController::class, 'create'])->name('memberList.create');
Route::post('/memberListCreate', [MemberListController::class, 'add'])->name('memberList.create_submit');
Route::get('/memberListConfirm', [MemberListController::class, 'confirm'])->name('memberList.confirm');
Route::post('/memberListConfirm', [MemberListController::class, 'confirm_submit'])->name('memberList.confirm_submit');
Route::get('/memberListFinish', [MemberListController::class, 'finish'])->name('memberList.finish');
