<?php

use App\Http\Controllers\COAController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('general/login', [GeneralController::class, 'selLogin']);
Route::post('coa/store-group', [COAController::class, 'storeGroup']);
Route::delete('coa/delete-group', [COAController::class, 'destroyGroup']);
Route::delete('coa/delete-modul', [COAController::class, 'destroyModul']);
Route::post('coa/get-group-name', [COAController::class, 'queryGroupName']);
Route::post('coa/store-modul', [COAController::class, 'storeModul']);
Route::post('coa/store-credit', [COAController::class, 'storeCredit']);
Route::delete('coa/delete-credit', [COAController::class, 'destroyCredit']);
Route::post('coa/store-supplier', [COAController::class, 'storeSupplier']);
Route::delete('coa/delete-supplier', [COAController::class, 'destroySupplier']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::post('coa', [COAController::class, 'run']);
