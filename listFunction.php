<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('li').each(function(index,element){
			alert(index+':'+$(element).text());
		});
	});
</script>

</head>
<body>
	<ul class="mofo">
		<li>us</li>
		<li>india</li>
		<li>uk</li>
		<li>canada</li>
	</ul>
</body>
