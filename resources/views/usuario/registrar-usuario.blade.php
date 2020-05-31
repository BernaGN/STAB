@extends('layouts.plantilla')
@section('content')
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Registrar usuario</h2>
                    <p>Es necesario que llenes cada uno de los siguientes campos de texto para registrar un nuevo usuario.</p>
                </div>
                    @if ($message = Session::get('mensaje'))
                        <div class="alert alert-warning">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <form action="{{ route('usuarios.store') }}" method="post">
                        <div class="form-group"><label for="name">Nombre</label><input class="form-control" type="text" name="nombre" required=""></div>
                        <div class="form-group"><label for="no_control">Número de control</label><input class="form-control" type="text" id="no_control" name="no_control" required=""></div>
                        <div class="form-group"><label for="password">Contraseña</label><input class="form-control" type="password" name="password" id="password" required=""></div>
                        <div class="form-group"><label for="email">Email</label><input class="form-control" type="email" name="email" id="email" required=""></div>
                        <div class="form-group">
                            <label for="carrera">Carrera</label>
                            <select class="form-control" id="carrera" name="carrera_id">
                                <option value=""></option>
                                @foreach($carreras as $carrera)
                                <option value="{{$carrera->id}}">{{$carrera->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="grupo">Grupo</label>
                            <select class="form-control" id="grupo" name="grupo_id">
                                <option value=""></option>
                                @foreach($grupos as $grupo)
                                <option value="{{$grupo->id}}">{{$grupo->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tipo">Tipo de usuario</label>
                            <select class="form-control" id="tipo" name="usuario_id">
                                <option value=""></option>
                                @foreach($tipos as $tipo)
                                <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        @csrf
                        <button class="btn btn-primary btn-block"type="submit">Enviar</button>
                    </form>
            </div>
        </section>
        <section>
        </section>
    </main>
@endsection
