<!DOCTYPE html>
<html lang=fr>

<head>
    <meta name="author" content="21904141" />
    <title>Mon site web</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="index.css">
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
 </script>
</head>

<body>
<?php
    include 'menu.php';
    ?>
    
    <hr>
    
    <?php
    include 'apropos.php';
    ?>
    
    <hr>
    
    <?php
    include 'Competences.php';
    ?>
    
    <hr>
    
    <?php
    include 'Experience.php';
    ?>
    
    <hr>
    
    <?php
    include 'Formation.php';
    ?>

    <hr>
    
    <?php
    include 'Contact.php';
    ?>
    
        <footer>
            <p><a href="mentionlegal.html"> Mentions Légales Alban Safdari </a></p>
        </footer>
    
    <div id="scroll_to_top">
    <a href="#top"><img src="images/fleche.png" alt="Retourner en haut" /></a>
</div>
    </body></html>