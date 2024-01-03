<?php

require __DIR__.'/vendor/autoload.php';

//composer require mistic100/randomcolor

use \Colors\RandomColor;

// echo RandomColor::one(); 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Composer</title>
    <style>
        .colAl {
            color:<?=RandomColor::one()?>
        }
    </style>
</head>
<body>
<h1 class="colAl">Un titre avec une couleur aléatoire</h1>
</body>
</html>
