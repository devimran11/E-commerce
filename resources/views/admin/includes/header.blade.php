<ul class="navbar-nav ml-auto ml-md-0 dropdown-menu-lg-left">
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw">{{ Auth::user()->name }}</i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()">Logout

            </a>
            <form method="post" action="{{ route('logout') }}" id="logoutForm">
                @csrf
            </form>
        </div>
    </li>
</ul>
