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
                    <div class="form-group">
                        <label for="password">Carrera</label>
                        <select class="form-control">
                            <option value=""></option>
                            @foreach($carreras as $carrera)
                            <option value="{{ $carrera->id }}">{{ $carrera->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="password">Grupo</label>
                        <select class="form-control">
                            <option value=""></option>
                            @foreach($grupos as $grupo)
                            <option value="{{ $grupo->id }}">{{ $grupo->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group"><label for="password">Fecha</label><input class="form-control" type="date"></div>
                    <div class="form-group"><label for="password">Fecha</label><input class="form-control" type="time"></div>
                    <div class="form-group">
                        <label for="password">Material</label>
                        <select class="form-control">
                            <option value=""></option>
                            @foreach($materiales as $material)
                            <option value="{{ $material->id }}">{{ $material->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="password">Sustancia</label>
                        <select class="form-control">
                            <option value=""></option>
                            @foreach($sustancias as $sustancia)
                            <option value="{{ $sustancia->id }}">{{ $sustancia->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group"><label for="password">Equipo 1</label><input class="form-control" type="text" value="{{ $rand[0].', '.$rand[1].', '.$rand[2].', '.$rand[3].', '.$rand[4] }}" readonly></div>
                    <div class="form-group"><label for="password">Equipo 2</label><input class="form-control" type="text" value="{{ $rand[5].', '.$rand[6].', '.$rand[7].', '.$rand[8].', '.$rand[9] }}" readonly></div>
                    <div class="form-group"><label for="password">Equipo 3</label><input class="form-control" type="text" value="{{ $rand[10].', '.$rand[11].', '.$rand[12].', '.$rand[13].', '.$rand[14] }}" readonly></div>
                    <div class="form-group"><label for="password">Equipo 4</label><input class="form-control" type="text" value="{{ $rand[15].', '.$rand[16].', '.$rand[17].', '.$rand[18].', '.$rand[19] }}" readonly></div>
                    <div class="form-group"><label for="password">Equipo 5</label><input class="form-control" type="text" value="{{ $rand[20].', '.$rand[21].', '.$rand[22].', '.$rand[23].', '.$rand[24] }}" readonly></div>
                    <button class="btn btn-primary btn-block" type="submit">Enviar</button>
                </form>
            </div>
        </section>
    </main>
@endsection
