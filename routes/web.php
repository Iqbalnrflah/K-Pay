<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;

Route::get('/', fn()=>view('home'));
Route::get('/pemilik', fn()=>view('pemilik'));
Route::get('/info', fn()=>view('info'));
Route::get('/apk', fn()=>view('apk'));
Route::get('/penghuni',[KamarController::class,'penghuni']);

Route::get('/pay', function () {
    $path = storage_path('app/private/pay.png');

    if (!file_exists($path)) {
        abort(404);
    }

    return response()->file($path);
});