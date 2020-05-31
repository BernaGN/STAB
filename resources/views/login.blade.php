@extends('layouts.plantilla')
@section('content')
    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading"><img src="assets/img/logo_stab.png" width="20%"></div>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group"><label for="email">{{ trans('messages.Correo') }}</label><input class="form-control item" type="email" id="email" name="email"></div>
                    {!!$errors->first('email','<span>:message</span>')!!}
                    <div class="form-group"><label for="password">{{ trans('messages.Contraseña') }}</label><input class="form-control" type="password" id="password" name="password"></div>
                    <div class="form-group">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="checkbox"><label class="form-check-label" for="checkbox">Recuerdame</label></div>
                    </div><button class="btn btn-primary btn-block" type="submit">Iniciar sesión</button></form>
            </div>
        </section>
    </main>
@endsection
