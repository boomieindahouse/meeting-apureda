<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CosbogController;

Route::get('/', function () {
    return view('client.home');
});

// ใช้ Controller เพื่อส่ง $features ไปยัง View
Route::get('/cosbog', [CosbogController::class, 'showAluminiumPipe']);


