<?php
include "../model/conexion_bd.php";
$id = $_GET["id"];

// Consulta SQL para seleccionar el registro de la tabla "noticias" con el ID especificado
$sql = "SELECT * FROM noticias WHERE estado = 'publicado' AND id_noticia = $id";

$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        // Acceder a los datos de cada registro
        $titulo = $fila["titulo"];
        $descripcion = $fila["descripcion"];
        $contenido = $fila["contenido"];
        $imagen = $fila["imagen"];

        // Mostrar los datos o realizar cualquier otra operación
        echo "<div class='coffee-1'>";
<<<<<<< HEAD
        echo "<h3>". $titulo ."</h3>";
        echo "<img src='../gestor/img/noticias/".$imagen."'  alt=''>";
=======
        echo "<img src='../img/file/".$imagen."'  alt=''>";
        echo "<h3>". $titulo ."</h3>";
>>>>>>> 4bfe534917bd0cd48d590cb3766bea5e525f0b1e
        echo "<p>". $descripcion ."</p>";
        echo "<p>". $contenido ."</p>";
        echo "</div>";
    }
} else {
    echo "No se encontraron registros";
}
?>
