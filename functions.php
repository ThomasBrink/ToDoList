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
?>