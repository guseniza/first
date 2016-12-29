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
        <form method="post">
            <label>Login:
                <input type="text" name="login"/>
            </label>
            <input type="submit" value="log in"/>
            
        </form>
        <?php else:?>
        <?php endif;?>
    </body>
</html>
