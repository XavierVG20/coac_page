<nav class="navbar navbar-top navbar-expand-lg bg-body-tertiary py-20 bg-white sticky-top">
    <div class="container-fluid g-5">
        <span class="sidebar-toggler">
            <span class="icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 6H3" stroke="#7E7F92" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                    <path d="M21 12H3" stroke="#7E7F92" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                    <path d="M18 18H3" stroke="#7E7F92" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                </svg>
            </span>
        </span>
        <a class="navbar-brand ms-auto d-none" href="{{ url('/') }}">
             <img src="{{ asset('assets/admin/img/logo/LOGO_MIN.png') }}" alt="Logo">
        </a>

        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="las la-ellipsis-v"></span>
        </button>
        <div class="collapse navbar-collapse navbar-content px-lg-20 navbar-respons" id="navbarScroll">
            <div class="navbar-left-content me-lg-auto d-flex align-items-center gap-20">

            </div>

            <div class="navbar-right-content">
                <ul class="d-flex align-items-center gap-lg-4 gap-sm-2">
                 
                    </form>
                    <li class="dropdown pe-lg-20">
                        <a href="#" class="dropdown-toggle d-flex gap-12" data-bs-toggle="dropdown"
                            aria-expanded="false">                            
                            <img  src="{{ asset('assets/admin/img/logo/LOGO_MIN.png') }}" alt="" class="user-avater">
                            <span class="user-name">
                               @if(Auth::check())

    {{ Auth::user()->name }}

@endif </span>
                            <span class="active_status"></span>
                        </a>
                        <ul class="dropdown-menu popup-card">
                            <li>
                                <a class="dropdown-item" href="">
                                    <i class="lar la-user-circle"></i>
                                    <span>{{__ ("profile")}}</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="">
                                    <i class="las la-shield-alt"></i>
                                    <span>{{__ ('change_password')}}</span>
                                </a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="dropdown-item" type="submit">
                                        <i class="las la-sign-out-alt"></i>
                                        <span>{{__ ('logout')}}</span>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>