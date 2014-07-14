<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $a_number = 100;
        
        session_start();
        
        $_SESSION['number1'] = $a_number;
        
        echo $_SESSION['number1'];
        
        ?>
    </body>
</html>
