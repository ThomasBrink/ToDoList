<?php
	require("functions.php");

	$rows = GetAllLists();

	$taskrows = GetAllTasks();

	var_dump($taskrows);
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

				<?php
					for($a = 0; $a < count($taskrows); $a++){
				?>
					<div class="taskcon">
						<p>test</p>
					</div>
				<?php
					}
				?>
				<a href="addtask.php?id= <?php echo $rows[$i]["id"]; ?>">Maak taak aan</a>
				<br>
				<br>
				<a href="edit.php?id= <?php echo $rows[$i]["id"]; ?>">Bewerk list</a>
				<br>
				<br>
				<a href="delete.php?id= <?php echo $rows[$i]["id"]; ?>">Verwijder list</a>
			</div>
		<?php
			}
		?>
		<a class="addlist" href="addlist.php">Voeg nieuwe list toe</a>
	</div>		
</body>
</html>