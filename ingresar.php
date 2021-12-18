<!--Agregué esto para que me corra el script de las ventanas de alerta-Ocampo-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar</title>
</head>
<body>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>

<!---------------------------------------------------------------------------------->

<?php

include('conexion.php');

/* Diego, esto lo paso por el include abajo porque sino se va directamente para registrados y pasa por el filtro
header ('location: registrados.php');-Ocampo*/


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$correo = $_POST['email'];
$password = $_POST['contraseña'];

//Elimina espacios en blanco en caso de recibir los datos con esta forma(2 o más espacios). Uso de patters-Ocampo


$nombre=preg_replace('/\s\s+/', ' ', $nombre);
$apellido=preg_replace('/\s\s+/', ' ', $apellido);
$dni=preg_replace('/\s\s+/', ' ', $dni);
$telefono=preg_replace('/\s\s+/', ' ', $telefono);
$correo=preg_replace('/\s\s+/', ' ', $correo);
$password=preg_replace('/\s\s+/', ' ', $password);

  /*Encriptado de contraseña en base de Datos SHA-Ocampo*/

    // $passCifrado = hash('sha512', $password); Lo comento hasta saber como actualizar o modificar con contraseñas encriptadas


//validando que los ingresos no sean duplicados en los campos específicos - Diego

$validar = "SELECT * FROM registrados WHERE Email = '$correo' || DNI = '$dni'";
$validando = mysqli_query($conexion,$validar);

    if ($validando -> num_rows > 0) {
             
                echo 
                "<script type='text/javascript'>swal('Error','Datos incorrectos, DNI o Email duplicados','error');
                </script>";
                include('registro.html');


            }
    else {

    $ingresar= "INSERT INTO registrados(ID_usuario, Nombre, Apellido, DNI, Teléfono, Email, Contraseña) VALUES (null,'$nombre', '$apellido', '$dni', '$telefono', '$correo','$password')";
    $insert = mysqli_query($conexion,$ingresar);
              
        echo 
               "<script type='text/javascript'>swal('Guardado','Se ingresó el dato correctamente','success');
               </script>";
                include('registrados.php');
                   }
  
?>