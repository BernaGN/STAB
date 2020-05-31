@extends('pdf.plantilla')
@section('content')
<body>
    <div>
        <h3>Lista de Productos <span class="derecha">{{now()}}</span></h3>
    </div>
    <div>
        <table class="table table-bordered table-striped table-sm">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Material</th>
                    <th>Capacidad</th>
                    <th>Marca</th>
                    <th>Cantidad</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($materiales as $material)
                <tr>
                    <td>{{$material->id}}</td>
                    <td>{{$material->nombre}}</td>
                    <td>{{$material->material}}</td>
                    <td>{{$material->capacidad}}</td>
                    <td>{{$material->marca}}</td>
                    <td>{{$material->cantidad}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="izquierda">
        <p><strong>Total de registros: </strong>{{$cont}}</p>
    </div>
</body>
@endsection
