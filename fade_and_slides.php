<head>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!--icons-->

<style type="text/css">

body{font-size: 18px;
	font-family: arial;
	background:#f5f6f5;
	line-height: 1.5em;
}
	header{background:#333;
	     color: #ffff;
	     padding:20px;
	     text-align: center;
	     border-bottom: 4px #000 solid;
	     margin-bottom: 10px; 
}
#container{width:90%;
           margin:auto;
           padding:10px;

       }
       #box{background:#333;
             color:#fff;
             margin-left: 100px; 
              padding:40px;
               width:500px;
              height:200px;
               text-align: center;
           margin-bottom:10px;}

                #box2{background:red;
             color:#fff; 
              padding:10px;
              margin-top: 10px;
               width:100px;
              height:100px;
               text-align: center;
               position: relative;}

               #animat{
               	 margin-left: 100px; 
               	 height:500px;

               }
</style>

</head>
<body>
	<header>
		<h1>Crash Code fades</h1>
	</header>

<div id="container">
    <input class="btn btn-info" type="button" id="fadeOut" name="fadeOut" value="fade out" />
<input class="btn btn-info" type="button" id="fadIn" name="fadIn" value="fade in" />
<input class="btn btn-info" type="button" id="fadeTog" name="fadeTog" value="toggle" />
<hr> 
<input class="btn btn-info" type="button" id="btnSlideUp" name="btnSlideUp" value="slide up" />
<input class="btn btn-info" type="button" id="slide_down" name="slide_down" value="slide down" />
<input class="btn btn-info" type="button" id="slideTog" name="slideTog" value="toggle me" />
	</div>
	<div id="box">
		<h1>Hello Mr P<small>how are you today</small></h1>
	</div>
	<div id ="animat">
		<input class="btn btn-info" type="button" id="move_left" name="move_left" value="move left" />
<input class="btn btn-info" type="button" id="move_right" name="move_right" value="move right" />
<input class="btn btn-info" type="button" id="move_around" name="move_around" value="move around" />
	
	<div id="box2">
		<h1>Mr</h1>
	</div>
	</div>
	</body>


	<script type="text/javascript">

		$(document).ready(function(){
          $("#fadeOut").click(function(){
               $("#box").fadeOut('slow');
          });
         

          $("#fadIn").click(function(){
           $("#box").fadeIn('fast');
          });

          $("#fadeTog").click(function(){
            $("#box").toggle("slow");


          });
           $("#btnSlideUp").click(function(){
           $("#box").slideUp('slow');
          });
        
         $("#slide_down").click(function(){
           $("#box").slideDown('slow');
          });
          $("#slideTog").click(function(){
           $("#box").slideToggle('slow');
          });
           $("#move_right").click(function(){
           $("#box2").animate({
           	left:500
           });
          });
		});
	</script>