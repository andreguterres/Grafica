<!DOCTYPE html>
<html>
    <?php
        include './config.php';
        include './head.php';
    ?>
    <body>
        <?php          
        
            include './header.php';           
            include './paginas/'.$nome_pagina.'.html';
            include './footer.php';
        ?>
    </body>
</html>