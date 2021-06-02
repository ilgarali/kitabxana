<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


// Route::get('/', [MainController::class,'home']);
// Route::get('/language/{locale}', function ($locale) {
   
//     Session::put('locale',$locale);
//     App::setLocale($locale);
    
//     return redirect()->back();
//     //
// })->name('language');

Route::post('/contact', [PostController::class,'contact'])->name('contact');
Route::get('/lang', [MainController::class,'lang']);
Route::get('/{slug1?}/{slug2?}/{slug3?}/{slug4?}/{slug5?}', [MainController::class,'slug']);
