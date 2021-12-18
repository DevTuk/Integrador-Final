<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <script src="https://kit.fontawesome.com/b6176c21f5.js" crossorigin="anonymous"></script>
    
    <title> Registrados </title>
  </head>

  <body>
          <header >
            
          <div id="barra" class="container-fluid p-0">
  
                <nav class="navbar navbar-expand-lg">
                  <div class="container-fluid d-flex flex-nowrap justify-content-between">
                    <div class="container d-flex w-25 p-0 m-0">
                      <a class="navbar-brand" href="#">
                          <div class="container d-flex">
                            <img id="codo" src="./images/codoacodo.png" alt="codo">
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
          <main id="main" class="container-fluid">
        <div class="d-flex flex-column justify-content">
          <!-- Lista de Registrados -->
          
          
          <h1 class="m-1 text-center p-3">Usuarios registrados</h1>
          <div class="container">
                <div class="row">
                  <div class="col-12 col-md-12 col-sm-12">
                  
                    <div class="table-responsive table-responsive-sm" >
                          <table class="table">

                                  <thead>
                                    <tr>
                                      <th scope="col">ID</th>
                                      <th scope="col">Nombre</th>
                                      <th scope="col">Apellido</th>
                                      <th scope="col">Correo</th>
                                      <th scope="col">Editar/Borrar</th>
                                    </tr>
                                  </thead>
                        
                                
                                        <tbody>
                                        
                                        <?php 
                                          include 'conexion.php';
                                        
                                          $consultas = mysqli_query($conexion, "SELECT * FROM registrados" );

                                          while( $tabla = mysqli_fetch_array($consultas)){ ?>
                                          <tr>
                                          <th scope="row"><?php echo $tabla['ID_usuario']; ?></th>
                                          <td><?php echo $tabla['Nombre']; ?></td>
                                          <td><?php echo $tabla['Apellido']; ?></td>
                                          <td><?php echo $tabla['Email']; ?></td>
                                          <td><a class="btn btn-success"  href="update.php?id=<?php echo $tabla['ID_usuario'];?>">

                                          <i class="far fa-edit"></i></a>
                                          <a class="btn btn-danger" name="eliminar" href="borrar.php?id=<?php echo $tabla['ID_usuario'];?>">
                                          <i class="far fa-trash-alt"></i></a></td>
                                          
                                          </tr>
                                          <?php } ?>
                                    
                                      
                                          </tbody>
                                  
                          </table>

                        </div>                 
                  </div>
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
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
            </script>
            <script src="scripts/script.js">
            </script>
          <!-- /Footer -->

          <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
          <!--<script src="index.js"></script>-->
          <!-- Optional JavaScript; choose one of the two! -->

          <!-- Option 1: Bootstrap Bundle with Popper -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

          <!-- Option 2: Separate Popper and Bootstrap JS -->
          <!--
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
          -->
          <script src="script.js"></script>
  </body>
  
</html>
