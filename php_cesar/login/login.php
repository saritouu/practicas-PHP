<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Iniciar sesión</h2>
<?php
if (isset($_SESSION['nombre'])){
    $usuario = $_SESSION['nombre'];
    echo "Bienvenido $usuario";
}else{
    echo "<form action='dashboard.php' method='POST'>";
    echo "<input type='text' name='nombre'>";
    echo "<button type='submit'>Acceder</button>";
    echo "</form>";
}
?>
</body>
</html>