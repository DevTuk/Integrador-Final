<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/estilos.css">
    <script src="script.js"></script>
    <title>Eliminar</title>
</head>
<body>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>

<?php

include 'conexion.php';


$ID_user = $_POST['ID_usuario'];
$cambioNombre = $_POST['nombre'];
$cambioApellido = $_POST['apellido'];
$cambioDni = $_POST['dni'];
$cambioEmail = $_POST['email'];
$contraseña = $_POST['contraseña'];
$CambioTel = $_POST['telefono'];

  
 
$comprobar = "SELECT * FROM registrados WHERE ID_usuario='$ID_user' && Contraseña='$contraseña'";
$comprobando = mysqli_query($conexion,$comprobar);


       
            if(mysqli_num_rows($comprobando) == 0 ) {
                
                   
                echo 
                "<script type='text/javascript'>swal('Error','Contraseña Incorrercta','error');
                </script>";
                
                include('registrados.php');

              }
              else{
                $actualizar = "UPDATE registrados SET Nombre='$cambioNombre', Apellido='$cambioApellido', DNI='$cambioDni', Teléfono ='$CambioTel' WHERE ID_usuario='$ID_user' AND Contraseña='$contraseña'";
                $actualizarBD = mysqli_query($conexion,$actualizar);
                
                echo
               "<script type='text/javascript'>swal('Guardado','Se ingresó el dato correctamente','success');
               </script>";
               
               include('registrados.php');

                
              }

     


                

?>
