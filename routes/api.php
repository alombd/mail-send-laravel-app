<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\JsonResponse;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('send-mail', function () {
    $details = [
        'title' => 'Mail from Testing email',
        'body' => 'This is for testing email using smtp'
    ];
    
    \Mail::to('alombd.bd@gmail.com')->send(new \App\Mail\SendMail($details));
   
    return new JsonResponse(
        [
            'success' => true, 
            'message' => "Thank you, Sending email please check our email"
        ], 
        200
    );
});


