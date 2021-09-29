<header class="header">

    <div class="header__wrap">
        <button class="header__toggle-sidebar" id="sidebarToggle"><i class="fas fa-ellipsis-v"></i></button>

        <a href="{{ route('home') }}" class="header__logo">
            <img src="{{ url('public/assets/img/logo.png') }}" alt="" class="header__logo-image">
        </a>
    </div>

    <input type="search" id="searchForm" class="header__search-form" placeholder="Search">

    <ul class="header__menu menu">
        <li class="menu__item">
            <button id="toggleUserMenu">
                <img src="{{ url('public/assets/img/placeholder.png') }}" alt="" class="header__user-icon">
            </button>
        </li>
        @include('includes.user-menu')
    </ul>


</header>
