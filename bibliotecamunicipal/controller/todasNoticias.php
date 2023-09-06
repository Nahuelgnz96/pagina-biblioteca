<?php
include "../model/conexion_bd.php";

// Consulta SQL para seleccionar los 3 "noticias"
<<<<<<< HEAD
$sql = "SELECT * FROM noticias WHERE estado = 'publicado' ORDER BY fecha_publicacion DESC";
=======
$sql = "SELECT * FROM noticias ";
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
        $fecha = $fila["fecha_publicacion"];

        // Mostrar los datos o realizar cualquier otra operación
<<<<<<< HEAD
        echo "<a id='link' href='noticiaindividual.php?id=$id' >";
        echo "<div class='coffee-1'>";
        echo "<img src='../gestor/img/noticias/".$imagen."'  alt=''>";
=======
        echo "<a id='link' href='noticiaindividual.php?id=$id' target='_blank'>";
        echo "<div class='coffee-1'>";
        echo "<img src='../img/file/".$imagen."'  alt=''>";
>>>>>>> 4bfe534917bd0cd48d590cb3766bea5e525f0b1e
        echo "<h3>". $titulo ."</h3>";
        echo "<p>". $descripcion ."</p>";
        echo "<p class='coffee-text' >&nbsp;&nbsp;&nbsp;&nbsp; " . $fecha . "</p>";
        echo "</div>";
        echo "</a>";
    }
} else {
    echo "No se encontraron registros";
}

$conexion->close();
?>