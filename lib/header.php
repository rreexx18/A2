<!DOCTYPE html>
<html>
    <head>
        <title>M7 A2</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <header>
            <h1>Practica 2 M7</h1>
            <?php if( !empty($_COOKIE['time']) && isset($_COOKIE['name']) && isset($_COOKIE['passwd']) ){ ?>
                <span><?= gmdate("d-m-Y H:i", $_COOKIE['time']) ?></span>
            <?php } ?>
        </header>