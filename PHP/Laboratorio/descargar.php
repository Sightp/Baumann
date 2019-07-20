<?php

    $rut=$_GET['rut'];
    $boleta=$_GET['boleta'];
    $prducto=$_GET['prducto'];
    $orden=$_GET['orden'];

    $nombrefinal=$rut."&".$boleta."&".$prducto."&".$orden;
    header("Content-disposition: attachment; filename=$nombrefinal.pdf");
    header("Content-type: application/pdf");
    readfile("/opt/lampp/htdocs/Optica/Baumann/Archivos/$nombrefinal.pdf");

?>