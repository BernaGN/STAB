@extends('pdf.plantilla')
@section('content')
<main>
    <div>
        <h3>Lista de Productos <span class="derecha">{{now()}}</span></h3>
    </div>
    <div>
        <table class="table table-bordered table-striped table-sm">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Formula</th>
                    <th>Cantidad</th>
                    <th>Concentracion</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($sustancias as $sustancia)
                <tr>
                    <td>{{$sustancia->id}}</td>
                    <td>{{$sustancia->nombre}}</td>
                    <td>{{$sustancia->formula}}</td>
                    <td>{{$sustancia->cantidad}}</td>
                    <td>{{$sustancia->concentracion}}</td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="izquierda">
        <p><strong>Total de registros: </strong>{{$cont}}</p>
    </div>
</main>
@endsection
