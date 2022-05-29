<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title') | OCAE APP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('pub/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('pub/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('pub/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('pub/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('pub/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('pub/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('pub/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('pub/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('pub/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('pub/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    @guest
        @if (Route::has('login'))
            @yield('login_content')
        @endif
        @else
            @if( Auth::user()->userType == 'admin')
                @include('admin.navbar')
                @yield('content')
                @include('admin.footer')
            @elseif( Auth::user()->userType == 'userAccount')
                @include('userAccount.navbar')
                @include('userAccount.sidebar')
                @yield('content')
                @include('userAccount.footer')
            @elseif( Auth::user()->userType == 'responseTeam')
                @include('responseTeam.navbar')
                @include('responseTeam.sidebar')
                @yield('content')
                @include('responseTeam.footer')
            @endif
    @endguest

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Vendor JS Files -->
    <script src="{{ asset('pub/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('pub/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('pub/assets/vendor/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('pub/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('pub/assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('pub/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('pub/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('pub/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('pub/assets/vendor/jquery/jquery.min.js' )}}"></script>
    <script src="{{ asset('pub/assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{ asset('pub/assets/vendor/bootbox/assets/js/bootbox.min.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('pub/assets/js/main.js') }}"></script>
    @yield('scripts')
</body>
</html>
