@extends('layouts.plantilla')
@section('content')
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <br><br><br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Id:</strong>
                            {{ $sustancia->id }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $sustancia->nombre }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Formula:</strong>
                            {{ $sustancia->formula }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $sustancia->cantidad }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Concentracion:</strong>
                            {{ $sustancia->concentracion }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
        </section>
    </main>
@endsection
