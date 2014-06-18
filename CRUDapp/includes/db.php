<?php

$dbinfo = 'mysql:dbname=videogames;host=localhost';

$user = 'root';

$pass = '';

$db = new PDO($dbinfo, $user, $pass);

$db->exec('SET CHARACTER SET utf8');


?>