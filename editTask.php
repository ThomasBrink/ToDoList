<?php
	require("functions.php");

	$check = true;

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$check = false;

			$v1 = $_POST["v1"];
			$v2 = $_POST["v2"];

	   		$data = array(
	   		"id" => $_GET['id'],
	   	    "task" => $v1,
	   	    "duur" => $v2
	    );

		EditTask($data);
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Add list</title>
</head>
<body>
	<div class="container">
		<?php 
			if($check == true){
		?>
		<h1>Edit taak</h1>
		<header></header>
		<form method="POST">
			<label for= "v1" class= "l1">Taak omschrijving:</label>
			<input type="text" name="v1" placeholder="Vul in.">

			<label for= "v2" class= "l2">Verwachte duur van taak:</label>
			<input type="time" name="v2" placeholder="Vul in.">

			<button>Bewerken</button>
		</form>
		<?php
			}

			else{
		?>
			<h1>List is bewerkt</h1>

			<a href="index.php">Terug naar index</a>
		<?php
			}
		?>
	</div>
</body>
</html>