<header id="main-header">
    <div class="container header-container">
        <a href="{{ url('/') }}" class="logo"><i class="fas fa-sparkle"></i>TM</a>
        <button class="mobile-menu-btn">
            <i class="fas fa-bars"></i>
        </button>
        <ul class="nav-links">
            <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About</a></li>
            <li><a href="{{ url('/projects') }}" class="{{ request()->is('projects') ? 'active' : '' }}">Projects</a></li>
            <li><a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
        </ul>
    </div>
</header>