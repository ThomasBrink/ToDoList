<?php
    require ("functions.php");

    echo $_GET["id"];

    if(isset($_GET["id"])){
        DeleteList($_GET["id"]);

        header("location: index.php");
    }
?>