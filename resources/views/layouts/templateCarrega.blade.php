<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImpoSerC</title>
   
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css')}}">
    <link rel="stylesheet" href="{{url('materialize/css/materialize.min.css')}}">
<!--Import Google Icon Font-->
<link href="{{url('https://fonts.googleapis.com/icon?family=Material+Icons')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    </head>
<body>

    <main>

    @yield('content')

    </main>
   
    <footer class="page-footer">
    <div class="footer-copyright">
            <div class="container">
            <p>&copy: Contabilidades | TIC'S</p>
            <a class="grey-text text-lighten-4 right" href="#!">Mais info</a>
            </div>
          </div>
    </footer>
    
</body>  <!-- Compiled and minified JavaScript -->
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js')}}"></script>
        <script src="{{asset('materialize.js')}}"></script>
        <script src="{{url('materialize/js/materialize.min.js')}}"></script>

</html>