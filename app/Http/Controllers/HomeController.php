<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscritos;
use App\Models\Questionarios;
use App\Models\Estados;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // quadros de totais
        $count_inscritos = Inscritos::count();
        $count_associados = Questionarios::where('Q27', '=', '1')->count();
        $count_nao_associados = Questionarios::where('Q27', '=', '0')->count();
        // $count_produtos = Vendas::where('tipo_venda', '=', 'P')->count();

        return view('admin/dashboard', compact('count_inscritos','count_associados','count_nao_associados'));
    }
}
