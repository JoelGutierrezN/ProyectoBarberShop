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
            @if (Auth::check()) {
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    logo_usuario
                    </a>
                    <div class="dropdown-menu f-negro text-white" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Cuenta</a>
                        <a class="dropdown-item" href="#">Citas</a>
                        <a class="dropdown-item" href="#">Direcciones</a>
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