<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banners;
use App\Models\Assinaturas;
use App\Models\RedeSociais;
use App\Models\Produtos;
use App\Models\Modelos;
use App\Models\Contatos;
use App\Models\Comentarios;
use App\Models\Vendas;
use App\Models\Clientes;
use PagSeguro;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailUser;
use App\Mail\SendMailContact;

class SiteController extends Controller
{
    public function home() {

        return view('site.home');
    }

    public function dados() {

        return view('site.dados');
    }

    public function questionario(Request $request) {

        return view('site.questionario');
    }

    public function contato() {

        $socials = RedeSociais::get();

        $modelo = Modelos::get();

        return view('site.contato', compact(['socials', 'modelo']));
    }

    public function storeContato(Request $request)
    {
        $request->validate([
            'nome'=>'required',
            'email'=> 'required',
            'mensagem'=> 'required'
          ]);

        $contato = new Contatos([
            'nome' => $request->get('nome'),
            'email'=> $request->get('email'),
            'telefone'=> $request->get('telefone'),
            'mensagem'=> $request->get('mensagem')
          ]);

        $contato->save();

        Mail::to($request->get('email'))->send(new SendMailContact($contato));

        return redirect('contato')->with('success', 'Mensagem enviada!');

    }

}
