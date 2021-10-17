<header class="header">

    <div class="header__wrap">
        <button class="header__toggle-sidebar" id="sidebarToggle"><i class="fas fa-ellipsis-v"></i></button>

        <a href="{{ route('home') }}" class="header__logo">
            <img src="{{ url('public/assets/img/logo.png') }}" alt="" class="header__logo-image">
        </a>
    </div>

    <form action="{{ route('home') }}" method="GET" class="header__search-form">
        <input type="search" name="search" id="searchForm" class="header__search-input" placeholder="Search">
    </form>

    <ul class="header__menu menu">
        <li class="menu__item">
            <button id="toggleUserMenu">
                @guest() <img src="{{ url('storage/app/avatars/placeholder.png') }}" alt="" class="header__user-icon"> @endguest
                @auth() <img src="{{ asset('storage/app') . '/' . \Illuminate\Support\Facades\Auth::user()->avatar }}" alt="" class="header__user-icon"> @endauth
            </button>
        </li>
        @include('includes.user-menu')
    </ul>


</header>
