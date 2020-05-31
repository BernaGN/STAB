@extends('layouts.plantilla')
@section('content')
    <main class="page">
        <section class="clean-block about-us">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">{{ trans('messages.QueEsPregunta') }}</h2>
                    <p>{{ trans('messages.QueEsRespuesta') }}</p>
                </div>
                <form>
                    <div class="form-row justify-content-center">
                        <div class="col"><input class="form-control form-control-lg" type="text" placeholder="Ingresa tu busqueda"></div>
                        <div class="col-auto"><button class="btn btn-primary btn-block btn-lg" type="button">Buscar</button></div>
                    </div>
                </form><br>
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center">
                            <div class="card-body info">
                                <p><img src="assets/img/registro.png" width="60%"></p>
                                <h4 class="card-title">Registrar práctica</h4>
                                <p class="card-text">Es necesario registrar una práctica para establecer fecha y materiales necesarios.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center">
                            <div class="card-body info">
                                <p><img src="assets/img/registro.png" width="60%"></p>
                                <h4 class="card-title">Registrar práctica</h4>
                                <p class="card-text">Es necesario registrar una práctica para establecer fecha y materiales necesarios.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center">
                            <div class="card-body info">
                                <p><img src="assets/img/registro.png" width="60%"></p>
                                <h4 class="card-title">Registrar práctica</h4>
                                <p class="card-text">Es necesario registrar una práctica para establecer fecha y materiales necesarios.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
