<?php
session_start();




?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form id="edit" method="post" action='<?php echo $_SERVER["PHP_SELF"];?>'>
            <input type="text" id="naam" class="check" required value="">
            <textarea id="beschrijving" class="check" required></textarea>
            <input type="text" id="prijs" class="check" required value="">          
        </form>
    </body>
</html>
