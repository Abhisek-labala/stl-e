<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;

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
Route::get('/',function()
{
    return view('login');
});
Route::get('/admin',function()
{
    return view('index');
});
Route::get('/signup',function()
{
    return view('signup');
});
Route::get('/getData',[mainController::class,'getData']);
Route::post('/insertData',[mainController::class,'insertData']);
Route::get('/getCountries',[mainController::class,'getCountries']);
Route::post('/getStates',[mainController::class,'getStates']);
Route::post('/getCountries',[mainController::class,'getCountries']);
Route::post('/updateData',[mainController::class,'updateData']);
Route::post('/deleteData/{id}',[mainController::class,'deleteData']);

