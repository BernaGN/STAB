<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\MaterialQuimico;
use Carbon;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MaterialesImport;

class MaterialesController extends Controller
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
            $equipos = DB::table('material_quimico')->where('nombre', 'LIKE', '%'.$sql.'%')
                ->orderBY('id', 'ASC')
                ->paginate(20);
            return view('inventario.index-material', [
                "equipos" => $equipos,
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
        return view('inventario.registrar-material');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        MaterialQuimico::create($request->all());
        return Redirect::to('materiales')
            ->with('success','Pelicula agregada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $material = MaterialQuimico::findOrFail($id);
        return view('inventario.ver-material', compact('material'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $material = MaterialQuimico::findOrFail($id);
        return view('inventario.editar-material', compact('material'));
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
        $material = MaterialQuimico::findOrFail($id);
        $material->update($request->all());
        return Redirect::to('materiales')
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
        $material = MaterialQuimico::findOrFail($id);
        $material->delete();
        return Redirect::to('materiales')
                        ->with('success','Eliminado correctamente');
    }

    public function listarPdf()
    {
        $materiales =  DB::table('material_quimico')
            ->orderBy('material_quimico.id', 'ASC')
            ->get();
        $cont = MaterialQuimico::count();
        $mytime = Carbon\Carbon::now();

        $pdf= \PDF::loadView('pdf.materialPdf', [
            'materiales'=>$materiales,
            'cont'=>$cont,
            'fecha'=>$mytime
        ]);
        return $pdf->download('materiales.pdf');
    }

    public function import(Request $request)
    {
        Excel::import(new MaterialesImport, request()->file('excel'));
        return Redirect::to('materiales')
                        ->with('success','Agregado correctamente');
    }
}
