<header class="navbar-dark-v1">
    <div class="header-position">
        <span class="sidebar-toggler">
            <i class="las la-times"></i>
        </span>
        <div class="dashboard-logo d-flex justify-content-center align-items-center py-20">
            <a class="logo" href="">
                <img src="{{ asset('assets/img/logo-1.png') }}" alt="Logo">
            </a>

            <a class="logo-icon" href="">
                <img src="{{ asset('assets/img/logo-2.png') }}" alt="Logo">
            </a>

        </div>
        <nav class="side-nav">
            <ul>

                <li class="{{ (request()->is('admin.home*')) ? 'active' : '' }}">
                    <a href="{{ url('/admin/home') }}" role="button" aria-expanded="false" aria-controls="dashboard">
                        <i class="las la-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>


                <li class="">
                    <a href="#config_system" class="dropdown-icon" data-bs-toggle="collapse" role="button"
                        aria-expanded="" aria-controls="config_system">
                        <i class="las la-cog"></i>
                        <span>Noticias</span>
                    </a>
                    <ul class="sub-menu collapse " id="config_system">


                        <li>
                            <a href="{{ url('/admin/categorias') }}" role="button" aria-expanded="false"
                                aria-controls="dashboard">

                                <span>Categorias</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/admin/noticias') }}" role="button" aria-expanded="false"
                                aria-controls="dashboard">

                                <span>Noticias</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="">
                    <a href="#imagen" class="dropdown-icon" data-bs-toggle="collapse" role="button" aria-expanded="">
                        <i class="las la-image"></i>
                        <span>Imagenes</span>
                    </a>
                    <ul class="sub-menu collapse " id="imagen">


                        <li>
                            <a href="{{ url('/admin/sliders') }}" role="button" aria-expanded="false"
                                aria-controls="dashboard">

                                <span>Imagenes</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/admin/slider-categorias') }}" role="button" aria-expanded="false"
                                aria-controls="dashboard">

                                <span>Categorias</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="{{ (request()->is('admin.noticias*')) ? 'active' : '' }}">
                    <a href="{{ url('/admin/institucional') }}" role="button" aria-expanded="false"
                        aria-controls="dashboard">
                        <i class="las  la-university"></i>
                        <span>Informacion Institucional</span>
                    </a>
                </li>

                <li class="">
                    <a href="{{ url('/admin/agencias') }}" role="button" aria-expanded="false"
                        aria-controls="dashboard">
                        <i class="las   la-building"></i>
                        <span>Agencias </span>
                    </a>
                </li>
               

            </ul>
        </nav>
    </div>
</header>