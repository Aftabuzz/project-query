<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [UserController::class, 'showUsers'])->name('home');

Route::get('/user/{id}', [UserController::class, 'singleUser'])->name('view.user');         //view users

Route::get('/add', [UserController::class, 'addUser']);

Route::get('/update', [UserController::class, 'updateUser']);

Route::get('/delete/{id}', [UserController::class, 'deleteUser'])->name('delete.user');

Route::get('/deleteuser', [UserController::class, 'deleteAllUser']);