<?php
require_once 'conexion.php';

$nombre=$_REQUEST["titulo"];
$descripcion=$_REQUEST["descripcion"];
$fecha=$_REQUEST["fecha"];
$noticia=$_POST["noticia"];
$foto=$_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace(" ","",$foto);
$destino="fotos/".$nombre_foto;

    $con = Conect();
    copy($ruta,$destino);
    
    mysqli_query($con, "insert into noticias (nombre,descripcion,imagen,noticia,fecha) values('$nombre','$descripcion','$destino','$noticia','$fecha')");
    header("Location: noticias.php");
?>
