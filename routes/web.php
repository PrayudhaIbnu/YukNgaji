<?php

use App\Http\Controllers\QuranController;
use App\Http\Controllers\ChatbotController;
use Illuminate\Support\Facades\Route;

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

// chatbot
Route::post('send', [ChatbotController::class, 'sendChat']);
Route::get('ustadz-robot', function () {
    return view('chatbot');
});

Route::get('/', [QuranController::class, 'index']);
Route::get('surat/{id}', [QuranController::class, 'indexId']);

