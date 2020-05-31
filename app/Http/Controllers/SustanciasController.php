<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\SustanciaQuimica;
use Carbon;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\SustanciasImport;

class SustanciasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'laboratorista']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request)
        {
            $sql = trim($request->get('buscarTexto'));
            $sustancia = DB::table('sustancia_quimica')->where('nombre', 'LIKE', '%'.$sql.'%')
                ->orderBY('id', 'ASC')
                ->paginate(20);
            return view('inventario.index-sustancia', [
                "equipos" => $sustancia,
                "buscarTexto" => $sql
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventario.registrar-sustancia');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SustanciaQuimica::create($request->all());
        return Redirect::to('sustancias')
            ->with('success','Pelicula agregada correctamente.');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sustancia = SustanciaQuimica::findOrFail($id);
        return view('inventario.ver-sustancia', compact('sustancia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sustancia = SustanciaQuimica::findOrFail($id);
        return view('inventario.editar-sustancia',compact('sustancia'));
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
        $sustancia = SustanciaQuimica::findOrFail($id);
        $sustancia->update($request->all());
        return Redirect::to('sustancias')
            ->with('success','Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sustancia = SustanciaQuimica::findOrFail($id);
        $sustancia->delete();
        return Redirect::to('sustancias')
                        ->with('success','Eliminado correctamente');
    }

    public function listarPdf()
    {
        $sustancias =  DB::table('sustancia_quimica')
            ->orderBy('sustancia_quimica.id', 'ASC')
            ->get();
        $cont = SustanciaQuimica::count();
        $mytime = Carbon\Carbon::now();
        $pdf= \PDF::loadView('pdf.sustanciaPdf', [
            'sustancias'=>$sustancias,
            'cont'=>$cont,
            'fecha'=>$mytime
        ]);
        return $pdf->download('sustancias.pdf');
    }



    public function import(Request $request)
    {
        Excel::import(new SustanciasImport, request()->file('excel'));
        return Redirect::to('sustancias')
                        ->with('success','Agregado correctamente');
    }
}
