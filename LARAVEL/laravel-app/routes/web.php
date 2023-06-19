<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PagesController;

Route::get("/", [PagesController::class, 'index']);
Route::get("/about", [PagesController::class, 'about']);



Route::get('products',[
    ProductController::class,
    'index'
]);

// --- Lấy ra id theo pattern
// Route::get('products/{productName}/{id}',[
//     ProductController::class,
//     'detail'
// ])->where('id', '[0-9]+'); 

// --- Lấy ra productName, id theo pattern thì đưa vào associate array
Route::get('products/{productName}/{id}',[
    ProductController::class,
    'detail'
])->where([
    'id' => '[0-9]+',
    'productName' => '[A-Za-a]+']
);           // 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

Route::get('/', function () {
    // return view('welcome');
    return env('APP_NAME');
});
*/


