<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(UserController::class)->group(function(){

    Route::get('/', 'showUsers')->name('home');

    Route::get('/user/{id}',  'singleUser')->name('view.user');         //view users
    
    Route::post('/add',  'addUser')->name('addUser');
    
    Route::post('/update/{id}',  'updateUser')->name('update.user');
    
    Route::get('/updatepage/{id}', 'updatePage')->name('update.page');
    
    Route::get('/delete/{id}', 'deleteUser')->name('delete.user');
    
    Route::get('/deleteuser', 'deleteAllUser');


});



Route::view('newuser', '/adduser');