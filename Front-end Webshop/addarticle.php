<?php
    session_start();


?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/page.css">
    </head>
    <body>
        <form id="add" method="post" action='<?php echo $_SERVER["PHP_SELF"];?>'>
            <input type="text" id="naam" class="check" required value="">
            <textarea id="beschrijving" class="check" required></textarea>
            <input type="text" id="prijs" class="check" required value="">          
            
            <input type="submit" value="Toevoegen">
            <a href="index.php">     </a>
        </form>
    </body>
</html>
