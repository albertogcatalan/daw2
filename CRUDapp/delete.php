<?php
require_once 'includes/db.php';

//comprobamos si esta logeado el usuario
session_start();
if (!isset($_SESSION["email"])){
    header("Location: index.php?err=1");
}

if( isset($_GET['id']))
{
	$sql = $db->prepare('DELETE FROM games WHERE id = :id');
	$sql->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
	$sql->execute();
}
	header('Location: app.php');
	exit;

?>