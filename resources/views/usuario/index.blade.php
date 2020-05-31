@extends('layouts.plantilla')
@section('content')
    <main class="page shopping-cart-page">
        <section class="clean-block clean-cart dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Ver usuarios</h2>
                    <p>Información de los usuarios registrados en el sistema.<br></p>
                </div>
                <div class="content">
                    <div class="row no-gutters">
                        <div class="col">
                            <div class="items">
                                <div class="row">
                                    <div class="col" style="margin: 0px;margin-bottom: 4px;"><a href="{{ route('usuarios.create') }}" type="button">Agregar usuario</a></div>
                                </div>
                                <form action="ver" method="get" autocomplete="off">
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
                                                <td><strong>Nombre</strong></td>
                                                <td><strong>Correo electrónico</strong></td>
                                                <td><strong>No. de control</strong></td>
                                                <td><strong>Detalles</strong></td>
                                                <td><strong>Editar</strong></td>
                                                <td><strong>Eliminar</strong></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($usuarios as $usu)
                                            <tr>
                                                <td>{{ $usu->nombre }}</td>
                                                <td>{{ $usu->email }}</td>
                                                <td>{{ $usu->no_control }}</td>
                                                <form class="" action="{{ route('usuarios.destroy',$usu->id) }}" method="post">
                                                    <td><a class="btn btn-success" href="{{ route('usuarios.show',$usu->id) }}">Ver</a></td>
                                                    <td><a class="btn btn-primary" href="{{ route('usuarios.edit',$usu->id) }}">Editar</a></td>
                                                    @method('DELETE')
                                                    @csrf
                                                    <td><button class="btn btn-danger" type="submit"  onclick="return confirm('Quieres eliminarlo?')">Eliminar</button></td>
                                                </form>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $usuarios->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
