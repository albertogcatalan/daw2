<?php
require_once 'includes/db.php';
require_once 'includes/checkinst.php';

session_start();
if (!isset($_SESSION["email"])){
	header("Location: index.php?err=1");
}

$email = $_POST['email'];
$pass = md5($_POST['pass']);

if ($email <> "" and $pass <> "") {

	$sql = $db->prepare('INSERT users SET email = :email, pass = :pass');
	$sql->bindValue(':email', $email, PDO::PARAM_STR);
	$sql->bindValue(':pass', $pass, PDO::PARAM_STR);
	$sql->execute();
	
	header("Location: app.php");
}
		
//echo "User -> ".$email." con password MD5 -> ".$pass." insertada correctamente";
//exit;

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
        padding-top: 60px;
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
     <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    </head>

  <body>
  
  <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="app.php">GestiónApp</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="app.php">Inicio</a></li>
              <li><a href="add.php">Añadir juego</a></li>
              <?php if ($_SESSION["type"] == 1){ ?><li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="adduser.php">Añadir usuario</a></li>
                  <li><a href="users.php">Listado usuarios</a></li>
                </ul>
              </li> 
              <?php } ?>

             
            </ul>
            <div class="btn-group pull-right">
            
          	<a class="btn btn-info" href="signout.php"><i class="icon-white icon-off"></i></a>          	
          </div>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>


    <div class="container">

      <form class="form-signin" method="post" action="adduser.php">
        <h2 class="form-signin-heading">Nuevo usuario</h2>
        <input type="text" class="input-block-level" placeholder="Email" name="email">
        <input type="password" class="input-block-level" placeholder="Contraseña" name="pass">
        <!--<label class="checkbox">
          <input type="checkbox" value="remember-me"> Recuerdame
        </label>-->
        <button class="btn btn-large btn-primary" type="submit">Registrar</button>
      </form>
      <p><?php echo $error; ?></p>
    </div> <!-- /container -->

  
<script src="js/bootstrap-dropdown.js"></script>
</body></html>
