<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicio | México Oculto </title>
    <link rel="stylesheet" href="CSS\bootstrap.min.css"><!--- Enlace de Boostrap.CSS --->
  </head>
  <!--- Empieza navbar --->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#7F2A11;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">México Oculto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" >Hogar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="Mictlán_Que_es.php">¿Que es el Mictlán?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="ComoLlegamosMiclán.php">¿Como llegamos al Mictlán?</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="Dioses_Tipos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dioses
          </a>
          <ul class="dropdown-menu" aria-labelledby="Dioses_Tipos" style="background-color:#B8401D;">
            <li><a class="dropdown-item " href="Mictlantecuhtli.php" >Mictlantecuhtli </a></li>
            <li><a class="dropdown-item " href="Mictecacíhuatl.php">Mictecacíhuatl</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <!--- Finaliza navbar --->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel"  data-bs-interval="3000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="IMG\1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="IMG\2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="IMG\3.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="IMG\4.png" class="d-block w-100" alt="...">
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
  <!--- Empieza Slider --->
  <!--- Finaliza Slider --->
  <body style="background-color:#7F2A11">
    <!--- Empieza Cards --->
    <div class="row">
      <!--- Primer Cards --->
  <div class="col-sm-6">
    <div class="card" style="background-color:#B8401D;">
      <div class="card-body">
        <h5 class="card-title text-light">¿Que es el Mictlán?</h5>
        <img src="IMG\2.png" class="card-img-top" alt="...">
        <p class="card-text text-light">Quieres Saber cual es el Mitclán el inframundo de la Cultura Mexicana </p>
        <a href="Mictlán_Que_es.php" class="btn text-light">Vamos</a>
      </div>
    </div>
  </div>
  <!--- Cuarto Cards --->
  <div class="col-sm-6">
    <div class="card" style="background-color:#B8401D;">
      <div class="card-body">
        <h5 class="card-title text-light">¿Como llegamos al Mictlán?</h5>
         <img src="IMG\3.png" class="card-img-top" alt="...">
        <p class="card-text text-light">Quieres Saber Como se llega al Mitclán Y cual es la trabesia de este...</p>
        <a href="ComoLlegamosMiclán.php" class="btn text-light">Vamos</a>
      </div>
    </div>
  </div><!--- Tercerd Cards --->
  <div class="col-sm-6">
    <div class="card" style="background-color:#B8401D;">
      <div class="card-body">
        <h5 class="card-title active text-light">Dioses del Mitclán</h5>
        <img src="IMG\4.png" class="card-img-top" alt="...">
        <p class="card-text text-light">Que Dioses de la cultura Mexicana son los guardianes del Mitclán</p>
        <a href="" class="btn  text-light">Vamos</a>
      </div>
    </div>
  </div>
</div>
    <!--- Termina Cards --->
<!--- Empieza escript ---> <script src="JS\bootstrap.min.js"></script><!--- Finaliza script --->
  </body>
  <!--- Empieza Pie de Paguina --->
  <footer  style="background-color:#B8401D;">
    <div class="text-center py-2 text-light">
    ©   Derechos reservados | México Oculto
    </div>
    <div class="text-center text-light">
      Contacto | 5532083451
    </div>
    <div class="text-center text-light">
      Email | Méxicooculto@contacto.com.mx
    </div>
  </footer>
  <!--- Finaliza el pie de Paguina --->
</html>
