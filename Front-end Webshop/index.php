<?php
    session_start();


?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/page.css">
        <script type="text/javascript" src="js/checkFields.js"></script>
    </head>
    <body>
        <form id="add" method="post" action='<?php echo $_SERVER["PHP_SELF"];?>'>
            <input type="text" id="naam" class="check" value="">
            <textarea id="beschrijving" class="check"></textarea>
            <input type="text" id="prijs" class="check" value="">          
        </form>
    </body>
</html>
