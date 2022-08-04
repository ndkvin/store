<nav
  class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
  data-aos="fade-down"
>
  <div class="container">
    <a href={{ route('home') }} class="navbar-brand">
      <img src="/images/logo.svg" alt="logo">
    </a>
    <button 
      class="navbar-toggler"
      type="button" 
      data-toggle="collapse" 
      data-target="#navbarResponsive" 
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href={{ route('home') }} class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href={{ route('category') }} class="nav-link">Categories</a>
        </li>
        <li class="nav-item">
          <a href="/reward" class="nav-link">Reward</a>
        </li>
        @guest
          <li class="nav-item">
            <a href={{ route('register') }} class="nav-link">Sign Up</a>
          </li>
          <li class="nav-item">
            <a href={{ route('login') }} class="btn btn-success  nav-link  px-4 text-white">Sign In</a>
          </li>
        @endguest
      </ul>
      @auth
        <ul class="navbar-nav d-none d-lg-flex">
          <li class="nav-item dropdown">
            <a 
              class="nav-link dropdown-toggle" 
              href="#" 
              id="navbarDropdown" 
              role="button" 
              data-toggle="dropdown" 
              aria-haspopup="true" 
              aria-expanded="false"
            >
              <img 
                src="/images/icon-user.png" 
                alt="user profile"
                class="rounded-circle mr-2 profile-picture"
              >
              Hi, {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('home') }}">Dashboard</a>
              <a class="dropdown-item" href="{{ route('dashboard-settings') }}">Settings</a>
              <div class="dropdown-divider"></div>
              <a 
                class="dropdown-item" 
                href="{{ route('logout') }}"
                onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
              >
                {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </li>
          <li>
            @php
              $item = \App\Models\Cart::where('users_id', Auth::user()->id)->count();
            @endphp
            <a href="{{ route('cart') }}" class="nav-link d-inline-block mt-2">
              @if ($item > 0)
                <img src="/images/icon-cart-empty.svg" alt="icon cart">
                <div class="cart-badge">{{ $item }}</div>
              @else    
                <img src="/images/icon-cart-empty.svg" alt="icon cart">
              @endif
              </div>
            </a>
          </li>
        </ul>
      @endauth
    </div>
  </div>
</nav>