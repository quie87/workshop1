<?php

require_once("View.php");
require_once("functions.php");

//Hämta in en test fil med text
$text = file_get_contents("test.txt");

$view = new View($text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Code base metrics</title>
</head>
<body>
    <header><h1>Code base metrics</h1></header>
    <div class="main content">
        <?php
            echo $view->show();
         ?>
    </div>
</body>
</html>