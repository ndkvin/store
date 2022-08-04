<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    {{-- Style --}}
    @stack('prepared-style')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="/style/main.css" rel="stylesheet" />
    @stack('addone-style')
  </head>

  <body>
   <div class="page-dashboard">
    <div class="d-flex" id="wrapper" data-aos="fade-right">

      <!-- Sidebar -->
      <div class="border-right" id="sidebar-wrapper">
        <div class="sidebar-heading text-center">
          <img src="/images/dashboard-store-logo.svg" alt="my-4">
        </div>
      
        <div class="list-group list-group-flush">
          <a href={{ url('dashboard') }} class="list-group-item list-group-item-action {{ request()->is('dashboard') ? 'active' : '' }}">
            Dashboard
          </a>
          <a href={{ url('dashboard/products') }} class="list-group-item list-group-item-action {{ request()->is('dashboard/products') ? 'active' : '' }}">
            My Products
          </a>
          <a href={{ url('dashboard/transactions') }} class="list-group-item list-group-item-action {{ request()->is('dashboard/transactions') ? 'active' : '' }}">
            Transactions
          </a>
          <a href={{ url('dashboard/settings') }} class="list-group-item list-group-item-action {{ request()->is('dashboard/settings') ? 'active' : '' }}">
            Store Settings
          </a>
          <a href={{ route('create-store.create') }} class="list-group-item list-group-item-action {{ request()->is('dashboard/create-store*') ? 'active' : '' }}">
            Create Store
          </a>
          <a href={{ url('dashboard/account') }} class="list-group-item list-group-item-action {{ request()->is('dashboard/account') ? 'active' : '' }}">
            My Account
          </a>
          <a href={{ url('logout') }} class="mt-auto list-group-item list-group-item-action ">
            Sign Out
          </a>
        </div>
      </div>

      <!-- Page Content -->
      <div id="page-content-wrapper">
        <nav
          class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
          data-aos="fade-down"
        >
          <div class="container-fluid">
            <button
              class="btn btn-secondary d-md-none mr-auto mr-2"
              id="menu-toggle"
            >
              &laquo; Menu
            </button>
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
                <ul class="navbar-nav d-inline-block d-lg-none">
                  <li class="nav-item">
                    <a href="#" class="nav-link d-inline-block">
                      Hi An        @yield('content')dika
                    </a>
                  </li>
                  <li class="nav-item d-inline-block">
                    <a href="#" class="nav-link d-inline-block mt-2">
                      Cart
                    </a>
                  </li>
                </ul>
              </ul>
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
                    Hi Andika
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/dashboard.html">Dashboard</a>
                    <a class="dropdown-item" href="/settings.html">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/logout.html">Logout</a>
                  </div>
                </li>
                <li>
                  <a href="#" class="nav-link d-inline-block mt-2">
                    <img src="/images/icon-cart-empty.svg" alt="icon cart">
                    <div class="cart-badge">
                      3
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <!-- Section Content -->
        @yield('content')
      </div>  
    </div>
   </div>
    
    <!-- Bootstrap core JavaScript -->

    @stack('prepend-script')
    <script src="/vendor/jquery/jquery.slim.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
    @stack('addon-script')
  </body>
</html>
