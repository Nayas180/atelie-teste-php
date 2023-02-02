<?php

namespace App\Http\Controllers\atelie_test;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmpresasRequest;
use App\Models\Empresa;

/**
 * 
 *  The Controller class of empresas
 * 
 *  This Controller is responsible of store, show and more.
 * 
 */
class EmpresasController extends Controller
{
    /**
     * 
     * This method create a new empresa in database
     * 
     * 
     * @return object
     * 
     */
    public function store_empresa(StoreEmpresasRequest $request) : object
    {
        $new_empresa = Empresa::create([
            'cnpj' => $request->cnpj,
            'razao_social' => $request->razao_social,
        ]);

        return $new_empresa->exists ? response()->json(['message' => "Participante create with success"], 200) : response()->json(['message' => "There is a error, please try again later"], 500);
    }
}
