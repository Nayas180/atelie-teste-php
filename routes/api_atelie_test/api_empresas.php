<?php

use App\Http\Controllers\atelie_test\EmpresasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API empresas
|--------------------------------------------------------------------------
|
|   All routes of api empresas;
|
*/


Route::group(['middleware' => 'api', 'prefix' => '/posts/empresas', 'controller' => EmpresasController::class], function () {
    Route::post('/store', "store_empresa");
});