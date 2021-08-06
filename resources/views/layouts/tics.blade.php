<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>ImpoSerC</title>
     <link rel="stylesheet" href="{{url('css/jquery.rotatingSlideshow.css')}}">
     <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
     
     <script src="{{url('bootstrap/js/bootstrap.min.js')}}"></script>
 </head>
 
 <body>
 
     <div class="rotating-slideshow" style="margin-top;">
     
         <div id="slider-main" data-position="1" data-deg="0">
         
             <div id="slider-btns" class="button">
                 
                 <a id="pos1" class="pos1" data-position="1"></a>
                 
                  <a id="pos2" class="pos2" data-position="4"></a>
                 
                  <a id="pos3" class="pos3" data-position="3"></a>
                                 
                  <a id="pos4" class="pos4" data-position="2"></a>
              
             </div>
             
             @yield('content-page')
             
             <div class="slides">
                 <img src="{{asset('img/t1.jpg')}}" class="active" data-position="1">
                 
                 <img src="{{asset('img/SHelpDesk.png')}}" style=""  data-position="2" alt="">
                 
                 <img src="{{asset('images/cibernetica.jpg')}}" data-position="3" alt="">
                 
                 <img src="{{asset('img/t4.jpeg')}}" data-position="4" alt="">
             
             </div>
             <img src="{{url('images/button.png')}}" class="spinner-btn" alt="">
             
             <img src="{{url('images/slides-overlay.jpg')}}" class="spinner">             
              
         </div>
         
         <audio id="slider-sound" preload="auto">
             <source src="{{url('sound/sound.mp3')}}"> 
         </audio>
       
     </div>
     
     <script src="{{(url('jquery-3.3.1.js'))}}"></script>
     <script src="{{(url('https://code.jquery.com/jquery-3.3.1.js'))}}"></script>
    
     <script src="{{url('js/jquery.rotatingSlideshow.js')}}"></script>
     
     <script>
     
     $(document).ready(function(){
        $('.rotating-slideshow').rotatingSlideshow({
            sliderHolder: '#slider-main',
            btnsHolder: '#slider-btns',
            audioHolder: '#slider-sound',
            auto:true,
            autoSpeed:'6000'
        });
         
     });
 
 </script>
     
     
     
 </body>
 </html>