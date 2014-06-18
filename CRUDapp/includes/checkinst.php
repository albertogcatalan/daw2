<?php

	
	try {
	    $sql = $db->query("SELECT install FROM install");
	    $results = $sql->fetch();
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}
	
	if ($results['install'] == 0){
		header("Location: install/index.php");
	}	



?>