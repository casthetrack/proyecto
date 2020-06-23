<?php include("../includes/heder.php");
include("../includes/adminHome.php");
session_start();
$usuario= $_SESSION['usuario'];

if(!isset($usuario)){

header("location: login.php");
}else{

  include '../Logica/conexion_db.php';

  $query=mysqli_query($conn,"SELECT * FROM nosotros");

  $datos=mysqli_fetch_array($query);


?>

<header>

  </header>

<br>
<br>
<div class="container formulario">
<form action="../Logica/EditarSomos.php" method="POST">

<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">

       <div class="card-footer" style="background:#666665A6;color:white;text-align:center;">
        <h1><input type="text" value="<?= $datos['NosCarrucelTitulo'] ?>" name="tituloc"> </h1>

         
            
        </div>
        <br><br><br>
    </ol>

    <div class="carousel-inner">
      <div class="carousel-item active">
             <div >
        
                <label>Ingrese la ruta de la imagen</label>
                <input type="text" class="form-control" style="text-align:center;"  value="<?= $datos['NosCarrucel1'] ?>" name="imagen1">
                
            </div>
        <img src="<?= $datos['NosCarrucel1'] ?>" class="d-block w-100 rounded-lg" alt="..." >
        
        <div class="carousel-caption d-none d-md-block">
      </div>
      </div>

      <div class="carousel-item">
      <div >
        
        <label>Ingrese la ruta de la imagen</label>
            <input type="text" class="form-control" style="text-align:center;" value="<?= $datos['NosCarrucel2'] ?>" name="imagen2">
            </div>
        <img src="<?= $datos['NosCarrucel2'] ?>" class="d-block w-100" alt="...">
        


        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>

      <div class="carousel-item">
      <div >
        
        <label>Ingrese la ruta de la imagen</label>
            <input style="text-align:center;" type="text" class="form-control" value="<?= $datos['NosCarrucel3'] ?>"  name="imagen3">
            </div>
        <img src="<?= $datos['NosCarrucel3'] ?>"class="d-block w-100" alt="...">
        
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

    <h1 class="my-4" style="color:white;text-align:center" ><input  name="titulo" type="text" value="<?= $datos['NosTitulo'] ?>" cols="45"> </h1>

    <!-- Marketing Icons Section -->
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header"><input  name="titulo1" type="text" value="<?= $datos['NosCardTitulo1'] ?>" id=""> </h4>
          <div class="card-body">
            <p class="card-text">
            <textarea id="" cols="35" rows="20"  name="cuerpo1">
            <?= $datos['NosCardCuerpo1'] ?>
            
            </textarea></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header"><input type="text" value="<?= $datos['NosCardTitulo2'] ?>"  name="titulo2"></h4>
          <div class="card-body">
            <p class="card-text">
            <textarea id="" cols="35" rows="20"  name="cuerpo2">
            <?= $datos['NosCardCuerpo2'] ?>
            </textarea></p>
          </div>

        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header"><input type="text" value="<?= $datos['NosCardTitulo3'] ?>"  name="titulo3"> </h4>
          <div class="card-body">
            <p class="card-text">
            <textarea id="" cols="35" rows="20"  name="cuerpo3">
            <?= $datos['NosCardCuerpo3'] ?>
            </textarea></p>
          </div>

        </div>
      </div>
    </div>
    <input type="submit" class="btn btn-success btn-block" value="Actualizar" name="actualizar">
   
    </div>
     </form>
<?php } include("../includes/footer.php")?>