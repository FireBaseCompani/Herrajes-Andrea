<?PHP
require 'conn.php';
$sentencia=$bd->query(" SELECT * FROM producto");
$prueba=$sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<!doctype html>
<html lang="es">
  <head>
    <!--Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link href="css/css.css" rel="stylesheet">
      <link rel="stylesheet" href="fontawesome/css/all.css">
      <link rel="stylesheet" type="text/css" href="css/informacionnn.css">
      <link rel="stylesheet" type="text/css" href="css/css3.css">
      <link rel="stylesheet" type="text/css" href="css/paginado.css">
      <link rel="icon" type="image/png" href="imagenes\iconoPrin.png">
      <script src="js/jquery.min.js"></script>

      <title>Herrajes Andreas</title>
  </head>

  <body>
  
     <nav class="navbar navbar-expand-lg navbar-light bg-light ">
          <div class="container-fluid">
              <nav class="navbar navbar-light ">
                  <div class="container-fluid">
                  <a class="navbar-brand" href="Navegacion.php">
                    <img src="imagenes/LogoEmpresa.png" alt="" width="250" height="50" class="d-inline-block align-text-top">     
                  </a>
                </div>
              </nav>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-6 mb-lg-0">
                   <li class="nav-item">
                    <a class="nav-link active" aria-current="page" class="text-primary" href="Navegacion.php">Inicio</a>
                   </li>
                   <li class="nav-item">
                    <a class="nav-link active" class="link-primary" aria-current="page" href="#">Misiòn</a>
                   </li>
                   <li class="nav-item">
                    <a class="nav-link active" aria-current="page" class="link-primary" href="#">Vision</a>
                   </li>
                   <li class="nav-item">
                    <a class="nav-link active" aria-current="page" class="link-primary" href="#">Contacto</a>
                   </li>
                </ul>
              </div>
          </div>
      </nav>

   <nav class="navbar navbar-expand-lg navbar-light " >
  <!--Required meta tags  <div class="container-fluid">
             <span class="navbar-text">
                  <div class="container-fluid">
                       <select class="form-select" id="select_cat" aria-label="Default select example">
                           <option value="">Selecciona una Categoria</option>
                           <?php 
                            require 'conexion.php';
                            $consulta="select * from categoria";
                            $ejecutar=mysqli_query($mysqli,$consulta) or die(mysqli_error($mysqli))
                              ?>
                            <?php foreach ($ejecutar as $opciones):?>
                            <option value="<?php echo $opciones['nombre']?>"><?php echo $opciones['nombre']?></option>
                            <?php endforeach ?>
                      </select>
                  </div>
             </span>
       </div>-->
      

       <form action="buscar.php" method="post" class="col-md-4 col-lg-4 col-11 mx-auto my-auto search-box">   
            <div class="input-group form-container">
               <div id='loader' style='display: none;'>
                 <img src="imagenes/loader.gif" width="100">
               </div>
               <input type="text" name="search" class="form-control search_input" id="buscador" required="" autofocus="autofocus" placeholder="Encuentra argollas, hebillas,etc.,..">
               <span class="input-group-btn">
                  <button class="btn btn-search"  type="submit" name="submit" id='but_searcch' value='Search'>
                    <img src="img/lup.jpg" width="40">
                  </button>
               </span> 
            </div>
       </form>
    </nav>
    
     
    <!-- menu -->
     <div class='response'></div>
    <br>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="imagenes/sla.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imagenes/img.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imagenes/img2.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imagenes/img3.png" class="d-block w-100" alt="...">
              </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
</div>

    <!-- fin menu -->

    <!-- contenido imagenes --><br>
    <div class="container">      
       <div class="shadow-none p-3 mb-5 bg-light rounded">
       <section id="MensageBienvenidos">
          <h2>Herrajes Andrea te ofrece productos de calidad</h2>
          <p>Ven y conoce lo mejor de herrajes andrea</p>
       </section>

    </div>
    </div>
   
           <section class="gallery">
                       <div class="container"> 
                               <div class="row">
                                  <?PHP
                                      foreach($prueba as $dato){
                                   ?>
                                       <section id="item" class="col-md-3 text-center">
                                           <section id="blogss">
                                                <div class="contenedors">
                                                 <div class="containerTarg">
                                                    <div class="target">   
                                                    </div>
                                                    <div class="image">
                                                      <img src="upload_images/<?php echo $dato->image ?>" class="img-fluid" >
                                                    </div>
                                                    <div class="contents">
                                                       <h6><?php echo $dato->Nombre; ?></h6>    
                                                    </div>
                                                      <div class="contentss">
                                                        <a href="detalle.php?Id_Prod=<?php echo $dato->Id_Prod; ?>">
                                                        <button >Ver Detalles</button>
                                                        </a> 
                                                      </div>
                                                       <div class="empty">
                                                    </div>
                                                 </div>
                                               </div>
                                            </section>  
                                       </section> 
                                      <?php
                                      }
                                      ?>
                               </div>  
                             <div class="pagination">                      
                              <div class="prev"><< Anterior</div>
                              <div class="page">Pàgina <span class="page-num"></span></div>
                              <div class="next">Siguiente >></div>
                            </div>
                  </div>
           </section>
    <br><br><br><br>


<footer class="bg-secondary text-black pt-5 pb-4">
 
  <div class="container text-center text-md-left">

    <div class="row text-center text-md-left">

      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold text-dark">Empresa</h6>
          <p>
        <a  class="text-white" style="text-decoration: none;"> Herrajes Andrea</a>
      </p>
        
      </div>

      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold text-dark">Informaciòn</h6>
      <p>
        <a href="SobreNosotros.php" class="text-white" style="text-decoration: none;"> Sobre nosotros</a>
      </p>
      <p>
        <a href="maps.php" class="text-white" style="text-decoration: none;"> Sucursales</a>
      </p>
      </div>

      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold text-dark" >Atenciòn a clientes</h6>
        <p>
           <a class="navbar-brand" href="#">
          <img src="img/what.png" alt="" width="17" height="17" class="d-inline-block align-text-top">
      <font size=2 class="d-inline-block align-text-top" color="white">55-18-18-90-61</font>
         
         </a>
        </p>
         <p>
           <a class="navbar-brand" href="#">
          <img src="img/tel.png" alt="" width="17" height="17" class="d-inline-block align-text-top">
      <font size=2 class="d-inline-block align-text-top" color="white">55-18-18-90-61</font>
         
         </a>
        </p>
      </div>
      
    </div>

    <hr class="mb-4">

    <div class="row align-items-center">

      <div class="col-md-7 col-lg-8">
        <p> Copyright ©2021 Todos los derechos reservados por:
          <a  style="text-decoration: none;">
            <strong class="text-dark">HERRAJES ANDREA</strong>
          </a></p>
        
      </div>

      <div class="col-md-5 col-lg-4">
        <div class="text-center text-md-right">

          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
            </li>
          </ul>
          
        </div>
        
      </div>
      
    </div>

  </div>
  
</footer>
        <script src="js/scriptGaleria.js"></script>

             <script type="text/javascript">
    
        $ (document).ready(function(){

          $("#but_searcch").click(function(){
          var search = $('#buscador').val();
          
          $.ajax({
            url: 'buscar.php',
            type:'post',
            data: {search:search},
            beforeSend: function(){
               $("#loader").show(); 
            },
            success: function(response){
              $('.response').empty();
              $('.response').append(response);
            },
            complete:function(data){
              $("#loader").hide();
            }
           });
          });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->    
  </body>
</html>


