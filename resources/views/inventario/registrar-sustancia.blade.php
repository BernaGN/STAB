@extends('layouts.plantilla')
@section('content')
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Registrar sustancia</h2>
                    <p>Es necesario que llenes cada uno de los siguientes campos de texto con la informacion correspondiente a la sustancia</p>
                </div>
                <form action="{{route('sustancias.store')}}" method="post">
                    <div class="form-group"><label for="nombre">Nombre</label><input class="form-control" type="text" name="nombre" id="nombre" required=""></div>
                    <div class="form-group"><label for="formula">Formula</label><input class="form-control" type="text" name="formula" id="formula" required=""></div>
                    <div class="form-group"><label for="cantidad">Cantidad</label><input class="form-control" type="text" name="cantidad" id="cantidad" required=""></div>
                    <div class="form-group"><label for="concentracion">Concentración</label><input class="form-control" type="text" name="concentracion" id="concentracion" required=""></div>
                    @csrf
                    <button class="btn btn-primary btn-block" type="submit">Enviar</button>
                </form>
            </div>
        </section>
    </main>
@endsection
