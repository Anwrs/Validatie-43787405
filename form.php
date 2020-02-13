<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="form.php" method="get">
    <input type="email" name="mail" id="" placeholder="voer je Email-adress in">
    <button type="submit">Verstuur</button>
    </form>
</body>
</html>

<?php 
    if(filter_var($_GET["mail"], FILTER_VALIDATE_EMAIL)){
        echo "<h1>Emailadress is Geldig!</h1>";
    }
?>