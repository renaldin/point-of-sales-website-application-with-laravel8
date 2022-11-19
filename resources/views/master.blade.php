
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>POS | @yield('title')</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('stisla/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('stisla/modules/fontawesome/css/all.min.css') }}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('stisla/modules/jqvmap/dist/jqvmap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('stisla/modules/summernote/summernote-bs4.css') }}">
  <link rel="stylesheet" href="{{ asset('stisla/modules/owlcarousel2/dist/stisla/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('stisla/modules/owlcarousel2/dist/stisla/owl.theme.default.min.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('stisla/css/style.cs') }}s">
  <link rel="stylesheet" href="{{ asset('stisla/css/components.css') }}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      
      @include('components.header')

      <div class="main-sidebar sidebar-style-2">
        @include('components.sidebarAdmin')
      </div>

      <!-- Main Content -->
      <div class="main-content">
        @yield('content')
      </div>
      @include('components.footer')
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('stisla/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('stisla/modules/popper.js') }}"></script>
  <script src="{{ asset('stisla/modules/tooltip.js') }}"></script>
  <script src="{{ asset('stisla/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('stisla/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('stisla/modules/moment.min.js') }}"></script>
  <script src="{{ asset('stisla/js/stisla.js') }}"></script>
  
  <!-- JS Libraies -->
  <script src="{{ asset('stisla/modules/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('stisla/modules/chart.min.js') }}"></script>
  <script src="{{ asset('stisla/modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('stisla/modules/summernote/summernote-bs4.js') }}"></script>
  <script src="{{ asset('stisla/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('stisla/js/page/index.js') }}"></script>
  
  <!-- Template JS File -->
  <script src="{{ asset('stisla/js/scripts.js') }}"></script>
  <script src="{{ asset('stisla/js/custom.js') }}"></script>
</body>
</html>