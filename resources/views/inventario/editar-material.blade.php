@extends('layouts.plantilla')
@section('content')
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Modificar material</h2>
                    <p>Es necesario que llenes cada uno de los siguientes campos de texto con la informacion correspondiente al material.</p>
                </div>
                <form action="{{route('materiales.update', $material->id)}}" method="post">
                    <div class="form-group"><label for="name">Nombre</label><input class="form-control" type="text" name="nombre" value="{{$material->nombre}}" required=""></div>
                    <div class="form-group"><label for="password">Material</label><input class="form-control" type="text" name="material" value="{{$material->material}}" required=""></div>
                    <div class="form-group"><label for="password">Capacidad</label><input class="form-control" type="text" name="capacidad" value="{{$material->capacidad}}" required=""></div>
                    <div class="form-group"><label for="password">Marca</label><input class="form-control" type="text" name="marca" value="{{$material->marca}}" required=""></div>
                    <div class="form-group"><label for="password">Cantidad</label><input class="form-control" type="text" name="cantidad" value="{{$material->cantidad}}" required=""></div>
                    @csrf
                    @method('PUT')
                    <button class="btn btn-primary btn-block" type="submit">Enviar</button>
                </form>
            </div>
        </section>
    </main>
@endsection
