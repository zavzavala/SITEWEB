<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Informacao Geral</title>
  <!-- CSS  -->
  <link href="{{url('https://fonts.googleapis.com/icon?family=Material+Icons')}}" rel="stylesheet">
  <link href="{{asset('materialize/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{asset('materialize/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="icon" type="image/png" sizes="40x40" href="{{asset('img/Logotipo.png')}}"> 

  <script type="text/javascript" src="{{url('https://cdnjs.cloudflare.com/ajax/libs/jquery/1.4.4/jquery.min.js')}}"></script>
 
  <link href="{{url('https://fonts.googleapis.com/css?family=Oswald')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{url('css/count.css')}}">
    
    <link href="{{url('https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i')}}" rel="stylesheet">
    
       <script src="{{url('booklet/jquery.easing.1.3.js')}}" type="text/javascript"></script>
       <script src="{{url('booklet/jquery.booklet.1.1.0.min.js')}}" type="text/javascript"></script>
       <link href="{{url('booklet/jquery.booklet.1.1.0.css')}}" type="text/css" rel="stylesheet" media="screen" />
</head>

<body>
<div class="navbar-fixed">
@if(isset($site))

  <nav class="navbar indigo" role="navigation">
  @else
  
  <nav class="navbar deep-orange darken-3" role="navigation">
  @endif
    
   
<div class="nav-wrapper container">
    <a id="logo-container" class="right brand-logo" href="{{url('geral')}}">
                        <!-- Logo icon -->
                        <b><img src="{{asset('img/Logotipo.png')}}" alt="homepage" class="dark-logo" style="width:80px;" /></b>
                        <!--End Logo icon -->
                    </a>
                    <a href="#" data-target="slide-out" class="sidenav-trigger left show-on-large"><i class="material-icons">menu</i></a>
     
           <ul class="left hide-on-med-and-down">  
           
    @if(isset($site))
    <!-- ESTANDO NO FORM INFORMACOES DIARIAS-->

 <li><a class="tooltipped" data-position="top" data-tooltip="Está atualmente nesta página" href="info+Diario">Info do dia</a></li>
 <li><a class="tooltipped" data-position="bottom" data-tooltip="Voltar a página anterior" href="{{url('~Con+ta~bi+lidade')}}">Voltar</a></li>
 <li><a class="tooltipped" data-position="bottom" data-tooltip="Voltar a página principal" href="{{url('start')}}">página principal</a></li>
 
 @else
  <!-- ESTANDO NO FORM DESCRICAO DE SERVICOS-->
 <li><a class="tooltipped" data-position="top" data-tooltip="Está atualmente nesta página" href="#">Descrição</a></li>
  <li><a class="tooltipped" data-position="bottom" data-tooltip="Voltar a página anterior" href="{{url('geral')}}">Voltar</a></li>
 
 <li><a class="tooltipped" data-position="bottom" data-tooltip="Ir a página principal" href="{{url('start')}}">página principal</a></li>
  
  @endif
      </ul>
     
      </div>
  </nav>
  <!-----FIM DA NAV---->
  </div>
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
       <!-- ESTANDO NO FORM INFORMACOES DIARIAS-->
       <li><a class="tooltipped" data-position="top" data-tooltip="Está atualmente nesta página" href="info+Diario">Info do dia</a></li>
 <li><a class="tooltipped" data-position="bottom" data-tooltip="Voltar a página anterior" href="{{url('~Con+ta~bi+lidade')}}">Voltar</a></li>
 <li><a class="tooltipped" data-position="bottom" data-tooltip="Ir a página principal" href="{{url('start')}}">página principal</a></li>
 
 @else 
 <!-- ESTANDO NO FORM DESCRICAO DE SERVICOS-->
 <li><a class="tooltipped" data-position="top" data-tooltip="Está atualmente nesta página" href="#">Descrição</a></li>
 <li><a class="tooltipped" data-position="bottom" data-tooltip="Voltar a página anterior" href="{{url('geral')}}">Voltar</a></li>
 
 <li><a class="tooltipped" data-position="bottom" data-tooltip="Ir a página principal" href="{{url('start')}}">página principal</a></li>
  
  @endif
      </ul>
     
    @yield('content-page')

  </body>
 
  <script src="{{asset('materialize/js/materialize.js')}}"></script>
  <script src="{{asset('materialize/js/init.js')}}"></script>
  
  <script src="{{asset('js/count.js')}}"></script>
  <script>
  /*
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.tooltipped');
    var instances = M.Tooltip.init(elems, options);
  }); */

  // Or with jQuery

  $(document).ready(function(){
    $('.tooltipped').tooltip();
  });
  
  </script>
</html>