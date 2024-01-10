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
Route::post('coa/get-modul-name', [COAController::class, 'queryModulName']);
Route::post('coa/store-modul', [COAController::class, 'storeModul']);
Route::put('coa/update-modul/{id}', [COAController::class, 'updateModul']);
Route::post('coa/store-credit', [COAController::class, 'storeCredit']);
Route::patch('coa/update-credit/{id}', [COAController::class, 'updateCredit']);
Route::delete('coa/delete-credit', [COAController::class, 'destroyCredit']);
Route::post('coa/store-customer', [COAController::class, 'storeCustomer']);
Route::patch('coa/update-customer/{id}', [COAController::class, 'updateCustomer']);
Route::delete('coa/delete-customer', [COAController::class, 'destroyCustomer']);
Route::post('coa/store-supplier', [COAController::class, 'storeSupplier']);
Route::patch('coa/update-supplier/{id}', [COAController::class, 'updateSupplier']);
Route::delete('coa/delete-supplier', [COAController::class, 'destroySupplier']);
Route::post('coa/store-document-format', [COAController::class, 'storeDocumentFormat']);
Route::put('coa/update-document-format', [COAController::class, 'updateDocumentFormat']);
Route::delete('coa/delete-document-format', [COAController::class, 'destroyDocumentFormat']);
Route::post('coa/store-currency', [COAController::class, 'storeCurrency']);
Route::patch('coa/update-currency/{id}', [COAController::class, 'updateCurrency']);
Route::delete('coa/delete-currency', [COAController::class, 'destroyCurrency']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::post('coa', [COAController::class, 'run']);
