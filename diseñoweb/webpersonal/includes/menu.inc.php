<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
<nav>
    <ul>
        <li><a href="index.php" <?php if ($currentPage == 'index.php') {echo 'id="here"';} ?>>Inicio</a></li>
        <li><a href="about.php" <?php if ($currentPage == 'about.php') {echo 'id="here"';} ?>>Acerca de</a></li>
        <li><a href="contact.php" <?php if ($currentPage == 'contact.php') {echo 'id="here"';} ?>>Contacto</a></li>
    </ul>
</nav>
