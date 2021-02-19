<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!DOCTYPE html>
    <html lang="en">
    <!-----------------------------------------Head-------------------------------------------------->
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="IFMIS Intranet">
      <meta name="author" content="Kelvin Kiprop">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- Title -->
      <title>{{ config('app.name', 'IFMIS Intranet') }}</title>
      <!--FivoIcon-->
      <link href="/images/logo.jpg" rel="icon" type="image/x-icon" />
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
      <script src="{{ asset('js/js-main.js')}}" defer></script>
      <!-- Bootstrap -->
      <link href="{{ asset('bootstrap-4.3.1-dist/css/bootstrap.min.css') }}"  rel="stylesheet">
      <!-- Font awesome -->
      <link href="{{ asset('fontawesome-free-5.10.2-web/css/all.min.css') }}" rel="stylesheet">
      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/styles/css-main.css') }}" rel="stylesheet">

    </head>
    <!-----------------------------------------./Head-------------------------------------------------->

<!-----------------------------------------Body-------------------------------------------------->
<body>


    <!-----------------------------------------Preloader--------------------------------------------------->
    <div id="preloader">
        <div id="status">
            <div class="spinner-grow text-danger"></div>
            <div class="spinner-grow text-dark"></div>
            <div class="spinner-grow text-primary"></div>
        </div>
    </div>
    <!-----------------------------------------./Preloader--------------------------------------------------->

    <!-----------------------------------------App--------------------------------------------------->
    <div id="app">

         <!-----------------------------------------./Nav--------------------------------------------------->
        <nav class="navbar navbar-expand-md navbar-light bg-primary shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
         <!-----------------------------------------./Nav--------------------------------------------------->

        <!-----------------------------------------Main--------------------------------------------------->
        <main class="py-4">
            <!-- Messages -->
            <div class="row justify-content-center">
                <div class="col-sm-8 col-md-8 col-lg-8">
                    @include('inc.messages')
                </div>
            </div><!-- ./Messages -->
            @yield('content')
        </main>
        <!-----------------------------------------./Main--------------------------------------------------->

    </div>
    <!-----------------------------------------./App--------------------------------------------------->

    <!-----------------------------------------Footer-------------------------------------------------->
    @include('inc.footer')
    <!-----------------------------------------./Footer--------------------------------------------------->


    </body>
    <!-----------------------------------------./Body-------------------------------------------------->

    <!-- Boostrap JS -->
    <script src="{{ asset('bootstrap-4.3.1-dist/js/bootstrap.min.js') }}"></script>

</body>
</html>
