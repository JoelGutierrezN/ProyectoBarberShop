<!--Navegacion-->
<nav class="navbar navbar-expand-lg f-negro">
    <a class="navbar-brand logo" href="/">Studio F</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse link-blanco" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Inicio</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/servicios">Servicios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contacto">Contacto</a>
            </li>
            @if (Auth::check())
                <li class="nav-item dropdown">
                    <svg width="2em" height="2em" id="navbarDropdownMenuLink" viewBox="0 0 16 16" data-toggle="dropdown" class="bi bi-person-circle" fill="white" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                        <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                    </svg>
                    <div class="dropdown-menu f-negro text-white" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/perfil">Cuenta</a>
                        <a class="dropdown-item" href="/citas">Citas</a>
                        <a class="dropdown-item" href="/direcciones">Direcciones</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Cerrar Sesion') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-success" href="/login">Iniciar Sesion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-sm btn-outline-secondary" href="/register">Registrarse</a>
                </li>
            @endif
        </ul>
    </div>
</nav>