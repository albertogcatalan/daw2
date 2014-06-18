<?php
require_once 'includes/filter-wrapper.php';
require_once 'includes/db.php';
require_once 'includes/checkinst.php';

//comprobamos si esta logeado el usuario
session_start();
if (!isset($_SESSION["email"])){
    header("Location: index.php?err=1");
}else{
   
	$sql = $db->query('SELECT id, title, release_date, publisher, rating,
	
	system, num_players FROM games ORDER BY title ASC');
	
	$results = $sql->fetchAll(PDO::FETCH_OBJ);

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
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

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

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Listado de videojuegos</h1>
        <p>Gestión de los registros de la base de datos</p>
        <table class="table table-bordered table-hover">
    	<thead>
            <th>Título</th>
            <th>Fecha publicación</th>
            <th>Desarrollador</th>
            <th>Plataforma</th>
            <th>Valoración</th>
            <th>Jugadores</th>
            <th></th>
        </thead>
        <tbody>
        	<?php foreach($results as $entry): ?>
            <tr>
            	<td><?php echo $entry->title; ?></td>
                <td><?php echo $entry->release_date; ?></td>
                <td><?php echo $entry->publisher; ?></td>
                <td><?php echo $entry->system; ?></td>
                <td><?php echo $entry->rating; ?></td>
                <td><?php echo $entry->num_players; ?></td>
                <td><a href="edit.php?id=<?php echo $entry->id; ?>" class="btn">Editar</a> <a href="delete.php?id=<?php echo $entry->id; ?>" class="btn btn-danger">Eliminar</a></td>
            </tr>
            <?php endforeach; ?>
            
        </tbody>
    </table>

        <p><a href="add.php" class="btn btn-primary btn-large">Añadir videojuego</a></p>
      </div>

   
      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div> <!-- /container -->

<script src="js/bootstrap-dropdown.js"></script>
</body>
</html>