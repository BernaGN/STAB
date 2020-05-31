<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Illuminate\Support\Facades\Redirect;

class UsuarioController extends Controller
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
            $usuario = DB::table('users')->where('nombre', 'LIKE', '%'.$sql.'%')
                ->orderBY('id', 'ASC')
                ->paginate(20);
            return view('usuario.index', [
                "usuarios" => $usuario,
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
        $carrera = DB::table('carreras')
            ->orderBY('id', 'ASC')
            ->get();
        $grupo = DB::table('grupos')
            ->orderBY('id', 'ASC')
            ->get();
        $tipo = DB::table('tipo_usuarios')
            ->orderBY('id', 'ASC')
            ->get();
        return view('usuario.registrar-usuario', [
            "carreras" => $carrera,
            "grupos" => $grupo,
            "tipos" => $tipo
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
        $request['password'] = bcrypt($request['password']);
        User::create($request->all());
        return Redirect::to('usuarios')
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
        $usuario =  DB::table('users')
            ->join('carreras', 'users.carrera_id', '=', 'carreras.id')
            ->join('grupos', 'users.grupo_id', '=', 'grupos.id')
            ->join('tipo_usuarios', 'users.usuario_id', '=', 'tipo_usuarios.id')
            ->select('users.id', 'users.nombre', 'users.email',
                'users.no_control', 'carreras.nombre as carrera', 'grupos.nombre as grupo',
                'tipo_usuarios.nombre as tipo')
            ->where('users.id', '=', $id)
            ->first();
        return view('usuario.ver-usuario', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $usuario)
    {
        $carrera = DB::table('carreras')
            ->orderBY('id', 'ASC')
            ->get();
        $grupo = DB::table('grupos')
            ->orderBY('id', 'ASC')
            ->get();
        $tipo = DB::table('tipo_usuarios')
            ->orderBY('id', 'ASC')
            ->get();
        return view('usuario.editar-usuario', [
            "usuario" => $usuario,
            "carreras" => $carrera,
            "grupos" => $grupo,
            "tipos" => $tipo
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $usuario)
    {
        $request['password'] = bcrypt($request['password']);
        $usuario->update($request->all());
        return Redirect::to('usuarios')
                        ->with('success','Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $usuario)
    {
        $usuario->delete();
        return Redirect::to('usuarios')
                        ->with('success','Eliminado correctamente');
    }
}
