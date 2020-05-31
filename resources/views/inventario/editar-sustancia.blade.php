@extends('layouts.plantilla')
@section('content')
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Modificar sustancia</h2>
                    <p>Es necesario que llenes cada uno de los siguientes campos de texto con la informacion correspondiente a la sustancia</p>
                </div>
                <form action="{{route('sustancias.update', $sustancia->id)}}" method="post">
                    <div class="form-group"><label for="nombre">Nombre</label><input class="form-control" type="text" name="nombre" id="nombre" value="{{$sustancia->nombre}}" required=""></div>
                    <div class="form-group"><label for="formula">Formula</label><input class="form-control" type="text" name="formula" id="formula" value="{{$sustancia->formula}}" required=""></div>
                    <div class="form-group"><label for="cantidad">Cantidad</label><input class="form-control" type="text" name="cantidad" id="cantidad" value="{{$sustancia->cantidad}}" required=""></div>
                    <div class="form-group"><label for="concentracion">Concentración</label><input class="form-control" type="text" name="concentracion" id="concentracion" value="{{$sustancia->concentracion}}" required=""></div>
                    @csrf
                    @method('PUT')
                    <button class="btn btn-primary btn-block" type="submit">Enviar</button>
                </form>
            </div>
        </section>
    </main>
@endsection
