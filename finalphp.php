<?php
//colorchanger.php är tänkt vara knappen med rand(); och övrig php kod till knappen som även ska innehålla slump uträkningen.

require_once('finalphp.php'); ?> 
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8"/>
		
				<!-- "finalphp.css" innehåller mått för knappen!-->
			<link rel="stylesheet" href="finalphp.css"/>
				<meta name="viewport" content="width=device-width"/>
		<title> Color changer </title>
	</head>
	
	<body>
		<style>
			
		</style>
		<!--Här ska knappen komma igång med sin funktion att den ändrar färg efter antal klick som är populärast.!-->

		<form action = "." method = "post">
			<!--$colorchanger ska vara variabel inblandad med 					färgerna.!-->
			<input type = "button" value = "Buy" class = "<?php 				echo $colorchanger; ?>" />
		</form>
	</body>

</html>

//$string = "value1, value 2, value3";
//explode string to an array
//$array = explode(',' $string);
//output array so we can see the content
//var_dump($array);