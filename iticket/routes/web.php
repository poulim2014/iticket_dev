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
    return view('dashboard');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


                // dashboard
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
// Route::get('dashboard', function () {
//     return view('dashboard');
// });

                // ແຈ້ງປັນຫາ
Route::get('probapp', function () {
    return view('probapp');
});

                // ຟອມຮັບປັນຫາ
Route::get('receiveprob', function () {
    return view('receiveprob.ProblemTable');
});
Route::get('team', function () {
    return view('receiveprob.team');
});

                // ຟອມແຈ້ງສະຖານະ 
Route::get('workresult', function () {
    return view('workresult.workTable');
}); 
Route::get('form', function () {
    return view('workresult.form');
});

                // ຟອມຄຳເຫັນ
Route::get('comment', function () {
    return view('comment.cmtable');
}); 
Route::get('cmform', function () {
    return view('comment.cmform');
});
