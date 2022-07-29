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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css"/>
 

    {{-- Style --}}
    @stack('prepared-style')
    @include('includes.style')
    @stack('addone-style')
  </head>

  <body>
   <div class="page-dashboard">
    <div class="d-flex" id="wrapper" data-aos="fade-right">

      <!-- Sidebar -->
      @include('includes.dashboard-sidebar-admin')

      <!-- Page Content -->
      <div id="page-content-wrapper">
        @include('includes.dashboard-navbar')

        <!-- Section Content -->
        @yield('content')
      </div>  
    </div>
   </div>
    
    <!-- Bootstrap core JavaScript -->

    @stack('prepand-script')
    @include('includes.dashboard-script')
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>
    @stack('addone-script')
  </body>
</html>
