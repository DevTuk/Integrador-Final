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

      <title>Borrar</title>
  </head>
<!-- Nuestro nav-->
<body>
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
   
       <!-- Main -->
    <main id="main">
   
    <!-- Lista de Registrados -->
  
  <div class="row container borraRegistro">
  <h1 class="titulos">Querés eliminar tu registro?</h1>

          <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-2">
              <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-2"> 
    <?php 
    include 'conexion.php';  
    $id = $_GET['id'];


    $sql = "SELECT * FROM registrados WHERE ID_usuario='$id'";
    $resultado = mysqli_query($conexion, $sql);

    $fila =mysqli_fetch_array($resultado);
    ?>
          

                  <P> Hola <b><?php echo $fila['Nombre']?> <?php echo $fila['Apellido']?></b> , ingresa tu contraseña para eliminar tu registro </P></div>

                   
                  <form action="delete.php" method="POST">
                        
                                        

                        <div class="form-group col-12 col-md-12">
                              <input type="email" class="form-control" placeholder="Correo" value="<?php echo $fila['Email']; ?>" name="email" readonly required>
                        </div>
                        <div class="form-group col-12 col-md-12">
                              <input type="password" class="form-control" placeholder="password" name="contraseña" required>
                        </div>
                        <div class="col">
                              <button type="submit" id="" onclick="" name="submit" class="btn btn-codo btn-block btnenviar">Confirmo eliminar mi registro</button>
                        </div>
                    </form>
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
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
    
     
    <!--script de Filtro-Agregado-Ocampo-->
    <script src="./scripts/filtro.js"></script>

    <!--script de ventanas emergentes-Agregado-Ocampo-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
  </body>
</html>