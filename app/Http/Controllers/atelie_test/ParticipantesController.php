<?php

namespace App\Http\Controllers\atelie_test;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditParticipanteForEmpresaRequest;
use App\Http\Requests\StoreParticipantesRequest;
use App\Models\Participante;

/**
 * 
 *  The Controller class of participantes
 * 
 *  This Controller is responsible of store, show and more.
 * 
 */
class ParticipantesController extends Controller
{
    /**
     * 
     * This method create a new participante in database
     * 
     * 
     * @return object
     * 
     */
    public function store_participante(StoreParticipantesRequest $request) : object
    {   
        $new_participante = Participante::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'data_de_nascimento' => $request->data_de_nascimento
        ]);

        return $new_participante->exists ? response()->json(['message' => "Participante create with success"], 200) : response()->json(['message' => "There is a error, please try again later"], 500);
    }

    /**
     * 
     * This method modify/add participante for empresa in database
     * 
     * 
     * @return object
     * 
     */
    public function edit_add_participante_for_empresa(EditParticipanteForEmpresaRequest $request) : object
    {   
        $participante = Participante::find($request->id_participante);

        if(!$participante) {
            return response()->json(['message' => "Not found the participante"], 404);
        }

        $participante->empresa = $request->id_empresa;
        $participante->save();

        return response()->json(['message' => "Edited Participante with success"], 200);
    }
    
}
