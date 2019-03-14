<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<style type="text/css">
	#contents{display:none;}
	</style>
</head>
<body>
<div id="myspiner">
	<img src="spinner.gif"/>
</div>
<div id="contents">
	<p>gfdggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggffffffffffffffffffffffffffffffffffffffffffffffffffffffkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd<br>dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssiiiiiiiiiiiiiiiiiiiiiiioooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooppppppppppppppp</p>
</div>
<div id="tittle">
	<a id="click-me" href="">click hello</a>
</div>
</body>
</html>

<script >
	$(document).ready(function(){
		$('#myspiner').fadeOut(2000,function(){
			$('#contents').fadeIn(1000);
		});

		$('#click-me').click(function(event){
			event.preventDefault();
		$('#tittle').html('hello friend');
	});
	});
    
	
</script>