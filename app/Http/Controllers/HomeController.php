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

        $inscritos = Inscritos::selectRaw('count(*) as inscrito_count, uf')
                            ->groupBy('uf')
                            ->get();

        foreach($inscritos as $inscrito) {
            $ufs[] = $inscrito->uf;
            $qtds[] = $inscrito->inscrito_count;
            $cores_grafico[] = "#6610f2";
        }

        $dados_qtd = implode(',', $qtds);
        $cores = "'".implode("','", $cores_grafico)."'";
        $uf = "'".implode("','", $ufs)."'";

        $associados = Inscritos::selectRaw('count(*) as inscrito_count, uf')
                            ->join('questionarios', 'inscritos.id', '=', 'questionarios.inscrito_id')
                            ->where('questionarios.Q27', '=', '1')
                            ->groupBy('uf')
                            ->get();

        foreach($associados as $associado) {
            $uf_associados[] = $associado->uf;
            $qtd_associados[] = $associado->inscrito_count;
            $cores_graf[] = "#6610f2";
        }

        $uf_assoc = "'".implode("','", $uf_associados)."'";
        $qtd_assoc = implode(',', $qtd_associados);
        $cor = "'".implode("','", $cores_graf)."'";

        return view('admin/dashboard', compact('count_inscritos','count_associados','count_nao_associados','dados_qtd','cores','uf', 'uf_assoc', 'qtd_assoc', 'cor'));
    }

}
