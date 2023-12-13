<?php
    if(isset($_POST)){
        $autor = $_POST['autor'];
        $nombre = $_POST['nombre'];
        $gen_id = $_POST['genero_id'];
        $usuario = '';

        include'conexion.php';
        $sql_insertar = "insert into cancion
                    values(defaul,'$nombre','$autor','$usuario',$gen_id);";
        $conexion->query($sql_insertar);
        header('Location: cancion.php');
        exit;
    }
?>