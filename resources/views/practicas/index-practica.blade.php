@extends('layouts.plantilla')
@section('content')
    <main class="page shopping-cart-page">
        <section class="clean-block clean-cart dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Ver practica</h2>
                    <p>Información de los practicas registradas en el sistema.<br></p>
                </div>
                <div class="content">
                    <div class="row no-gutters">
                        <div class="col">
                            <div class="items">
                                <div class="row">
                                    <div class="col" style="margin: 0px;margin-bottom: 4px;"><a class="btn btn-primary" href="{{ route('practica.create') }}">Agregar practica</a></div>
                                </div>
                                <div class="row justify-content-center" style="margin-bottom: 5px;">
                                    <div class="col align-self-center"><input type="text" required="" autofocus="" style="width: 100%;"></div>
                                    <div class="col"><button class="btn btn-primary btn-block" type="button">Buscar</button></div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>Nombre:</strong></td>
                                                <td><strong>Materia:</strong></td>
                                                <td><strong>Carrera:</strong></td>
                                                <td><strong>Grupo:</strong></td>
                                                <td><strong>Fecha:</strong></td>
                                                <td><strong>Editar:</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Nombre practica</td>
                                                <td>biotecnologia</td>
                                                <td>TIC'S</td>
                                                <td>088-A</td>
                                                <td>27/05/2020</td>
                                                <td><button class="btn btn-primary" type="button">Editar</button></td>
                                            </tr>
                                            <tr>
                                                <td>Nombre practica</td>
                                                <td>biotecnologia</td>
                                                <td>TIC'S</td>
                                                <td>088-A</td>
                                                <td>27/05/2020</td>
                                                <td><button class="btn btn-primary" type="button">Editar</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
