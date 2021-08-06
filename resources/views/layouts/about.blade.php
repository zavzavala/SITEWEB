<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>canvas</title>
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('bootstrap/font-awesome.min.css')}}">
     <link href="{{url('https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('css/styleabout.css')}}">
</head>
<body>
    <div class="page">
  <span class="menu_toggle">
    <i class="menu_open fa fa-bars fa-lg"></i>
    <i class="menu_close fa fa-times fa-lg"></i>
  </span>
  <ul class="menu_items">
    <li><a href="{{url('start')}}"><i class="fa fa-home fa-2x"></i>Menu</a></li>
    <li><a href="{{url('start')}}"><i class="fa fa-phone fa-2x"></i> Contacto</a></li>
    <li><a href="{{route('paginageral')}}"><i class="fa fa-handshake-o fa-2x"></i> Servicos</a></li>
  </ul>
  <main class="content">
    <div class="content_inner">
      
         @yield('content')
    </div>
  </main>
</div>
<script src="{{url('jquery-3.3.1.js')}}"></script>
<script src="{{url('https://code.jquery.com/jquery-3.3.1.js')}}"></script>
<script>
    // elements
var $page = $('.page');

$('.menu_toggle').on('click', function(){
  $page.toggleClass('shazam');
});
$('.content').on('click', function(){
  $page.removeClass('shazam');
});
    
</script>
</body>
</html>