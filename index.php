<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php if(empty($_SESSION['login'])):?>
        <?php else:?>
        <?php endif;?>
    </body>
</html>
