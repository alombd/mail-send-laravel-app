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

// Route::get('send-mail', function () {
   
//     $details = [
//         'title' => 'Mail from Testing email',
//         'body' => 'This is for testing email using smtp'
//     ];
   
//     \Mail::to('alombd.bd@gmail.com')->send(new \App\Mail\SendMail($details));
   
//     dd("Email is Sent.");
// });