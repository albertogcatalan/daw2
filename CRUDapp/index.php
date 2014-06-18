<?php
require_once 'includes/db.php';
require_once 'includes/checkinst.php';


$err = $_GET['err'];

if ($err == 1) {
	$error = '<div class="alert"><button type="button" class="close" data-dismiss="alert">×</button><strong>AVISO</strong> No estas logeado.</div>';
}

$email = $_POST['email'];
$pass = $_POST['pass'];

if ($email <> "" and $pass <> "") {
	
	try {
	    $sql = $db->query("SELECT pass, type FROM users WHERE email = '$email'");
	    $results = $sql->fetch();
    } catch(PDOException $e) {
    	echo 'ERROR: ' . $e->getMessage();
    }
	
	
	
	//print_r($results);
	//exit;
	
	//echo "+++".md5($pass)."++++".$results['pass'];
	//exit;
	
	if (md5($pass) == $results['pass']){
		session_start();
		if (!isset($_SESSION["email"])){
		    $_SESSION["email"] = $email;
		    $_SESSION["type"] = $results['type'];
		    
		}
		header("Location: app.php");
	} else {
		$error = '<div class="alert"><button type="button" class="close" data-dismiss="alert">×</button><strong>AVISO</strong> Login incorrecto.</div>';	 
	}

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Gestión Videojuegos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    </head>

  <body>

    <div class="container">
	    
	  
      <form class="form-signin" method="post" action="index.php">
        <h2 class="form-signin-heading">Gestión Videojuegos</h2>
        <?php echo $error; ?>
        <input type="text" class="input-block-level" placeholder="Email" name="email">
        <input type="password" class="input-block-level" placeholder="Contraseña" name="pass">
      
        <button class="btn btn-large btn-primary" type="submit">Iniciar sesión</button>
      </form>
    </div> <!-- /container -->

  

</body></html>