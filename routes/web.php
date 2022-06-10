<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImmunizationController;
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

Route::get('/',[ImmunizationController::class,'index']);
Route::get('create',[ImmunizationController::class,'create']);
Route::get('edit/{id}',[ImmunizationController::class,'edit']);
Route::get('report',[ImmunizationController::class,'report']);
//store record
Route::post('store-record',[ImmunizationController::class,'store']);
Route::put('update-record/{id}',[ImmunizationController::class,'update']);