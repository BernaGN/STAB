@extends('layouts.plantilla')
@section('content')
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Registrar practica</h2>
                    <p>Es necesario que llenes cada uno de los siguientes campos de texto con la informacion correspondiente a la practica.</p>
                </div>
                <form>
                    <div class="form-group"><label for="name">Nombre</label><input class="form-control" type="text" required=""></div>
                    <div class="form-group"><label for="password">Materia</label><input class="form-control" type="text" required=""></div>
                    <div class="form-group"><label for="password">Carrera</label><select class="form-control"><option value="1">Tecnologias de la información y comunicaciones</option><option value="2">Desarrollo Sustentable</option></select></div>
                    <div class="form-group"><label for="password">Grupo</label><select class="form-control"><option value="088-A">088-A</option><option value="087-A">087-A</option></select></div>
                    <div class="form-group"><label for="password">Fecha</label><input class="form-control" type="date"></div>
                    <div class="form-group"><label for="password">Fecha</label><input class="form-control" type="time"></div>
                    <div class="form-group"><label for="password">Material</label><select class="form-control"><option value=""></option><option value="Matraz">Matraz</option></select></div>
                    <div class="form-group"><label for="password">Sustancia</label><select class="form-control"><option value=""></option><option value="ac_sulf">Ácido Súlfurico</option></select></div>
                    <div class="form-group"><label for="password">Equipo 1</label><select class="form-control"><option value=""></option><option value="eq_1">Equipo 1</option><option value="eq_2">Equipo 2</option><option value="eq_3">Equipo 3</option><option value="eq_4">Equipo 4</option><option value="eq_5">Equipo 5</option></select></div>
                    <div
                        class="form-group"><label for="password">Equipo 2</label><select class="form-control"><option value=""></option><option value="eq_1">Equipo 1</option><option value="eq_2">Equipo 2</option><option value="eq_3">Equipo 3</option><option value="eq_4">Equipo 4</option><option value="eq_5">Equipo 5</option></select></div>
            <div
                class="form-group"><label for="password">Equipo 3</label><select class="form-control"><option value=""></option><option value="eq_1">Equipo 1</option><option value="eq_2">Equipo 2</option><option value="eq_3">Equipo 3</option><option value="eq_4">Equipo 4</option><option value="eq_5">Equipo 5</option></select></div>
                <div
                    class="form-group"><label for="password">Equipo 4</label><select class="form-control"><option value=""></option><option value="eq_1">Equipo 1</option><option value="eq_2">Equipo 2</option><option value="eq_3">Equipo 3</option><option value="eq_4">Equipo 4</option><option value="eq_5">Equipo 5</option></select></div>
                    <div
                        class="form-group"><label for="password">Equipo 5</label><select class="custom-select" name="Selecciona"><option value=""></option><option value="eq_1">Equipo 1</option><option value="eq_2">Equipo 2</option><option value="eq_3">Equipo 3</option><option value="eq_4">Equipo 4</option><option value="eq_5">Equipo 5</option></select></div>
                        <button
                            class="btn btn-primary btn-block" type="submit">Enviar</button>
                            </form>
                            </div>
        </section>
    </main>
@endsection
