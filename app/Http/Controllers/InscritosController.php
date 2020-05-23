<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Inscritos;
use App\Models\Questionarios;

class InscritosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $items = Inscritos::join('questionarios', 'inscritos.id', '=', 'questionarios.inscrito_id')
                            ->select('inscritos.*', 'questionarios.Q27', 'questionarios.Q4')->get();

        return view('admin.lista-inscritos', compact(['items']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inscrito = Inscritos::find($id)
                    ->join('questionarios', 'inscritos.id', '=', 'questionarios.inscrito_id')
                    ->select('inscritos.*', 'questionarios.*')->get();

        return view('admin.show-inscrito', compact(['inscrito']));
    }

    public function associados()
    {
        $items = Inscritos::join('questionarios', 'inscritos.id', '=', 'questionarios.inscrito_id')
                    ->where('questionarios.Q27', '=', '1')
                    ->select('inscritos.*', 'questionarios.Q27', 'questionarios.Q4')->get();

        return view('admin.lista-associados', compact(['items']));
    }

    public function naoAssociados()
    {
        $items = Inscritos::join('questionarios', 'inscritos.id', '=', 'questionarios.inscrito_id')
                    ->where('questionarios.Q27', '=', '0')
                    ->select('inscritos.*', 'questionarios.Q27', 'questionarios.Q4')->get();

        return view('admin.lista-nao-associados', compact(['items']));
    }

}
