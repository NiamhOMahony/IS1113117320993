<?php
section_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>RECIPTE</title>
    </head>
    <body>
        <h4>RECEIPT</h4>
        
        <?php
        //Echo sesion variables that were set on provisions page
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
    </body>
</html>