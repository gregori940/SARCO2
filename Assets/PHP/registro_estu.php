<?php
include 'conexion_be.php';

  if (isset($_POST['register'])) {

 
  if (strlen($_POST ['nomb_est']) >= 1 &&
    strlen ($_POST ['apell_est']) >= 1 &&
  strlen( $_POST ['gen_est'])>= 1 &&
  strlen( $_POST ['f_n_est'])>= 1 &&
  strlen( $_POST ['fech_est'])>= 1 &&
  strlen( $_POST ['act_nan_est'])>= 1 &&
  strlen( $_POST ['ci_repre'] >= 1)){

  $nomb_est = trim($_POST ['nomb_est']);
  $apell_est = trim($_POST ['apell_est']);
  $gen_est = trim($_POST ['gen_est']);
  $f_n_est = trim($_POST ['f_n_est']);
  $fech_est = trim($_POST ['fech_est']);
  $act_nan_est = trim($_POST ['act_nan_est']);
  $ci_repre = trim($_POST ['ci_repre']);
  }
}

   

$consulta = "INSERT INTO usuarios (nomb_est, apell_est, gen_est,f_n_est,fech_est,act_nan_est,ci_repre) 
    VALUES('$nomb_est', '$apell_est', '$gen_est', '$f_n_est', '$fech_est', '$act_nan_est', '$ci_repre')";
$resultado = mysqli_query($conexion, $consulta);
//verificar que la cedula no se repita en la base de datos//
    $verificar_cedula = mysqli_query($conexion, "SELECT * FROM estudiantes WHERE ci_repre = '$ci_repre'");

    if(mysqli_num_rows($verificar_cedula) > 0){
        echo '
        <script>
                alert("Esta cedula ya existe, intenta con otra diferente")
                window.location ="../index.php";
            </script>
        
        ';

        exit();
    }
//verificar que el cedulrepresentantes no se repita en la base de datos//
    $verificar_nombe_est = mysqli_query($conexion, "SELECT * FROM estudiantes WHERE ci_repre = '$ci_repre'");


if(mysqli_num_rows($verificar_nombe_est $verificar_apell_est $verificar_gen_est ) > 0){
    echo '
    <script>
            alert(" Este Usuario ya existe, intenta con otro diferente")
            window.location ="index.php";
        </script>
    
    ';

    exit();
}




$ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario Almacenado Exitosamente");
                window.location ="index.php";
            </script>
        
        ';
    }else{
        echo '
        <script>
            alert("Intentalo de nuevo, usuario no almacenado");
            window.location ="index.php";
        </script>
    '; 
    }

    mysqli_close($conexion);


?>