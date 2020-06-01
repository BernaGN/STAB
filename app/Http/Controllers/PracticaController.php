<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\Equipo;
use App\practica;
use App\PracticaMaterialQuimico;
use App\PracticaSustanciaQuimica;

class PracticaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'alumno']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('practicas.index-practica');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rand = range(1, 25);
        shuffle($rand);
        $materiales = DB::table('material_quimico')
            ->select('id', 'nombre')
            ->orderBY('id', 'ASC')
            ->get();
        $sustancias = DB::table('sustancia_quimica')
            ->select('id', 'nombre')
            ->orderBY('id', 'ASC')
            ->get();
        $grupos = DB::table('grupos')
            ->orderBY('id', 'ASC')
            ->get();
        $carreras = DB::table('carreras')
            ->orderBY('id', 'ASC')
            ->get();
        return view('practicas.registrar-practica', [
            'rand' => $rand,
            'materiales' => $materiales,
            'sustancias' => $sustancias,
            'grupos' => $grupos,
            'carreras' => $carreras
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
