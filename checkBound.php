<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>




<script>
  $(document).ready(function(){
          $("#btn").click(function(){
          	alert('button clicked');
          });
      
       $("input[type='text']").each(function(){
       	  $('.mogo').append($(this).val())
       });
    });

  
</script>
</head>
<body style="font-family: Arial">
	<input type="button" id="btn" value="submit"/><br>
	first name<input type="text" value="john"/><br>
	last name<input type="text" value="tshibonda"/><br>
	<input type="radio" name="gender" checked="checked" value="Male" />male
	<input type="radio" name="gender" value="Female" />female
	<br></br>
	Skills:
	<input type="checkbox" name="skills" checked="checked" value="javaScript" />javaScript
<input type="checkbox" name="skills" checked="checked" value="jquery" />jQuery

<div class="mogosme"></div>	
	
</body>