<?php
require_once 'includes/filter-wrapper.php';
require_once 'includes/db.php';
require_once 'includes/checkinst.php';

//comprobamos si esta logeado el usuario
session_start();
if (!isset($_SESSION["email"])){
    header("Location: index.php?err=1");
}


$errors = array();

//sanitize all the fields
$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);

$release_date = filter_input(INPUT_POST, 'release_date', FILTER_SANITIZE_STRING);

$publisher = filter_input(INPUT_POST, 'publisher', FILTER_SANITIZE_STRING);

$system = filter_input(INPUT_POST, 'system', FILTER_SANITIZE_STRING);

$rating = filter_input(INPUT_POST, 'rating', FILTER_SANITIZE_NUMBER_INT);

$num_players = filter_input(INPUT_POST, 'num_players', FILTER_SANITIZE_NUMBER_INT);

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	//validate the form
	if(empty($title))
		$errors['title']=true;

	if(empty($release_date))
		$errors['release_date']=true;

	if(empty($publisher))
		$errors['publisher']=true;

	if(empty($system))
		$errors['system']=true;

	if(empty($rating))
		$errors['rating']=true;

	if(empty($num_players))
		$errors['num_players']=true;	

	//if there are no errors put data into database
	if(empty($errors))
	{
		$sql = $db->prepare('INSERT games SET title = :title, release_date = :release_date, publisher = :publisher, system = :system, rating = :rating, num_players = :num_players');
		$sql->bindValue(':title', $title, PDO::PARAM_STR);
		$sql->bindValue(':release_date', $release_date, PDO::PARAM_STR);
		$sql->bindValue(':publisher', $publisher, PDO::PARAM_STR);
		$sql->bindValue(':system', $system, PDO::PARAM_STR);
		$sql->bindValue(':rating', $rating, PDO::PARAM_INT);
		$sql->bindValue(':num_players', $num_players, PDO::PARAM_INT);

		$sql->execute();
		header('location: app.php');
		exit;
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
        padding-top: 60px;
        padding-bottom: 40px;
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
              <li><a href="app.php">Inicio</a></li>
              <li  class="active"><a href="add.php">Añadir juego</a></li>
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

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        
        	<form action="add.php" method="post">
        	
        
        	<div class="row-fluid">
			  <div class="span12">
				  
			    <div class="row-fluid">
			      <div class="span4"></div>
			      <div class="span5">
			      <h1>Añadir</h1>
				      		<label for="title">Título</label>
            <?php if(isset($errors['title'])): ?>
            <label for "title"><p class="error">Error! Enter Valid Title</p></label>
            <?php endif; ?>
            <input id="title" name="title" class="input-xlarge" type="text" placeholder="Escribe el título" value="<?php echo $title; ?>">
        
        	<label for="release_date">Fecha publicación</label>
            <?php if(isset($errors['release_date'])): ?>
            <label for "release_date"><p class="error">Error! Enter Valid Date (YYYY-DD-MM)</p></label>
            <?php endif; ?>
            <input id="release_date" class="input-xlarge" type="text" name="release_date" placeholder="YYYY-DD-MM" value="<?php echo $release_date; ?>">
        
        	<label for="publisher">Desarrollador</label>
            <?php if(isset($errors['publisher'])): ?>
            <label for "publisher"><p class="error">Error! Enter Publisher</p></label>
            <?php endif; ?>
            <input id="publisher" class="input-xlarge" type="text" name="publisher" placeholder="Konami, Capcom, Square Enix..." value="<?php echo $publisher; ?>">
        

        
        	<label for="system">Plataforma</label>
            <?php if(isset($errors['system'])): ?>
            <label for "system"><p class="error">Error! Enter System</p></label>
            <?php endif; ?>
            <input id="system" class="input-xlarge" type="text" name="system" placeholder="PS3, PC, Wii, Xbox..." value="<?php echo $system; ?>">
        

        
        	<label for="rating">Valoración</label>
            <?php if(isset($errors['rating'])): ?>
            <label for "rating"><p class="error">Error! Enter Rating (1-10)</p></label>
            <?php endif; ?>
            <input id="rating" class="input-xlarge" type="text" name="rating" placeholder="10" value="<?php echo $rating; ?>">
        

        
        	<label for="num_players">Jugadores</label>
            <?php if(isset($errors['num_players'])): ?>
            <label for "num_players"><p class="error">Error! Enter Number Of Players</p></label>
            <?php endif; ?>
            <input id="num_players" class="input-xlarge" type="text" name="num_players" placeholder="2" value="<?php echo $num_players; ?>">
        
             <p></p>
            <button type="submit" class="btn btn-primary">Guardar</button>
		  <button type="button" class="btn">Cancelar</button>
        
			      <div class="span3"></div>
			    </div>
		

			  </div>
			</div>
        	
		 </div>
        
        
    </form>

        
      </div>

   
      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div> <!-- /container -->


<script src="js/bootstrap-dropdown.js"></script>
</body>
</html>