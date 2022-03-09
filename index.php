<?php
	require("functions.php");

	if($_GET["view"] == "aKlaar" || $_GET["view"] == "Bezig" || $_GET["view"] == "Starten"){
		$rows = GetAllListsFilterd($_GET["view"]);
	}
	else{
		$rows = GetAllLists();
	}
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
		<header>
			<a href="index.php?view=">Status</a>
			<a href="index.php?view=duur">Duur</a>
			<a href="index.php?view=aKlaar">Klaar</a>
			<a href="index.php?view=Bezig">Bezig</a>
			<a href="index.php?view=Starten">Starten</a>
		</header>
		<?php 
			for($i = 0; $i < count($rows); $i++){
				if($_GET["view"] == "duur"){
					$taskrows = GetListTaskOrdered($rows[$i]["id"], "duur");
				}
				else if($_GET["view"] == "aKlaar" || $_GET["view"] == "Bezig" || $_GET["view"] == "Starten"){
					$taskrows = GetListTaskFilterd($rows[$i]["id"], $_GET["view"]);
				}
				else($_GET["view"] == ""){
					$taskrows = GetListTaskOrdered($rows[$i]["id"], "status")
				}
		?>
			<div class="listcontainer">
				<h2><?php echo $rows[$i]["listname"]; ?></h2>
				<?php
					for($a = 0; $a < count($taskrows); $a++){
				?>
					<div class="taskcon">
						<div class="<?php echo $taskrows[$a]["status"]; ?>"></div>
						<p><?php echo $taskrows[$a]["task"]; ?></p>

						<p>Duur: <br> <?php echo $taskrows[$a]["duur"]; ?></p>

						<a href="editTask.php?id= <?php echo $taskrows[$a]["id"]; ?>">Bewerk deze taak</a>
						<br>
						<br>
						<a href="deleteTask.php?id= <?php echo $taskrows[$a]["id"]; ?>">Verwijder deze taak</a>
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
<script src="script.js"></script>
</html>