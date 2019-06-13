<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('backpack::inc.head')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" type="text/css">
</head>
<body class="hold-transition {{ config('backpack.base.skin') }} fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper no-margin no-padding" style="background-color: #fff; font-family: 'Open Sans';">

        <!-- Content Header (Page header) -->
         @yield('header')

        <!-- Main content -->
        <section class="content">

          @yield('content')

        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

        @include('partials.footer')
    </div>
    <!-- ./wrapper -->


    @yield('before_scripts')
    @stack('before_scripts')

    @include('backpack::inc.scripts')
    @include('backpack::inc.alerts')
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="{{ asset('js/jquery-accessibleMegaMenu.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    @yield('after_scripts')
    @stack('after_scripts')

    <!-- JavaScripts -->
    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
</body>
</html>
