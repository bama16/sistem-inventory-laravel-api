<nav class="navbar navbar-expand px-3 border-bottom">
    <button class="btn btn-close" id="sidebar-toggle" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse navbar">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-icon pe-md-3" href="#"  data-bs-toggle="dropdown">
                    <img 
                    src="{{ asset('../images/profile.png') }}" alt="profile" class="avatar img-fluid rounded" width="30">
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{ route('profile.index') }}">Profile</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); 
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>