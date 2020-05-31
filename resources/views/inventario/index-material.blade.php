@extends('layouts.plantilla')
@section('content')
    <main class="page shopping-cart-page">
        <section class="clean-block clean-cart dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Ver Materiales</h2>
                    <p>Información de los recursos existentes.<br></p>
                </div>
                <div class="content">
                    <div class="row no-gutters">
                        <div class="col">
                            <div class="items">
                                <div class="row">
                                    <div class="col" style="margin: 0px;margin-bottom: 4px;"><a href="{{ route('materiales.create') }}" type="button"  class="btn btn-primary">Agregar</a></div>
                                    <div class="col" style="margin: 0px;margin-bottom: 4px;"><a href="{{ url('listarPdfmaterial')}}" type="button"  class="btn btn-link">Exportar a PDF</a></div>
                                    <div class="col" style="margin: 0px;margin-bottom: 4px;"><a href="{{ url('ExportarMateriales')}}" type="button"  class="btn btn-link">Exportar a Excel</a></div>
                                    <div class="links">
                                        <form method="post" action="{{ url('import-excel-materiales') }}" enctype="multipart/form-data">
                                            <fieldset>
                                                <legend>Importar datos</legend>
                                                @csrf
                                                <input type="file" name="excel">
                                                <br><br>
                                                <input type="submit" value="Enviar" style="padding: 10px 20px;">
                                            </fieldset>
                                        </form>
                                    </div>
                                </div><br>
                                <form action="materiales" method="get" autocomplete="off">
                                    @csrf
                                    <div class="row justify-content-center" style="margin-bottom: 5px;">
                                        <div class="col align-self-center"><input type="text" required="" autofocus="" style="width: 100%;" name="buscarTexto" value="{{$buscarTexto}}"></div>
                                        <div class="col"><button class="btn btn-primary btn-block" type="submit">Buscar</button></div>
                                    </div>
                                </form>
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
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                            <td>
                                                <strong>Nombre</strong></td>
                                                <td><strong>Material</strong></td>
                                                <td><strong>Cantidad</strong></td>
                                                <td><strong>Detalles</strong></td>
                                                <td><strong>Editar</strong></td>
                                                <td><strong>Eliminar</strong></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($equipos as $equipo)
                                            <tr>
                                                <td>{{ $equipo->nombre }}</td>
                                                <td>{{ $equipo->material }}</td>
                                                <td>{{ $equipo->cantidad }}</td>
                                                <form class="" action="{{ route('materiales.destroy',$equipo->id) }}" method="post">
                                                    <td><a class="btn btn-success" href="{{ route('materiales.show',$equipo->id) }}">Ver</a></td>
                                                    <td><a class="btn btn-primary" href="{{ route('materiales.edit',$equipo->id) }}">Editar</a></td>
                                                    @method('DELETE')
                                                    @csrf
                                                    <td><button class="btn btn-danger" type="submit" onclick="return confirm('Quieres eliminarlo?')">Eliminar</button></td>
                                                </form>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $equipos->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
