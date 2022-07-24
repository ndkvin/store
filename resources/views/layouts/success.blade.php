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
    <!-- Content -->
    {{-- Home Page --}}
    @yield('content')

    {{--footer --}}
    @include('includes.footer')

    <!-- Bootstrap core JavaScript -->
     {{-- Script --}}
    @stack('prepared-script')
    @include('includes.script')
    @stack('addone-script')
  </body>
</html>
