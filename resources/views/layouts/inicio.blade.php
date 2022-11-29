<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <title>Centro de Vida y Bienestar</title>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/accordion.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="{{ url('/') }}">
                    <span class="align-middle">Centro de Bienestar</span>
                </a>

                <ul class="sidebar-nav">
                    <!-- <button class="accordion">
                        <a>
                            <i class="align-middle" data-feather="sliders"></i> 
                            <span class="align-middle">Reportes</span>
                        </a>
                    </button>

                    <div class="panel">
                        <a class="sidebar-link" href="{{ route('valoracion.create') }}">
                            <span class="align-middle">Crear Registro</span>
                        </a>
                        <a class="sidebar-link" href="{{ route('valoracion.index') }}">
                            <span class="align-middle">Listar Registros</span>
                        </a>
                    </div> -->

                    <button class="accordion">
                        <a>
                            <i class="align-middle" data-feather="sliders"></i> 
                            <span class="align-middle">Medicina General</span>
                        </a>
                    </button>

                    <div class="panel">
                        <a class="sidebar-link" href="{{ route('medicina.create') }}">
                            <span class="align-middle">Crear Registro</span>
                        </a>
                        <a class="sidebar-link" href="{{ route('medicina.index') }}">
                            <span class="align-middle">Listar Registros</span>
                        </a>
                    </div>

                    <button class="accordion">
                        <a>
                            <i class="align-middle" data-feather="sliders"></i> 
                            <span class="align-middle">Geriatría</span>
                        </a>
                    </button>

                    <div class="panel">
                        <a class="sidebar-link" href="{{ route('geriatria.create') }}">
                            <span class="align-middle">Crear Registro</span>
                        </a>
                        <a class="sidebar-link" href="{{ route('geriatria.index') }}">
                            <span class="align-middle">Listar Registros</span>
                        </a>
                    </div>

                    <button class="accordion">
                        <a>
                            <i class="align-middle" data-feather="sliders"></i> 
                            <span class="align-middle">Kardex</span>
                        </a>
                    </button>

                    <div class="panel">
                        <a class="sidebar-link" href="{{ route('kardex.create') }}">
                            <span class="align-middle">Crear Registro</span>
                        </a>
                        <a class="sidebar-link" href="{{ route('kardex.index') }}">
                            <span class="align-middle">Listar Registros</span>
                        </a>
                    </div>

                    <button class="accordion">
                        <a>
                            <i class="align-middle" data-feather="sliders"></i> 
                            <span class="align-middle">Notas</span>
                        </a>
                    </button>

                    <li class="panel">
                        <a class="sidebar-link" href="{{ route('nota.create') }}">
                            <span class="align-middle">Crear Registro</span>
                        </a>
                        <a class="sidebar-link" href="{{ route('nota.index') }}">
                            <span class="align-middle">Listar Registros</span>
                        </a>
                    </li>

                    <!-- <button class="accordion">
                        <a>
                            <i class="align-middle" data-feather="sliders"></i> 
                            <span class="align-middle">Evolucion Enfermeria</span>
                        </a>
                    </button>

                    <div class="panel">
                        <a class="sidebar-link" href="{{ route('evolucion.create') }}">
                            <span class="align-middle">Crear Registro</span>
                        </a>
                        <a class="sidebar-link" href="{{ route('evolucion.index') }}">
                            <span class="align-middle">Listar Registros</span>
                        </a>
                    </div> -->

                    <!-- <button class="accordion">
                        <a>
                            <i class="align-middle" data-feather="sliders"></i> 
                            <span class="align-middle">Valoración Fisica</span>
                        </a>
                    </button>

                    <div class="panel">
                        <a class="sidebar-link" href="{{ route('valoracion.create') }}">
                            <span class="align-middle">Crear Registro</span>
                        </a>
                        <a class="sidebar-link" href="{{ route('valoracion.index') }}">
                            <span class="align-middle">Listar Registros</span>
                        </a>
                    </div> -->

                    <!-- <button class="accordion">
                        <a>
                            <i class="align-middle" data-feather="sliders"></i> 
                            <span class="align-middle">Valoración Alto Riesgo</span>
                        </a>
                    </button>

                    <div class="panel">
                        <a class="sidebar-link" href="{{ route('valoracion.create') }}">
                            <span class="align-middle">Crear Registro</span>
                        </a>
                        <a class="sidebar-link" href="{{ route('valoracion.index') }}">
                            <span class="align-middle">Listar Registros</span>
                        </a>
                    </div> -->

                    <!-- <button class="accordion">
                        <a>
                            <i class="align-middle" data-feather="sliders"></i> 
                            <span class="align-middle">Valoración Funcional</span>
                        </a>
                    </button>

                    <div class="panel">
                        <a class="sidebar-link" href="{{ route('valoracion.create') }}">
                            <span class="align-middle">Crear Registro</span>
                        </a>
                        <a class="sidebar-link" href="{{ route('valoracion.index') }}">
                            <span class="align-middle">Listar Registros</span>
                        </a>
                    </div>

                    <button class="accordion">
                        <a>
                            <i class="align-middle" data-feather="sliders"></i> 
                            <span class="align-middle">Valoración Marcha y Equilibrio</span>
                        </a>
                    </button>

                    <div class="panel">
                        <a class="sidebar-link" href="{{ route('valoracion.create') }}">
                            <span class="align-middle">Crear Registro</span>
                        </a>
                        <a class="sidebar-link" href="{{ route('valoracion.index') }}">
                            <span class="align-middle">Listar Registros</span>
                        </a>
                    </div> -->
                </ul>
            </div>
        </nav>
        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
                                data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
                                    data-bs-toggle="dropdown">
                                    <span class="text-dark">Salir</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Salir') }}
                                    </x-dropdown-link>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
            @yield('geriatria_crear')
            @yield('geriatria_lista')
            @yield('kardex_crear')
            @yield('kardex_lista')
            @yield('medicina_crear')
            @yield('medicina_lista')
            @yield('notas_crear')
            @yield('notas_lista')
            @yield('evolucion_crear')

        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <div class="row text-muted">
                <div class="col-6 text-start">
                    <p class="mb-0">
                        <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Hogar Geriatrico</strong></a>
                        &copy;
                    </p>
                </div>
                <div class="col-6 text-end">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a class="text-muted" href="https://adminkit.io/" target="_blank">Soporte</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-muted" href="https://adminkit.io/" target="_blank">Ayuda</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-muted" href="https://adminkit.io/" target="_blank">Privacidad</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-muted" href="https://adminkit.io/" target="_blank">Terminos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/dina.js') }}"></script>
    <script src="{{ asset('js/accordion.js') }}"></script>
    
</body>

</html>