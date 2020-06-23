<?php include("../includes/heder.php");
include("../includes/navar_home.php");
include("../Logica/conexion_db.php");

$sql="SELECT * FROM inicio";

$query=mysqli_query($conn,$sql);

$datos=mysqli_fetch_array($query);





?>
<br>
<br>

    <div class="container">


                <div style="text-align:center;float:center;margin:30px;">
                    <p ><img src="img/letras2.png" width="25%" height="10%"></p>
                    <p><img src="img/aguapachalogo1.png" width="50%" height="70%"></p>
                </div>


    </div>





    <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><iframe width="348" height="225" src="<?= $datos['HomLink2']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
          <div class="card-body">
            <h4 class="card-title">
              <p>¡<?= $datos['IniCardTitulo1']?>!<p>
            </h4>
            <p class="card-text">
            <?= $datos['IniCardCuerpo1']?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><iframe width="348" height="225" src="<?= $datos['HomLink3']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
          <div class="card-body">
            <h4 class="card-title">
              <p ><?= $datos['IniCardTitulo2']?></p>
            </h4>
            <p class="card-text">
            <?= $datos['IniCardCuerpo2']?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><iframe width="300" height="225" src="<?= $datos['HomLink4']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
          <div class="card-body">
            <h4 class="card-title">
              <p><?= $datos['IniCardTitulo3']?></p>
            </h4>
            <p class="card-text">
            <?= $datos['IniCardCuerpo3']?>
            </p>
          </div>
        </div>
      </div>

    </div>
<?php include("../includes/footer.php")?>

