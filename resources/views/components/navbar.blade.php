<style>
    .navbar-custom {
        background-color: white;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        z-index: 100;
        position: relative;
    }

    .green-blur {
        position: absolute;
        top: -100px;
        left: 50%;
        transform: translateX(-50%);
        width: 500px;
        height: 300px;
        background: radial-gradient(circle, #a8e6cf, #dcedc1);
        filter: blur(100px);
        opacity: 0.4;
        z-index: 1;
    }

    .navbar-container {
        position: relative;
        z-index: 2;
    }

    .nav-link.active {
        font-weight: bold;
        color: #4CAF50;
    }
</style>

<div class="green-blur"></div>

<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid navbar-container">
        <a class="navbar-brand fw-bold" href="#">Refass Koss</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('pengingat') ? 'active' : '' }}" href="{{ route('pengingat') }}">Pengingat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('pengelolaan') ? 'active' : '' }}" href="{{ route('pengelolaan') }}">Pengelolaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('profile') ? 'active' : '' }}" href="{{ route('profile') }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('logout') ? 'active' : '' }}" href="{{ route('logout') }}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
