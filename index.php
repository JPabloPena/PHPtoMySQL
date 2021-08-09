<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrar usuario</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body> 
    <form method="post">
        <h1>Registrarse</h1>
        <input type="text", name="name", placeholder="Nombre">
        <input type="email" name="email" placeholder="Email">
        <input type="submit" name="register">
    </form>
    <?php
        include("registrar.php");
        
    ?>
</body>
</html>