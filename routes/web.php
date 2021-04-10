<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ConsumerController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\PrivateController;
use App\Http\Controllers\QuantityController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [MainController::class, 'index']);
Route::get('/news', [MainController::class, 'news']);
Route::get('/newsnext/{slug}', [MainController::class, 'newsnext']);
Route::get('/guests', [MainController::class, 'guests']);
Route::get('/guests/price', [MainController::class, 'guests_pr']);
Route::get('/guests/info', [MainController::class, 'guests_info']);
Route::get('/guests/norm', [MainController::class, 'guests_norm']);
Route::get('/guests/doc', [MainController::class, 'guests_doc']);
Route::get('/guests/sup', [MainController::class, 'guests_sup']);
Route::get('/guests/others', [MainController::class, 'guests_others']);
Route::get('/contacts', [MainController::class, 'contacts']);

Auth::routes();


Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function(){
    Route::get('/', [AdminController::class, 'index']);
    Route::resource('/user', UserController::class);
    Route::resource('/slider', SliderController::class);

});


Route::middleware(['auth'])->group(function(){
    Route::get('/private', [PrivateController::class, 'index']);
    Route::get('/private/profile', [PrivateController::class, 'user']);
    Route::put('/private/profile', [PrivateController::class, 'user_update']);
    Route::get('/private/info', [PrivateController::class, 'info']);
    

});

Route::middleware(['auth', 'role:admin|manager'])->group(function(){
    Route::resource('/consumer', ConsumerController::class);
    Route::resource('/price', PriceController::class);
    Route::resource('/qty', QuantityController::class);
    Route::resource('private/news', NewsController::class);

});




Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
