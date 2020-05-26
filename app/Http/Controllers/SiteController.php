<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Inscritos;
use App\Models\Estados;
use App\Models\Cidades;
use App\Models\Questionarios;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailUser;
use App\Mail\SendMailContact;

class SiteController extends Controller
{
    public function home() {

        return view('site.home');
    }

    public function dados() {

        $estados = Estados::all();

        return view('site.dados', compact('estados'));
    }

    public function storeDados(Request $request)
    {
        $request->validate([
            'nome'   => 'required',
            'email'  => 'required|email|unique:inscritos',
            'cpf'    => 'required|unique:inscritos',
            'cep'    => 'required',
            'rua'    => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'uf'     => 'required'
          ]);

        $inscrito = new Inscritos([
            'nome' => $request->get('nome'),
            'email'=> $request->get('email'),
            'telefone'=> $request->get('telefone'),
            'cpf'=> $request->get('cpf'),
            'rg'=> $request->get('rg'),
            'cep'=> $request->get('cep'),
            'rua'=> $request->get('rua'),
            'numero'=> $request->get('numero'),
            'complemento'=> $request->get('complemento'),
            'bairro'=> $request->get('bairro'),
            'cidade'=> $request->get('cidade'),
            'uf'=> $request->get('uf')
          ]);

        $inscrito->save();
        $inscrito_id = $inscrito->id;

        // Mail::to($request->get('email'))->send(new SendMailContact($contato));

        return view('site.questionario', compact('inscrito_id'))->with('success', 'Seus dados foram cadastrados, agora vamos ao segundo passo que é o questionário!');

    }

    public function questionario(Request $request) {

        return view('site.questionario', compact('cidades'));
    }

    public function storeQuestionario(Request $request)
    {
        $request->validate([
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required',
            'q5' => 'required',
            'q6' => 'required',
            'q7' => 'required',
            'q8' => 'required',
            'q9_desc01' => 'required',
            'q9_desc02' => 'required',
            'q9_desc03' => 'required',
            'q10' => 'required',
            'q11' => 'required',
            'q12' => 'required',
            'q13' => 'required',
            'q14' => 'required',
            'q15' => 'required',
            'q16' => 'required',
            'q17' => 'required',
            'q18' => 'required',
            'q19' => 'required',
            'q20' => 'required',
            'q21' => 'required',
            'q22' => 'required',
            'q23' => 'required',
            'q24' => 'required',
            'q25' => 'required',
            'q26' => 'required',
            'q27' => 'required',
            'inscrito_id' => 'required'
          ]);

        $questionario = new Questionarios([
            'Q1' => $request->get('q1'),
            'Q2' => $request->get('q2'),
            'Q3' => $request->get('q3'),
            'Q4' => $request->get('q4'),
            'Q5' => $request->get('q5'),
            'Q6' => $request->get('q6'),
            'Q6_desc' => $request->get('q6_desc'),
            'Q7' => $request->get('q7'),
            'Q8' => $request->get('q8'),
            'Q9_desc01' => str_replace(',','.',$request->get('q9_desc01')),
            'Q9_desc02' => str_replace(',','.',$request->get('q9_desc02')),
            'Q9_desc03' => str_replace(',','.',$request->get('q9_desc03')),
            'Q10' => $request->get('q10'),
            'Q11' => $request->get('q11'),
            'Q12' => $request->get('q12'),
            'Q13' => $request->get('q13'),
            'Q14' => $request->get('q14'),
            'Q15' => $request->get('q15'),
            'Q16' => $request->get('q16'),
            'Q17' => $request->get('q17'),
            'Q18' => $request->get('q18'),
            'Q19' => $request->get('q19'),
            'Q20' => $request->get('q20'),
            'Q21' => $request->get('q21'),
            'Q22' => $request->get('q22'),
            'Q23' => $request->get('q23'),
            'Q24' => $request->get('q24'),
            'Q25' => $request->get('q25'),
            'Q26' => $request->get('q26'),
            'Q27' => $request->get('q27'),
            'inscrito_id' => $request->get('inscrito_id')
          ]);

        $questionario->save();

        // Mail::to($request->get('email'))->send(new SendMailContact($contato));

        return redirect('feedback')->with('success', 'Obrigado pela sua participação!');

    }

    public function feedback() {

        return view('site.feedback');
    }

}
