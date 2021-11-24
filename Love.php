<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background-image: url('./lo.jpg');
			background-size: 100%
		}
		.upper
		{
			position: absolute;
			left: 35%;
			border: 3px solid white;
			border-radius:6px;
			width: 450px;
			margin-bottom:8px;
			margin-left:8px;
			float: left;padding:60px 0;
		}
		.form{
			align-items: center;
		}
		.label1{
			padding: 45px; 
			font-family: sans-serif;
			font-size:20px;
			color: white;
		}
		.input1{
			margin-left: 7px;
			border-radius: 30px;
			height: 30px; 
			width: 200px; 
			text-align: center;
		}
		.label2{
			font-family: sans-serif; 
			font-size:20px; 
			color: white;
		}
		.input2{
			border-radius: 30px; 
			height: 30px; 
			width: 200px; 
			text-align: center;
		}
		.label3{
			padding: 22px;
		}
		.button{
			position : absolute; 
			top: 35%; 
			left: 35% ;
			background-color: #f44336;
  			border: none;  
  			color: white; 
  			padding: 10px 32px; 
  			text-align: center; 
  			text-decoration: none;
  			display: inline-block;
  			font-size: 15px; 
  			margin: 4px 2px; 
  			cursor: pointer; 
  			border-radius: 30px;
		}
		.div{
			padding: 140px;  
			font-family: 'Brush Script MT', cursive;
			font-size:20px; 
			color: white;
		}
		
	</style>
</head>
<body>

	<div class ="upper">

	<form method="GET" class="form">
	
		<label class="label1">YOUR NAME: 
			<input type="text" name="name1" class="input1">
		</label>

		<br><br>

		<label class="label2">PARTNER'S NAME:
			<input type="text" name="name2" class="input2">
		</label>

		<label class="label3">
			<button type="submit" name="btn" class="button">CALCULATE LOVE %</button> 
  		</label>

	</form>




<div class="div">


<?php

if (isset($_GET["btn"])) {

	echo $_GET["name1"];
	echo " + ";
	echo $_GET["name2"];
	echo " = ";
	echo "% ".(rand(0,100));

	$filename = "lo.txt";
	$contetnt = $_GET["name1"] . "," . $_GET["name2"] . "\n";

	$we = fopen($filename, 'a+');
	fwrite($we, $contetnt);
	fclose($we);
	
}else{

	echo "Please Submit the form";
}


?>

</div>
</div>
</body>
</html>