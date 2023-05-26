<?php
    session_start();
?>
<!-- MENU SIDEBAR-->
<aside class="menu-sidebar2">
    <div class="logo">
        <a href="#">
            <img src="{{ asset('template/images/icon/logo-white.png') }}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar2__content js-scrollbar1">
        <div class="account2">
            <div class="image img-cir img-120">
                <img src="{{ asset('template/images/icon/avatar-big-01.jpg') }}" alt="John Doe" />
            </div>
            <h4 class="name">{{ Auth()->user()->prenom }}</h4>
            <span class="role member">Admin</span>
        </div>
        <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">

                <li class="has-sub">

                    <a href="{{ route('admin_profil') }}">
                        <i class="fas fa-user"></i>Mon compte
                    </a>

                </li>

                <li class="has-sub">

                    <a onClick="event.preventDefault(); document.getElementById('deconnection').submit()" href="">
                        <i class="zmdi zmdi-power"></i>Déconnexion
                    </a>
                    <form action="{{ route('logout') }}" method="post" id="deconnection">
                        @csrf
                        @method('post')
                    </form>

                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR--