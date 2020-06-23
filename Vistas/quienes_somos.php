<?php include("../includes/heder.php");
include("../includes/navar_home.php");

include("../Logica/conexion_db.php");

$sql="SELECT * FROM nosotros";

$query=mysqli_query($conn,$sql);

$datos=mysqli_fetch_array($query);
?>
<header>

  </header>

<br>
<br>
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">

       <div class="card-footer" style="background:#666665A6;color:white;text-align:center;">
        <h1><?= $datos['NosCarrucelTitulo']; ?></h1>

            <p></p>
        </div>
    </ol>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?= $datos['NosCarrucel1']; ?>" class="d-block w-100 rounded-lg" alt="..." >
        <div class="carousel-caption d-none d-md-block">
      </div>
      </div>

      <div class="carousel-item">
        <img src="<?= $datos['NosCarrucel2']; ?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>

      <div class="carousel-item">
        <img src="<?= $datos['NosCarrucel3']; ?>"class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
  <!-- Page Content -->
  <div class="container">

    <h1 class="my-4" style="color:white;text-align:center" ><?= $datos['NosTitulo']; ?></h1>

    <!-- Marketing Icons Section -->
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header"><?= $datos['NosCardTitulo1']; ?></h4>
          <div class="card-body">
            <p class="card-text"><?= $datos['NosCardCuerpo1']; ?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header"><?= $datos['NosCardTitulo2']; ?></h4>
          <div class="card-body">
            <p class="card-text"><?= $datos['NosCardCuerpo2']; ?></p>
          </div>

        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header"><?= $datos['NosCardTitulo3']; ?></h4>
          <div class="card-body">
            <p class="card-text"><?= $datos['NosCardCuerpo3']; ?></p>
          </div>

        </div>
      </div>
    </div>
    <?php include("../includes/footer.php")?>