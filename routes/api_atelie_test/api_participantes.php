<?php

use App\Http\Controllers\atelie_test\ParticipantesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API participantes
|--------------------------------------------------------------------------
|
|   All routes of api participantes;
|
*/

Route::group(['middleware' => "api", 'prefix' => "/posts/participantes", 'controller' => ParticipantesController::class], function () {
    Route::post('/store', "store_participante");
    Route::post('/assign-empresa', "assign_empresa");
    Route::put('/edit-participante-for-empresa', "edit_add_participante_for_empresa");
});