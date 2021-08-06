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
  
  <script type="text/javascript" src="{{url('Animated/extras/jquery-ui-1.8.20.custom.min.js')}}"></script>
  <script type="text/javascript" src="{{url('Animated/extras/jquery.mousewheel.min.js')}}"></script>
  <script type="text/javascript" src="{{url('Animated/extras/modernizr.2.5.3.min.js')}}"></script>
  <script type="text/javascript" src="{{url('Animated/lib/hash.js')}}"></script>
  <script type="text/javascript" src="{{url('Animated/lib/turn.js')}}"></script>
  <style>
  body{
	background:#444;
}
.bookshelf{
	-webkit-transition:all 1s;
	-moz-transition:all 1s;
	-o-transition:all 1s;
	-ms-transition:all 1s;
	transition:all 1s;
}

.bookshelf{
	float:right;
	margin-top:140px;
}

.bookshelf .shelf{
	/*background:url(../pics/bookshelf.gif);
	background-size:100%;*/
	width:426px;
	height:440px;
}

.bookshelf .shelf .row-1{
	position:relative;
	width:360px;
	height:158px;
	margin-left:33px;

}

.bookshelf .shelf .row-1:after,
.bookshelf .shelf .row-2:after{
	background:url('Animated/pics.digital.jpg');
	background-size:100%;
	background-repeat: no-repeat;
	background-position:bottom left;
	width:426px;
	height:210px;
	display:block;
	content:"";
	margin-left:-38px;
}

.bookshelf .shelf .row-2{
	position:relative;
	margin-top:20px;
	height:164px;
	width:360px;
	margin-left:33px;
}

.bookshelf .shelf .row-2:after{
	height:216px;
}

.bookshelf .shelf .loc{
	position:absolute;
	bottom:0;
	width:100%;
}

.bookshelf .shelf .loc > div{
	width:33%;
	height:100%;
	float:right;
	text-align:center;
	position:relative;
}

.bookshelf .suggestion{
	font:12px 'District Thin', helvetica, arial;
	color:#999;
	text-align:center;
	line-height:40px;
}

.bookshelf .sample,
.bookshelf-row .sample{
	margin:auto;
	position: relative;
	z-index:1;

	-webkit-box-shadow:2px 2px 5px rgba(0,0,0,0.6);
	-moz-box-shadow:2px 2px 5px rgba(0,0,0,0.6);
	-ms-box-shadow:2px 2px 5px rgba(0,0,0,0.6);
	-o-box-shadow:2px 2px 5px rgba(0,0,0,0.6);
	box-shadow:2px 2px 5px rgba(0,0,0,0.6);

	-webkit-transition:-webkit-transform 0.1s;
	-webkit-transform:translate(0, 0);
	-moz-transition:-moz-transform 0.1s;
	-moz-transform:translate(0, 0);
	-ms-transition:-ms-transform 0.1s;
	-ms-transform:translate(0, 0);
	-o-transition:-o-transform 0.1s;
	-o-transform:translate(0, 0);
	transition:transform 0.1s;
	transform:translate(0, 0);
}

.sample .loader{
	position:absolute;
	width:32px;
	height:32px;
	top:50%;
	left:50%;
}

.sample .loader i{
	background:white url('Animated/docs/pics/loader.gif') 4px 4px no-repeat;
	position:relative;
	top:-16px;
	left:-16px;
	width:32px;
	height:32px;
	display:block;

	-webkit-border-radius:10px;
	-moz-border-radius:10px;
	-ms-border-radius:10px;
	-o-border-radius:10px;
	border-radius:10px;
}

.bookshelf .shelf .hover,
.bookshelf-row .hover,
.bookshelf .shelf .loading{
	z-index:2;
	cursor:none;
	background-color:white;
	-webkit-transform: scale3d(1.1, 1.1, 1) translate3d(0, -5px, 0);
	-moz-transform: scale3d(1.1, 1.1, 1) translate3d(0, -5px, 0);
	-ms-transform: scale3d(1.1, 1.1, 1) translate3d(0, -5px, 0);
	-o-transform: scale3d(1.1, 1.1, 1) translate3d(0, -5px, 0);
	transform: scale3d(1.1, 1.1, 1) translate3d(0, -5px, 0);
}

