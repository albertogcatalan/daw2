<?php
session_start();
if (!isset($_SESSION["email"])){
    header("Location: index.php");
}else{
	$_SESSION["email"] = null;
	session_destroy();
	header("Location: index.php");
}


?>