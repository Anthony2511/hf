<!DOCTYPE html>
<html lang="fr" class="no-js">
@include('partials.head')
<body class=" @yield('class')">

@yield('header')
@yield('content')
</div>

@include('partials.footer')
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="{{ asset('js/jquery-accessibleMegaMenu.js') }}"></script>
<script src="{{ asset('js/configAccessibleMegaMenu.js') }}"></script>
<script src="{{ asset('js/nav.js') }}"></script>
<script src="{{ asset('js/ajaxAthletes.js') }}"></script>
<script src="{{ asset('js/ajaxTrainers.js') }}"></script>
<script src="{{ asset('js/ajaxTrainings.js') }}"></script>
<script src="{{ asset('js/ajaxCompetitions.js') }}"></script>
<script src="{{ asset('js/ajaxInternships.js') }}"></script>
<script src="{{ asset('js/ajaxAmenities.js') }}"></script>
</body>
</html>