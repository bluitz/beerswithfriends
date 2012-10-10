<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/obama/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/obama/assets/css/bootstrap-responsive.css" rel="stylesheet">
<link href="/obama/assets/css/main.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="/obama/assets/ico/favicon.ico">
    <link href="/obama/assets/css/jquery-ui-1.8.18.custom.css" media="screen" rel="stylesheet" type="text/css">
    <script src="/obama/assets/js/jquery.min.js"></script>
    <script src="/obama/assets/js/jquery-ui-1.8.18.custom.min.js"></script>
<title>Get Obama Drunk and High</title>
</head>
<body>
  <audio id="obama1" preload >
     <source src="/obama/assets/audio/OBAMA1.ogg" />
     <source src="/obama/assets/audio/OBAMA1.mp3" />
   </audio>
   <audio id="obama2" preload >
     <source src="/obama/assets/audio/OBAMA2.ogg" />
      <source src="/obama/assets/audio/OBAMA2.mp3" />
    </audio>
    <audio id="obama3" preload >
      <source src="/obama/assets/audio/OBAMA3.ogg" />
       <source src="/obama/assets/audio/OBAMA3.mp3" />
     </audio>
     <audio id="obama4" preload >
       <source src="/obama/assets/audio/OBAMA4.ogg" />
        <source src="/obama/assets/audio/OBAMA4.mp3" />
      </audio>
      <audio id="obama5" preload >
        <source src="/obama/assets/audio/OBAMA5.ogg" />
         <source src="/obama/assets/audio/OBAMA5.mp3" />
       </audio>
  <div class="container">
    <img width="300px" id="obama" src="/obama/assets/img/obama/sober/sober1.jpg" />
  <a href="#" id="beer"><img src="/obama/assets/img/beer.jpg" /></a>
  <a href="#" id="joint"><img src="/obama/assets/img/joint.jpg" /></a>
  </div>
  <script type ="text/javascript"> 
  (function ($) {
    var current_drunk = 1;
    var current_high = 1;
    var current_sound = 1;
     $('#joint').on('click', function(e){
       e.preventDefault();
       var num =Math.floor(Math.random()*6) + 1;
       document.getElementById('obama' + current_sound).play();
       $('#obama').attr('src', "/obama/assets/img/obama/high/high" + current_high + ".jpg");
       current_high = current_high + 1;
       if(current_high > 6){
         current_high = 1;
       }
       current_sound = current_sound + 1;
        if(current_sound > 5){
          current_sound = 1;
        }
     });
     $('#beer').on('click', function(e){
       e.preventDefault();
       var num =Math.floor(Math.random()*4) + 1;
       document.getElementById('obama' + current_sound).play();
        $('#obama').attr('src', "/obama/assets/img/obama/drunk/drunk" + current_drunk + ".jpg");
        current_drunk = current_drunk + 1;
         if(current_drunk > 5){
           current_drunk = 1;
         }
         current_sound = current_sound + 1;
           if(current_sound > 5){
             current_sound = 1;
           } 
      });
     
    })(jQuery);
    </script>
</body>
</html>