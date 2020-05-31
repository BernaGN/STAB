<ul class="nav navbar-nav ml-auto">
    <li class="nav-item" role="presentation">
        <a class="nav-link" href="{{url('home')}}" onclick="event.preventDefault(); document.getElementById('home-form').submit();">INICIO</a>
        <form id="home-form" action="{{url('home')}}" method="GET" style="display: none;">
            @csrf
        </form>
    </li>
    @if(Auth::user()->usuario_id == 3)
    <li class="nav-item" role="presentation">
        <li class="nav-item dropdown" style="filter: saturate(0%);font-size: 12.8px;color: rgb(0,0,0,0.7); cursor:pointer;">
            <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">INVENTARIO</a>
            <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" role="presentation" style="font-size: 12.8px;" href="{{url('sustancias')}}" onclick="event.preventDefault(); document.getElementById('sustancias-form').submit();">SUSTANCIAS</a>
                <form id="sustancias-form" action="{{url('sustancias')}}" method="GET" style="display: none;">
                    @csrf
                </form>
                <a class="dropdown-item" role="presentation" style="font-size: 12.8px;" href="{{url('materiales')}}" onclick="event.preventDefault(); document.getElementById('materiales-form').submit();">MATERIALES</a>
                <form id="materiales-form" action="{{url('materiales')}}" method="GET" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    </li>
    @endif
    @if(Auth::user()->usuario_id == 2 || Auth::user()->usuario_id == 3)
    <li class="nav-item" role="presentation">
        <a class="nav-link" href="{{url('practica')}}" onclick="event.preventDefault(); document.getElementById('practica-form').submit();">pRÁCTICAs</a>
        <form id="practica-form" action="{{url('practica')}}" method="GET" style="display: none;">
            @csrf
        </form>
    </li>
    @endif
    @if(Auth::user()->usuario_id == 3)
    <li class="nav-item" role="presentation">
        <a class="nav-link" href="{{url('usuarios')}}" onclick="event.preventDefault(); document.getElementById('usuarios-form').submit();">usuarios</a>
        <form id="usuarios-form" action="{{url('usuarios')}}" method="GET" style="display: none;">
            @csrf
        </form>
    </li>
    @endif
    <li class="nav-item" role="presentation">
        <li class="nav-item dropdown" style="filter: saturate(0%);font-size: 12.8px;color: rgb(0,0,0,0.7); cursor:pointer;">
            <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">Lenguaje</a>
            <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" role="presentation" style="font-size: 12.8px;" href="{{ url('lang', ['es']) }}"  onclick="event.preventDefault(); document.getElementById('es-form').submit();">Español</a>
                <form id="es-form" action="{{ url('lang', ['es']) }}" method="GET" style="display: none;">
                    @csrf
                </form>
                <a class="dropdown-item" role="presentation" style="font-size: 12.8px;" href="{{ url('lang', ['en']) }}"  onclick="event.preventDefault(); document.getElementById('en-form').submit();">Ingles</a>
                <form id="en-form" action="{{ url('lang', ['en']) }}" method="GET" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    </li>
    @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->email }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="return confirm('¿Quieres cerrar sesion?')">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
</ul>
