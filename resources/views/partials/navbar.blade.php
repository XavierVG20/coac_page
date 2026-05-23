<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
    <a href="/" class="navbar-brand p-0">
        <img src="{{ asset('uploads/institucional/'.$info->imagen) }}" alt="Logo" style="height: 60px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">

            <a href="/" class="nav-item nav-link {{ request()->routeIs('inicio') ? 'active' : '' }}">Inicio</a>
            <a href="{{ route('nosotros') }}"
                class="nav-item nav-link {{ request()->routeIs('nosotros') ? 'active' : '' }}">Sobre Nostros</a>
            <a href="{{ route('servicios') }}"
                class="nav-item nav-link {{ request()->routeIs('servicios') ? 'active' : '' }}">Servicios</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Productos</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('creditos') }}"
                        class="dropdown-item {{ request()->routeIs('creditos') ? 'active' : '' }}">Creditos</a>
                    <a href="{{ route('inversiones') }}"
                        class="dropdown-item {{ request()->routeIs('inversiones') ? 'active' : '' }}">Inversiones</a>
                </div>
            </div>
            <a href="{{ route('noticia') }}"
                class="nav-item nav-link {{ request()->routeIs('noticia') ? 'active' : '' }}">Noticias</a>
            <a href="{{ route('educacion') }}"
                class="nav-item nav-link {{ request()->routeIs('educacion') ? 'active' : '' }}">Educacion</a>

            <a href="{{ route('contactos') }}"
                class="nav-item nav-link {{ request()->routeIs('contactos') ? 'active' : '' }}">Contactos</a>
        </div>

    </div>
</nav>