        <!DOCTYPE html>
        <html lang="en">
        
        <head>

        <title>Play Me</title>
        
        <link href="{{url('https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i')}}" rel="stylesheet">
        <script type="text/javascript" src="{{url('https://cdnjs.cloudflare.com/ajax/libs/jquery/1.4.4/jquery.min.js')}}"></script>
                <link rel="stylesheet" href="{{asset('css/style.css')}}">
                <script src="{{url('jquery-2.1.4.min.js')}}"></script>
                
        </head>
        
        <body>
        
        <header>
                
                <div class="nav-icon float-right">
                        <span></span>
                        <span></span>
                        <span></span>
                </div>
        </header>

        <!-- Full Menu -->
        <div class="full-menu">
                <div class="fullmenu-content">
                        <ul class="page-menu">
                                <li><a class="active" href="{{url('start')}}">Menu Principal</a></li>
                                <li><a href="{{route('about')}}">Sobre</a></li>
                                
                                
                        </ul>
                </div>
                <a href="#0" class="modal-close">close</a>
        </div>
        <div class="cd-transition-layer visible opening"> 
                <div class="bg-layer"></div>
        </div><!-- Ink Transition -->
        <div class="wrapper">
 
 <section class="main">
         <div class="main-content">
        <div class="container">

                <div class="box">
                <div class="frente"></div>
                <div class="verso"></div>
                </div>
                <div class="box">
                <div class="frente"></div>
                <div class="verso"></div>
                </div>

                <div class="box">
                <div class="frente"></div>
                <div class="verso"></div>
                </div>

                <div class="box">
                <div class="frente"></div>
                <div class="verso"></div>
                </div>

                <div class="box">
                <div class="frente"></div>
                <div class="verso"></div>
                </div>

                <div class="box">
                <div class="frente"></div>
                <div class="verso"></div>
                </div>

                <div class="box">
                <div class="frente"></div>
                <div class="verso"></div>
                </div>

                <div class="box">
                <div class="frente"></div>
                <div class="verso"></div>
                </div>

                <div class="box">
                <div class="frente"></div>
                <div class="verso"></div>
                </div>

                </div>

                </div>
        </div>
        </section>
                </div>

                <script src="{{url('css/js.js')}}"></script>
        

        
        </body>
        <script>
        

        $('.box').click(function(){

        $(this).toggleClass('flip');

        });

        
        </script>
        </html>