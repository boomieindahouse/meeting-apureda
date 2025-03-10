<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CosbogController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('client.home');
})->name('home');

// ใช้ Controller เพื่อส่ง $features ไปยัง View
Route::get('/cosbog', [CosbogController::class, 'showAluminiumPipe']);

Route::get('/jelpc', function () {
    return view('client.jelpc');
});

Route::get('/about_us', function () {
    return view('client.aboutus');
});

Route::get('/contact', function () {
    return view('client.contactus');
});

Route::get('/air-pump-and-equipment', function () {
    return view('client.product_airpump');
});

Route::get('/airpump', [CategoryController::class, 'showCategory'])->name('airpump');

Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.detail');

// Route::get('/news', function () {
//     return view('client.news');
// });


// แสดงรายการข่าว
// Route::get('/news', function () {
//     return view('client.news');
// })->name('news.index');

// แสดงข่าวเดี่ยว
// Route::get('/news/{slug}', function ($slug) {
//     return view('client.news.show', compact('slug'));
// })->name('news.show');

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');
