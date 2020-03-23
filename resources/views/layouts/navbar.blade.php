<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    

</head>
<body style="background-image:url({{asset('img/fondo.JPG')}});background-attachment: fixed;  margin-top: 85px;">
 <nav class="navbar navbar-expand-lg navbar-dark  position-fixed fixed-top">
    <div class="container">
      <ul class="navbar-nav mr-auto">
       <li class="nav-item my-1 mx-1 " style="width: 70px;">
          <a class="navbar-brand" href="{{ url('/inicio') }}">
            <img class="" src="{{asset('img/logo1.jpg')}}" alt="" width="70px">
          </a>
       </li>
      </ul>
      <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mr-auto" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
      @guest
      @if (Route::has('register'))
    
        <li class="nav-item my-1">
         <form >
          <div class="input-group">
            <input type="search" class="form-control" name="term" placeholder="Buscar">
              <span class="input-group-btn" style="width: 40px;height: 38px;">
                <button type="submit" class="btn btn-secondary" style="height:100%;"> <i class="icon ion-md-search"></i></button>                      
              </span>               
         </form>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white btn btn-secondary mx-1" href="{{ route('login') }}"><i class="icon ion-md-person"></i> Iniciar Sesion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white btn btn-secondary mx-1" href="{{ route('register') }}"><i class="icon ion-md-people"></i> Registrate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white btn btn-secondary mx-1" href="{{ url('/faq') }}"> FAQs</a>
        </li>
      </ul>
      @endif
      @else
      <li class="nav-item my-1">
       <form >
         <div class="input-group">
            <input type="search" class="form-control" name="term" placeholder="Buscar">
            <span class="input-group-btn" style="width: 40px;height: 38px;">
              <button type="submit" class="btn btn-secondary" style="height:100%;"> <i class="icon ion-md-search"></i></button>                      
            </span>               
          </form>
            </li>
           <li class="nav-item ">
            <a class="nav-link text-white btn btn-secondary py-2 mx-1" href="{{ url('/inicio') }}"> Inicio</a>
           </li>
           <li class="nav-item dropdown text-white btn  btn-secondary" style="padding-left: 0px;padding-right: 0px;padding-bottom: 0px;padding-top: 0px;"> 
              <p class="nav-link dropdown-toggle text-white mb-1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->username }}</p>
           <div class="dropdown-menu  " aria-labelledby="navbarDropdown">
         
          <a class="dropdown-item" href="{{ url('/perfil') }}">Mi Perfil</a>
          <a class="dropdown-item" href="preguntas-frecuentes.php">FAQs</a>
          <div class="dropdown-divider"></div>
       
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
          
         </div>
         </li>
         @endguest
    </div>
  </div>
</nav>
@yield('cuerpo')
<footer class="container-fluid-footer pt-3">
    <ul class="nav justify-content-center mb-3">
      <li class="nav-item">
        <a class="nav-link text-white" href="{{ url('/inicio') }}">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Condiciones de uso</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Politicas y Servicios</a>
      </li>
      <li class="nav-item">
       <a class="nav-link text-white" href="preguntas-frecuentes.php">Preguntas Frecuentes</a>
      </li>
    </ul>
<!-- Social buttons -->
<ul class="list-unstyled list-inline text-center">
  <li class="list-inline-item">
    <a href="https://facebook.com"  target='_blank'class="btn-floating btn-fb mx-1">
      <i class="icon ion-logo-facebook"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a href="#" class="btn-floating btn-tw mx-1">
      <i class="icon ion-logo-twitter"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a href="#" class="btn-floating btn-gplus mx-1">
      <i class="icon ion-logo-googleplus"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a href="#"class="btn-floating btn-li mx-1">
      <i class="icon ion-logo-linkedin"> </i>
    </a>
  </li>
  <li class="list-inline-item">
    <a href="#" class="btn-floating btn-dribbble mx-1">
      <i class="icon ion-logo-dribbble"> </i>
    </a>
  </li>
</ul>
<!-- Copyright -->
 <div class="footer-copyright text-center py-3">© 2018 Copyright Body Art
 </div>
</footer>
 </body>
</html>
