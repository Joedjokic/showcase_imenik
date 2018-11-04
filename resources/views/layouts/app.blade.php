<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Djordje Djokic</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        
    </head>
    <body>
     
    </body>
</html>
<body class="text-center">
<div class="sidebar">
    <div class="mobile-menu">
    @include('incl.mobilemenu')
    <div class="toggle" style="background-color:white;background-image:url(/img/hamburger.png);" ></div>
    </div>
    <div class = "colors">
        <div style="background-color:#333333;" onclick = "setbackground('#333333')" ></div>
        <div style="background-color:#1b1b75;" onclick = "setbackground('#1b1b75')" ></div>
        <div style="background-color:#901616;" onclick = "setbackground('#901616')" ></div>
        <div style="background-color:#0a630a;" onclick = "setbackground('#0a630a')" ></div>
        <div class="toggle" style="background-color:white;background-image:url(/img/pallete.png);" ></div>
    </div>

</div>
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    @include('incl.header')

      <main role="main" class="inner cover">
       @include('incl.errorsandstats')
        <h1 class="cover-heading">Aplikacija Imenik</h1>
        <p class="lead">
        @yield('content')
        </p>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
        @include('incl.footer')
        </div>
      </footer>
      <script>
      jQuery( window ).resize(function() {
        jQuery('.cover-container').css('min-height', jQuery(window).height()+'px'); 
    });
      jQuery('document').ready(function(){
        jQuery('.cover-container').css('min-height', jQuery(window).height()+'px');

        var color = readCookie("backgroundColor");
            if (color) {
                document.body.style.backgroundColor = color;
            }
        jQuery('.cover-container').css('opacity', '1');
      });
      function createCookie(name, value, days) {
          if (days) {
              var date = new Date();
              date.setTime(date.getTime()+(days*24*60*60*1000));
              var expires = "; expires="+date.toGMTString();
          }
          else var expires = "";
          document.cookie = name+"="+value+expires+"; path=/";
      }

      function readCookie(name) {
          var nameEQ = name + "=";
          var ca = document.cookie.split(';');
          for(var i=0;i < ca.length;i++) {
              var c = ca[i];
              while (c.charAt(0)==' ') c = c.substring(1,c.length);
              if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
          }
          return null;
      }

      function eraseCookie(name) {
          createCookie(name,"",-1);
      }
      function setbackground(color){
        document.body.style.backgroundColor = color;
        createCookie("backgroundColor", color, 365);
      }
      jQuery('.sidebar .toggle').on('click', function(){
        if (jQuery(".sidebar").hasClass("open")) {
            if(jQuery(this).parent().hasClass("active")){
                jQuery('.sidebar .active').removeClass('active');
                jQuery('.sidebar').toggleClass('open');
            }
            else{
                jQuery('.sidebar .active').removeClass('active');
                jQuery(this).parent().toggleClass('active');
            }
                
            }
        else{            
                jQuery('.sidebar').toggleClass('open');
                jQuery(this).parent().toggleClass('active');
        }
             
      });
      </script>
    </div>

  </body>