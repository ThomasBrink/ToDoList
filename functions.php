<?php
	require("connection.php");

	function GetAllLists(){
		$conn = openDatabase();
		$query = "SELECT * FROM `lists`";
	    $result = $conn->prepare($query);
	    $result->execute();
	    $rows = $result->fetchAll();
	    return $rows;
	}

	function GetList($id){
		$conn = openDatabase();
		$query = "SELECT * FROM `lists` WHERE `id` = $id";
	    $result = $conn->prepare($query);
	    $result->execute();
	    $rows = $result->fetch();
	    return $rows;
	}

	function GetAllTasks(){
		$conn = openDatabase();
		$query = "SELECT * FROM `tasks`";
	    $result = $conn->prepare($query);
	    $result->execute();
	    $rows = $result->fetchAll();
	    return $rows;
	}

	function GetTask($id){
		$conn = openDatabase();
		$query = "SELECT * FROM `tasks` WHERE `id` = $id";
	    $result = $conn->prepare($query);
	    $result->execute();
	    $rows = $result->fetch();
	    return $rows;
	}

	function GetListTask($listId){
		$conn = openDatabase();
		$query = "SELECT * FROM `tasks` WHERE `listid` = $listId";
		$result = $conn->prepare($query);
	    $result->execute();
	    $rows = $result->fetchAll();
	    return $rows;
	}

	function GetListTaskOrdered($listId){
		$conn = openDatabase();
		$query = "SELECT * FROM `tasks` WHERE `listid` = $listId ORDER BY `status`";
		$result = $conn->prepare($query);
	    $result->execute();
	    $rows = $result->fetchAll();
	    return $rows;
	}

	function DeleteList($id){
		$conn = openDatabase();
		$query = $conn->prepare("DELETE FROM `lists` WHERE `id` = $id");
		$query->execute();
	}

	function DeleteTask($id){
		$conn = openDatabase();
		$query = $conn->prepare("DELETE FROM `tasks` WHERE `id` = $id");
		$query->execute();
	}

	function DeleteListTasks($id){
		$conn = openDatabase();
		$query = $conn->prepare("DELETE FROM `tasks` WHERE `listid` = $id");
		$query->execute();
	}

	function AddList($data){
		$conn = openDatabase();
		$query = $conn->prepare("INSERT INTO `lists` (`id`, `listname`) VALUES (NULL, '$data[listname]')");
		$query->execute();
	}

	function AddTaskToList($data){
		$conn = openDatabase();
		$query = $conn->prepare("INSERT INTO `tasks` (`id`, `listid`, `task`, `duur`, `status`) VALUES (NULL, '$data[listId]', '$data[task]', '$data[duur]', '$data[status]');");
		$query->execute();
	}

	function EditList($data){
		$conn = openDatabase();
		$query = $conn->prepare("UPDATE `lists` SET `listname` = '$data[listname]' WHERE `lists`.`id` = '$data[id]';");
		$query->execute();
	}

	function EditTask($data){
		$conn = openDatabase();
		$query = $conn->prepare("UPDATE `tasks` SET `task` = '$data[task]', `duur` = '$data[duur]' WHERE `id` = '$data[id]';");
		$query->execute();
	}
?>