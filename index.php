<?php
	require("functions.php");

	$rows = GetAllLists();

	var_dump($rows);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>ToDo List</title>
</head>
<body>
	<div class="container">
		<h1>ToDo List</h1>

		<?php 
			for($i = 0; $i < count($rows); $i++){
		?>
			<div class="listcontainer">
				<h2><?php echo $rows[$i]["listname"]; ?></h2>

				<a></a>
			</div>
		<?php
			}
		?>
	</div>		

</body>
</html>