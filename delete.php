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


//fin validar 

$correo = $_POST['email'];
$password = $_POST['contraseña'];
//sacamos espacios

$correo=preg_replace('/\s\s+/', ' ', $correo);
$password=preg_replace('/\s\s+/', ' ', $password);

//consultamos datos especificos para eliminar+

 
$comprobar = "SELECT * FROM registrados WHERE Email='$correo' && Contraseña='$password'";
$comprobando = mysqli_query($conexion,$comprobar);


        if (mysqli_num_rows($comprobando) == 0 ){        

            echo 
            "<script type='text/javascript'>swal('Error','Contraseña incorrecta','error');
            </script>";
            include('registrados.php');

        }else 
        {
                    
            $datoAeliminar = mysqli_query($conexion,"DELETE FROM registrados WHERE Email='$correo' && Contraseña='$password'");
            $delete = mysqli_query($conexion, $datoAeliminar);
            
            echo 
            "<script type='text/javascript'>swal('Guardado','Se elimino correctamente','success');
            </script>";

            include('registrados.php');    

        }
 

       
?>


           
