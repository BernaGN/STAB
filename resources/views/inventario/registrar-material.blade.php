@extends('layouts.plantilla')
@section('content')
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Registrar material</h2>
                    <p>Es necesario que llenes cada uno de los siguientes campos de texto con la informacion correspondiente al material.</p>
                </div>
                <form action="{{route('materiales.store')}}" method="post">
                    <div class="form-group"><label for="nombre">Nombre</label><input class="form-control" type="text" name="nombre" id="nombre" required=""></div>
                    <div class="form-group"><label for="material">Material</label><input class="form-control" type="text" name="material" id="material" required=""></div>
                    <div class="form-group"><label for="capacidad">Capacidad</label><input class="form-control" type="text" name="capacidad" id="capacidad" required=""></div>
                    <div class="form-group"><label for="marca">Marca</label><input class="form-control" type="text" name="marca" id="marca" required=""></div>
                    <div class="form-group"><label for="cantidad">Cantidad</label><input class="form-control" type="text" name="cantidad" id="cantidad" required=""></div>
                    @csrf
                    <button class="btn btn-primary btn-block" type="submit">Enviar</button>
                </form>
            </div>
        </section>
    </main>
@endsection
