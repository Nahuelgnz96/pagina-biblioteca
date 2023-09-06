<?php
include "model/conexion_bd.php";

// Consulta SQL para seleccionar los últimos 3 registros de la tabla "noticias"
<<<<<<< HEAD
$sql = "SELECT * FROM noticias WHERE estado = 'publicado' ORDER BY id_noticia DESC LIMIT 2";
=======
$sql = "SELECT * FROM noticias WHERE estado = 'publicado' ORDER BY id_noticia DESC LIMIT 3";
>>>>>>> 4bfe534917bd0cd48d590cb3766bea5e525f0b1e

$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        // Acceder a los datos de cada registro
        $id = $fila["id_noticia"];
        $titulo = $fila["titulo"];
        $descripcion = $fila["descripcion"];
        $contenido = $fila["contenido"];
        $imagen = $fila["imagen"];

        // Mostrar los datos o realizar cualquier otra operación
<<<<<<< HEAD
        echo "<a id='link' href='views/noticiaindividual.php?id=$id'>";
        echo "<div class='coffee-1'>";
        echo "<img src='gestor/img/noticias/".$imagen."'  alt=''>";
        echo "<h3>". $titulo ."</h3>";
        echo "<p>". $descripcion ."</p>";
        echo "</div>";
        echo "</a>";
=======
        echo "<div class='coffee-1'>";
        echo "<img src='img/file/".$imagen."'  alt=''>";
        echo "<h3>". $titulo ."</h3>";
        echo "<p>". $descripcion ."</p>";
        echo "</div>";
>>>>>>> 4bfe534917bd0cd48d590cb3766bea5e525f0b1e
        

    }
} else {
    echo "No se encontraron registros";
}

$conexion->close();
?>
