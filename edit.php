<?php 
	require("functions.php");

	$check = true;

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$check = false;
			echo $check;

			$v1 = $_POST["v1"];

	   		$data = array(
	   		"id" => $_GET['id'],
	   	    "listname" => $v1
	    );

		EditList($data);
		
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
		<h1>Edit list</h1>

		<form method="POST">
			<label for= "v1" class= "l1">List naam:</label>
			<input type="text" name="v1" placeholder="Vul in.">

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