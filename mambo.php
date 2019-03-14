 <script src="jquery.min.js"></script>

<html>

<body>

</body>
<form id="validate" action="" method="post" kids()>
<input type="text" id="name" name="name"/>
<input type="text" id="surname" name="surname"/>
<input type="text" id="cell" name="cell"/>
<input type="text" id="idNumber" name="idNumber"/>
<input type="button" value="submit"/>
	</form>

</html>

<script>
	
$('#name').on('input',function(){
	var username=$(this).val();
 if(username.lenth <5){
   alert("wrong field brother");
 }else{
 	alert("so right brother");
 }
});
</script>

