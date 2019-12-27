<?php

$link = mysqli_connect("50.62.209.73:3306","todooriente_user","nosequeponer123","TodoOriente_noticias");
$array = array();

    $sql = "SELECT * FROM noticias ORDER BY fecha DESC";
    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    while ($field = mysqli_fetch_array($result)) {
        $nombre = $field['nombre'];
        $id = $field['id'];
        $descripcion = $field['descripcion'];
        $imagen = $field['imagen'];
        $noticia = $field['noticia'];
        $fecha = $field['fecha'];
        $array[] = array(
            'titulo' => $nombre,
            'id' => $id,
            'descripcion' => $descripcion,
            'imagen' => $imagen,
            'noticia' => $noticia,
            'fecha' => $fecha
        );
    }
$json_string = json_encode($array, JSON_UNESCAPED_UNICODE);
echo $json_string;

