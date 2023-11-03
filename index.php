<!doctype html>
<html lang="en">

<head>
  <title>La batlla naval</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="csspropio.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Halis+Grotesque">


</head>

<body>
  <header>
    <header>
      <section>
        <header>

          <div class="container">
            <nav class="navbar navbar-expand-lg bg-body-tertiary  ">
              <div class="container-fluid">

                <div class="foto"> <img src="La batalla naval.png" alt="logo" width="260" height="210"></div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0  me-2">
                    <li class="nav-item me-4">
                      <a class="nav-link active text-white" aria-current="page" href="#info">Información sobre batallas
                      </a>
                    </li>
                  </ul>

                </div>
              </div>
            </nav>
          </div>
        </header>
      </section>
    </header>
  </header>
  <main>
    <section  id="info">
      <h1 class="d-flex justify-content-center">Consulta tus dudas sobre batallas históricas</h1>
      <div class="contenedor">
        <div class="elemento">
          <div class="elementos"><img src="barco1.jpg" alt="logo" width="310" height="300"></div>
          <button type="button" class="btn btn-warning d-block mx-auto mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal1">
            La gran batalla de Guadalcanal
          </button>

         
          <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Listar el nombre del barco, desplazamiento y cantidad de cañones,
de los barcos que participaron en la batalla de Guadalcanal.</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <ul>
                        <?php
                         require("consultas.php");
                        // Recorre los resultados y muéstralos en una lista
                        if(empty($resultados_array)){
                          echo "Lo siento esta consulta esta vacía";
                        }
                        else{
                        foreach ($resultados_array as $resultado) {
                            echo "<li> Nombre del barco:{$resultado['NOMBRE_BARCO']}, Desplazamiento: {$resultado['DESPLAZAMIENTO']}, Número de Cañones: {$resultado['NRO_CANIONES']}</li>";
                        }}
                        ?>
                    </ul>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="elemento">
        <div class="elementos"><img src="barcos2.jpg" alt="logo" width="310" height="300"></div>
          <button type="button" class="btn btn-primary btn-warning d-block mx-auto mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal2">
            Acorazados & Cruceros
          </button>

         
          <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Encontrar aquellos países que dispongan tanto de acorazados como
de cruceros.</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <?php
                         require("consultas.php");
                        // Recorre los resultados y muéstralos en una lista
                        if(empty($resultados_array1)){
                          echo "Lo siento esta consulta esta vacía";
                        }
                        else{
                        foreach ($resultados_array1 as $resultado) {
                            echo "<li> País: {$resultado['PAIS']}</li>";
                        }}
                        ?>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="elemento">
        <div class="elementos"><img src="barcos3.jpg" alt="logo" width="310" height="300"></div>
          <button type="button" class="btn btn-warning d-block mx-auto mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal3">
            La Armada Invencible
          </button>

          
          <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Encontrar aquellas batallas en las cuales un mismo país participo con
al menos tres barcos.</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <ul>
                        <?php
                         require("consultas.php");
                      
                        if(empty($resultados_array2)){
                          echo "Lo siento esta consulta esta vacía";
                        }
                        else{
                        foreach ($resultados_array2 as $resultado) {
                            echo "<li> Nombre de la batalla: {$resultado['NOMBRE_BATALLA']} <br> País: {$resultado['PAIS']}<br> Número de barcos: {$resultado['NUMERO_DE_BARCOS']}</li>";
                        }}
                        ?>
                    </ul>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="elemento">
        <div class="elementos1"><img src="barcos5.jpg" alt="logo" width="310" height="300"></div>
        <div class="custom-btn"> <button type="button" class="btn  btn-warning custom-btn" data-bs-toggle="modal" data-bs-target="#exampleModal4">
            A cañonazos
          </button></div>

         
          <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Encontrar los países cuyos barcos tengan el mayor número de
cañones.</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <ul>
                        <?php
                         require("consultas.php");
                      
                        if(empty($resultados_array3)){
                          echo "Lo siento esta consulta esta vacía";
                        }
                        else{
                        foreach ($resultados_array3 as $resultado) {
                            echo "<li> País con mayor número de cañones: {$resultado['PAIS']} </li>";
                        }}
                        ?>
                    </ul>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="elemento">
        <div class="elementos1"><img src="web-barcos-4.jpg" alt="logo" width="310" height="300"></div>
         <div class="custom-btn1"> <button type="button" class="btn  btn-warning " data-bs-toggle="modal" data-bs-target="#exampleModal5">
            KONGOOOOO
          </button></div>

        
          <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Encontrar las batallas en las cuales participaron barcos de la clase
kongo.</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <ul>
                        <?php
                         require("consultas.php");
                      
                        if(empty($resultados_array4)){
                          echo "Lo siento esta consulta esta vacía";
                        }
                        else{
                        foreach ($resultados_array4 as $resultado) {
                            echo "<li> Batallas en las que se usaron barcos Kongo: {$resultado['NOMBRE_BATALLA']} </li>";
                        }}
                        ?>
                    </ul>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Cerrar</button>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>