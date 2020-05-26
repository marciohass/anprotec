<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Usuarios;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Usuarios::all();

        return view('admin.lista-usuarios', compact(['items']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.form-usuarios');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'   => 'required',
            'email'  => 'required|email|unique:users',
            'password' => 'required'
          ]);

        $usuario = new Usuarios([
            'name' => $request->get('name'),
            'email'=> $request->get('email'),
            'password'=> Hash::make($request->get('password'))
          ]);

        $usuario->save();

        return redirect('admin/lista-usuarios')->with('success', 'Usuário cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuarios::find($id);

        return view('admin.form-edit-usuarios', compact(['usuario']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $modelo = Usuarios::find($id);

        $modelo->name = $request->get('name');
        $modelo->email = $request->get('email');
        $modelo->password = Hash::make($request->get('password'));

        $modelo->save();

        return redirect('admin/lista-usuarios')->with('success', 'Usuário foi atualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Usuarios::findOrFail($id);
        $data->delete();

        return redirect('admin/lista-usuarios')->with('success', 'Usuário excluído com sucesso!');
    }
}
