<?php include('./includes/title.inc.php');
$errors = array();
$missing = array();
// check if the form has been submitted
if (isset($_POST['send'])) {
  // email processing script
  $to = 'alberto@abelabs.com';
  $subject = 'Alberto González Contacto';
  // list expected fields
  $expected = array('name', 'email', 'comments');
  // set required fields
  $required = array('name', 'comments', 'email');
  require('./includes/processmail.inc.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Alberto González - <?php if (isset($title)) {echo "{$title}";} ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="shortcut icon" href="favicon.png" />
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

    </head>
    <body>
        <div class="header-container">
            <header class="wrapper clearfix">
                <h1 class="title">Alberto González</h1>
                 <?php include('./includes/menu.inc.php'); ?>
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">

                <article>
                    <header>
                        <h1>Contacto</h1>
                        <?php if ($_POST && $suspect) { ?>
          <p class="warning">Su email no ha sido enviado, por favor inténtelo más tarde.</p>
        <?php } elseif ($missing || $errors) { ?>
          <p class="warning">Por favor corrija los errores de contacto.</p>
        <?php } ?>
      <p>Si quieres contactar conmigo, por favor rellena el formulario a continuación:</p>
        <form id="feedback" method="post" action="">
            <p>
                <label for="name">Nombre:
                <?php if ($missing && in_array('name', $missing)) { ?>
                  <span class="warning">Por favor, introduzca su nombre</span>
                <?php } ?>
                </label>
                <input name="name" id="name" type="text" class="formbox"
                <?php if ($missing || $errors) { 
                 echo 'value="' . htmlentities($name, ENT_COMPAT, 'UTF-8') . '"';
                } ?>>
            </p>
            <p>
                <label for="email">Email:
                <?php if ($missing && in_array('email', $missing)) { ?>
                  <span class="warning">Por favor, introduzca su email</span>
                <?php } ?>
                </label>
                <input name="email" id="email" type="text" class="formbox"
                <?php if ($missing || $errors) { 
                 echo 'value="' . htmlentities($email, ENT_COMPAT, 'UTF-8') . '"';
                } ?>>
            </p>
            <p>
                <label for="comments">Comentario:
                <?php if ($missing && in_array('comments', $missing)) { ?>
                  <span class="warning">Por favor, introduzca su comentario o mensaje</span>
                <?php } ?>
                </label>
                <textarea name="comments" id="comments" cols="60" rows="8"><?php
                if ($missing || $errors) {
                  echo htmlentities($comments, ENT_COMPAT, 'UTF-8');
                } ?></textarea>
            </p>
            <p>
                <input name="send" id="send" type="submit" value="Enviar mensaje">
            </p>
        </form>
                          </header>
                    
                </article>

                
                	
            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <?php include('./includes/footer.inc.php'); ?>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="js/main.js"></script>
        
    </body>
</html>
