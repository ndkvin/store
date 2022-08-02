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
    @include('includes.style')
    @stack('addone-style')
  </head>

  <body>
    {{-- Navbar --}}
    @include('includes.navbar')

    <!-- Content -->
    {{-- Home Page --}}
    @yield('content')

    {{--footer --}}
    @include('includes.footer')

    <!-- Bootstrap core JavaScript -->
     {{-- Script --}}
    @stack('prepend-script')
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="/js/navbar-scroll.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled")
      })
    </script>
    @stack('addon-script')
  </body>
</html>
