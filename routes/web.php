<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilityController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\RequestSampleController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello_world', function () {
//     return 'hello world';
// });

Route::get('/hello_world', fn () => view('hello_world'));
Route::get('/hello', fn () => view('hello', [
    'name' => '山田',
    'course' => 'Laravel9'
]));

Route::get('/', fn () => view('index'));

Route::get('/curriculum', fn () => view('curriculum'));


// 世界の時間
Route::get('/world-time', [UtilityController::class, 'worldTime']);


// おみくじ
Route::get('/omikuji', [GameController::class, 'omikuji']);

// モンティ・ホール問題
Route::get('/monty-hall', [GameController::class, 'montyHall']);

// リクエスト
Route::get('/form', [RequestSampleController::class, 'form']);
Route::get('/query-strings', [RequestSampleController::class, 'queryStrings']);

Route::get('users/{id}', [RequestSampleController::class, 'profile']);
Route::get('products/{category}/{year}', [RequestSampleController::class, 'productsArchive']);
