<?php include('./includes/title.inc.php');?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Alberto González - <?php if (isset($title)) {echo "{$title}";} ?></title>
        <meta name="keywords" content="portfolio, alberto, proyectos"/>
        <meta name="description" content="Web de Alberto González."/>
		<meta name="author" content="Alberto González Catalán"/>
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
                        <h1>Acerca de</h1>
                        <p>¿Qué es Abelabs?, Abelabs soy yo, <strong><i>Alberto González</i></strong>, fundador desde 2010. <br>Empecé queriendo mostrar mis desarrollos en Internet y he terminado convirtiéndolo en un portfolio en mayor o menor medida, de todo lo último que estoy haciendo a nivel de proyectos tanto personales como profesionales.<i>"Todo comenzó con la idea de poder publicar y mostrar los proyectos que realizo para compartirlos o distribuirlos a todas las personas que les pueda interesar el uso del mismo.</i><br>Me considero una persona emprendedora, geek, twittero, amante de la cafeína, autodidacta y sobretodo inquieto.</p>                   
                     </header>
                    
                </article>

                <?php include('./includes/social.inc.php'); ?>

            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <?php include('./includes/footer.inc.php'); ?>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="js/main.js"></script>
        
    </body>
</html>
