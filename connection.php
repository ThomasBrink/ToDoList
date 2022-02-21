<?php
	function openDatabase(){
		try{
			$conn = new PDO('mysql:host=localhost;dbname=todolist_db', 'root', 'mysql');
			return $conn;
		}

		catch(PDOExeption $e){
			print "Error!" . $e->getMessage() . "<br/>";
			die();
		}
	}
?>