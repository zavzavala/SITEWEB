<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Geral</title>
  <!-- CSS  -->
  <link href="{{url('https://fonts.googleapis.com/icon?family=Material+Icons')}}" rel="stylesheet">
  <link href="{{asset('materialize/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{asset('materialize/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="icon" type="image/png" sizes="40x40" href="{{asset('img/Logotipo.png')}}"> 
  <script src="{{url('jquery-3.3.1.js')}}"></script>
 
  <style>
  
   .sidenav{
    background:#444;;
  
  }
  ul, li .texto{
    color:#536;;
  }
  
  
  </style>
</head>
<body class="body">
<div class="navbar-fixed">
  <nav class="navbar teal lighten-2" role="navigation">
    <div class="nav-wrapper container">
    <a id="logo-container" class="right brand-logo" href="{{url('geral')}}">
                        <!-- Logo icon -->
                        <b><img src="{{asset('img/Logotipo.png')}}" alt="homepage" class="dark-logo" style="width:80px;" /></b>
                        <!--End Logo icon -->
                    </a>
                    <a href="#" data-target="slide-out" class="sidenav-trigger left show-on-large"><i class="material-icons">menu</i></a>
     
           <ul class="left hide-on-med-and-down">  
    @if(isset($site))
    <li><a  href="{{route('paginageral')}}">Serviços</a></li>
      <li><a  href="{{route('playNow')}}">Play Me</a></li>
      @if (Route::has('login'))
                
                @auth
                {{-- <li><a href="{{ url('/start') }}">Home</a> </li>--}}

                @if ( Auth::user()->role == 1)
                      <li>     <a href="{{ route('admin.dashboard') }}">Admin</a></li>
                                                 
                        @endif

                        @if ( Auth::user()->role == 2)
                        <li>  <a href="{{ route('user.dashboard') }}">Entrar</a></li>
                                                   
                        @endif
                        @else
                        <li>  <a href="{{ route('login') }}">Log in</a></li>

                        @if (Route::has('register'))
                        <li> <a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
          @endif
 @else
 <li><a class="tooltipped" data-position="top" data-tooltip="Está atualmente nesta página" href="#">Importação & Exportação</a></li>
  <li><a class="tooltipped" data-position="bottom" data-tooltip="Voltar a página anterior" href="{{url('geral')}}">Voltar</a></li>
 
 
  @endif
      </ul>
      
      </nav>
      </div><!-----FIM DA NAV------>

      <ul id="slide-out" class="sidenav">
      <li><div class="user-view">
      <div class="background">
        <img src="{{url('images/Background/parede.jpg')}}">
      </div>
      <a href="#user"><img class="circle" src="{{url('img/Logotipo.png')}}"></a>
      <a href="#name"><span class="white-text name">Zavala</span></a>
      <a href="#email"><span class="white-text email">zavzavala76@gmail.com</span></a>
    </div></li>

      @if(isset($site))
     
      <li><a  href="{{route('paginageral')}}">Serviços</a></li>
      <li><a  href="{{route('playNow')}}">Play Me</a></li>
      @if (Route::has('login'))
                
                @auth
                {{-- <li><a href="{{ url('/start') }}">Pagina inicial</a><</li>li> --}}

                @if ( Auth::user()->role == 1)
                <li> <a href="{{ route('admin.dashboard') }}">Admin</a></li>
                                                 
                        @endif

                        @if ( Auth::user()->role == 2)
                        <li> <a href="{{ route('user.dashboard') }}">Entrar</a></li>
                                                   
                        @endif
                        @else
                        <li> <a href="{{ route('login') }}">Log in</a></li>

                        @if (Route::has('register'))
                        <li>   <a href="{{ route('register') }}">Registar</a></li>
                        @endif
                    @endauth
          @endif
 @else
 <li><a class="tooltipped" data-position="top" data-tooltip="Está atualmente nesta página" href="#">Importação & Exportação</a></li>
  <li><a class="tooltipped" data-position="bottom" data-tooltip="Voltar a página anterior" href="{{url('geral')}}">Voltar</a></li>
 
 <li><a class="tooltipped" data-position="bottom" data-tooltip="Ir a página principal" href="{{url('start')}}">página principa</a></li>

  @endif
      </ul>
 
<br>
    @yield('content-page')
<br><br><br><br><br><br>
    <footer class="page-footer grey">
    <div class="container-fluid">
      <div class="row">
        <!--<div class="col l6 s12">
          <h5 class="white-text">Empresa</h5>
          <p class="grey-text text-lighten-4">Descricao aqui...</p>


        </div>-->
        <div class="col l6 s12">
          <h5 class="white-text">Outros</h5>
          <ul>
            <li><a class="white-text" href="{{ route('a+equipe~ImpoSerC') }}">Equipe ImpoSerC</a></li>
            <li><a class="white-text" href="{{ route('about') }}">Sobre</a></li>            
          </ul>
        </div>
        <div class="col l3 s12">
          
          <p class="grey-text text-lighten-4"></p>

        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Redes sociais</h5>
          <ul>
         
         <li> <a class="btn-floating btn-large pulse  blue" href="{{url('https://www.facebook.com/imporsec.lda')}}" ><i class="material-icons">facebook</i></a></li>
       
        </ul>
        </div>
      </div>
    </div>
  <div class="footer-copyright">
      <div class="container">
      2021 <a class="brown-text text-lighten-3" href="#">ImpoSerC</a>
      </div>
    </div>

  </footer>  <!--Fim footer-->
  <!--  Scripts-->

  <script src="{{url('https://code.jquery.com/jquery-3.5.1.min.js')}}" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>


  
  <script src="{{asset('materialize/js/materialize.js')}}"></script>
  <script src="{{asset('materialize/js/init.js')}}"></script>
  <script src="{{asset('import.js')}}"></script>
  <script>
  
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.tooltipped');
    var instances = M.Tooltip.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.tooltipped').tooltip();
  });
  </script>
  </body>
</html>