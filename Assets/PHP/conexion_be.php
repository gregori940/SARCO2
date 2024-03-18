<?php

$conexion = mysqli_connect("localhost","root","","sarco");

if($conexion){
    echo'Contectado exitosamente a la Base de Datos';
}else{
    echo 'No se a podido conectar a la Base de Datos';
}


?>