.bookshelf .thumb1,
.bookshelf-row .thumb1{
	background-image:url('Animated/pics/importacao.png');;
	width:92px;
	height:115px;
}

.bookshelf .thumb2,
.bookshelf-row .thumb2{
	background-image:url('Animated/pics/contabilidade1.png');;
	width:87px;
	height:115px;
}

.bookshelf .thumb3,
.bookshelf-row .thumb3{
	background-image:url('Animated/pics/digital.jpg');;
	width:90px;
	height:115px;
}

.bookshelf .thumb4,
.bookshelf-row .thumb4{
	background-image:url('Animated/pics/digital.jpg');;
	width:97px;
	height:125px;

}
.bookshelf .thumb5,
.bookshelf-row .thumb5{
	background-image:url('Animated/pics/digital.jpg');;
	width:97px;
	height:125px;
}

.bookshelf .thumb6,
.bookshelf-row .thumb6{
	background-image:url('Animated/pics/digital.jpg');;
	width:104px;
	height:125px;
	
}
.loc{
		transform:rotatex(180deg);
	}
.loc:hover{
        transform:rotatey(46deg);
		
        transform-style:preserve-3d;
    /* transform:rotatey(80deg);*/
    
    transition:400ms;
    }
  </style>
</head>
<body class="body">
<div class="navbar-fixed">
  <nav class="navbar teal lighten-2" role="navigation">
    <div class="nav-wrapper container">
    <a id="logo-container" class="right brand-logo" href="{{url('start')}}">
                        <!-- Logo icon -->
                        <b><img src="{{asset('img/Logotipo.png')}}" alt="homepage" class="dark-logo" style="width:80px;" /></b>
                        <!--End Logo icon -->
                    </a>
                    <a href="#" data-target="slide-out" class="sidenav-trigger left show-on-large"><i class="material-icons">menu</i></a>
     
           <ul class="left hide-on-med-and-down">  
    @if(isset($site))
    @if(session('status'))
        <div class="alert"> 
            {{session('status')}}
        </div>
        @endif
        <li><a class="tooltipped" data-position="left" data-tooltip="Está atualmente nesta página" href="#">Livros</a></li>
      <li><a  href="{{route('biblioteca')}}">voltar</a></li>
 @else
 <li><a class="tooltipped" data-position="bottom" data-tooltip="Está atualmente nesta página" href="#">Livros</a></li>
 <li><a class="tooltipped" data-position="bottom" data-tooltip="Voltar a página anterior" href="{{route('biblioteca')}}">Voltar</a></li>
 <li><a class="tooltipped" data-position="bottom" data-tooltip="Ir a página principal" href="{{url('start')}}">página principa</a></li>
 
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
      <li><a class="tooltipped" data-position="top" data-tooltip="Está atualmente nesta página" href="#">Livros</a></li>
      <li><a  href="{{route('biblioteca')}}">voltar</a></li>

 @else
 <li><a class="tooltipped" data-position="top" data-tooltip="Está atualmente nesta página" href="#">Livros</a></li>
 <li><a class="tooltipped" data-position="top" data-tooltip="Voltar a página principal" href="{{url('start')}}">Voltar</a></li>

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
            <li><a class="white-text" href="{{url('a+equipe~ImpoSerC')}}">Equipe ImpoSerC</a></li>
            <li><a class="white-text" href="{{url('sobre')}}">Sobre</a></li>            
          </ul>
        </div>
        <div class="col l3 s12">
         
          <p class="grey-text text-lighten-4"></p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Redes sociais</h5>
          <ul>
         
         <li> <a class="btn-floating btn-large pulse  blue"><i class="material-icons">facebook</i></a></li>
        <!-- <li> <a class="btn-floating btn-large cyan pulse dark-blue"><i class="material-icons">edit</i></a></li>
        --->
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

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>


  
  <script src="{{asset('materialize/js/materialize.js')}}"></script>
  <script src="{{asset('materialize/js/init.js')}}"></script>
  <script src="{{asset('materialize.js')}}"></script>
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