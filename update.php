<?php 
          include 'conexion.php';

          $id = $_GET['id'];


          $sql = "SELECT * FROM registrados WHERE ID_usuario='$id'";
          $resultado = mysqli_query($conexion, $sql);
 
          $fila =mysqli_fetch_array($resultado);
         
            
 ?>
          


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/style.css">  

    <title> Actualizar Datos</title>

  </head>

<body>
    <!-- Header -->
    <header>
      
      <div id="barra" class="container-fluid p-0">
  
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex flex-nowrap justify-content-between">
          <div class="container d-flex w-25 p-0 m-0">
            <a class="navbar-brand" href="#">
                <div class="container d-flex">
                  <img id="codo" src="images/codoacodo.png" alt="codo">
                  <p class="text-light m-0">Conf Bs As</p>
                </div>
            </a>
          </div>
          <div class=" pull-right m-0">
          <button class="navbar-toggler navbar-light bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div  class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav d-flex justify-content-end w-100">
              <li class="nav-item">
                <a id="conferencia" class="nav-link active" aria-current="page" href="index.html">La conferencia</a>
              </li>
              
              <li class="nav-item">
                <a id="registrate" class="nav-link" href="registro.html">Registrate</a>
              </li>
              <li class="nav-item">
                <a id="registrate" class="nav-link" href="registrados.php">Conoce los registrados</a>
              </li>
              
              
              <li class="nav-item">
                <a id="comprar" class="nav-link" href="comprar.html">Comprar tickets</a>
              </li>
            </ul>
          </div>
        </div>
        </div>
      </nav>
  
    </div>
    </header>
   <!-- Nuestro nav-->
   
    <!-- Main -->
    <main id="main">
     
     

    <!-- Formulario de Registro -->
    
      <div class="container">
       

        <div class="row">
          <div class="col text-uppercase text-center formregistro">
            
            <h2>Actualizar Datos</h2>
          </div>
        </div>
        <div class="row">
          
        </div>
        <div class="row">
          <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-2">
  
            <form id="formulario" action="actualizar.php" method="POST">
  
                    <div class="form-row">
                        
                          <input type="hidden" class="form-control" maxlength="25" value="<?php echo $fila['ID_usuario']?>" name="ID_usuario">
                          
                          <div class="form-group col-12 col-md-6">
                            <input id="nombre" type="text" class="form-control" maxlength="25"  placeholder="Nombre" value="<?php echo $fila['Nombre']?>" name="nombre" onblur="return validarNombre(this.value)" required>
                          </div>

                          <div class="form-group col-12 col-md-6">
                            <input id="apellido" type="text" class="form-control" maxlength="25" placeholder="Apellido" value="<?php echo $fila['Apellido']?>" name="apellido"onblur="return validarApellido(this.value)" required>
                          </div>

                          <div class="form-group col-12 col-md-6">
                            <input id="dni" type="text" class="form-control" maxlength="12" placeholder="DNI" value="<?php echo $fila['DNI']?>" name="dni" onblur="return validarDni(this.value)" required>
                          </div>

                          <div class="form-group col-12 col-md-6">
                            <input id="telefono" type="tel" class="form-control" maxlength="15" placeholder="Teléfono" value="<?php echo $fila['Teléfono']?>" name="telefono" onblur="return validarTelefono(this.value)" required>
                          </div>

                          <div class="form-group col-12 col-md-12">
                            <input  id="email" type="email" class="form-control" maxlength="25" placeholder="Correo" value="<?php echo $fila['Email']?>" name="email"onblur="return validarEmail(this.value)"readonly>
                          </div>

                          <div class="form-group col-12 col-md-12">
                            <input id="contraseña" type="password" class="form-control" maxlength="25" placeholder="Contraseña" name="contraseña" onblur="return validarPassword(this.value)" required>
                          </div>
                          <div class="form-group col-12 col-md-6">
                        
                          </div>
                    </div>              

                    <div class="form-row">
                        <div class="col">
                          <button type="reset" class="btn btn-codo btn-block btnenviar">Limpiar</button>
                          </div>
                          <div class="col">
                          <button type="submit" id="" onclick="" class="btn btn-codo btn-block btnenviar">Modificar</button>
                        </div>
                    </div>
            </form>

            
            
          </div>
        </div>
      </div>
    
    </main>

    <!-- Footer -->
    <footer class="container-fluid p-0">
      <div class="d-flex flex-wrap justify-content-xs-between justify-content-md-around m-2 p-5" id="footer">
          <div> <a href="#" target="blank">Preguntas Frecuentes</a></div>
          <div> <a href="#" target="blank">Contáctanos</a></div>
          <div> <a href="#" target="blank">Prensa</a> </div>
          <div> <a href="#" target="blank">Conferencia</a> </div>
          <div> <a href="#" target="blank">Términos y condiciones</a> </div>
          <div> <a href="#" target="blank">Privacidad</a> </div>
          <div> <a href="#" target="blank">Estudiantes</a> </div>
      </div>
    </footer>

        <!-- /Footer -->

   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="index.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
     <!--script de Filtro-Agregado-Ocampo-->

     <script src="scripts/filtro.js"></script>

<!--script de ventanas emergentes-Agregado-Ocampo-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </body>
</html>
