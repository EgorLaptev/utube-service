<ul class="user-menu menu" id="userMenu">
    @auth
    <li class="menu__item">
        <a href="{{ route('user') }}" class="menu__link"> <i class="fas fa-user-circle"></i> My channel</a>
    </li>
    <li class="menu__item">
        <a href="{{ route('upload') }}" class="menu__link"> <i class="fas fa-cloud-upload-alt"></i> Upload video</a>
    </li>
    <li class="menu__item">
        <a href="{{ route('logout') }}" class="menu__link"> <i class="fas fa-sign-out-alt"></i> Logout</a>
    </li>
    <li class="menu__item">
        <a href="{{ route('settings') }}" class="menu__link"> <i class="fas fa-cog"></i> Settings </a>
    </li>
    @endauth
    @guest
    <li class="menu__item">
        <a href="{{ route('sign-up-form') }}" class="menu__link"> <i class="fas fa-user-plus"></i> Sign up</a>
    </li>
    <li class="menu__item">
        <a href="{{ route('sign-in-form') }}" class="menu__link"> <i class="fas fa-sign-in-alt"></i> Sign in</a>
    </li>
    @endguest
</ul>
