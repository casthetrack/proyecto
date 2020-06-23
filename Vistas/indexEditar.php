<?php include("../includes/heder.php");
include("../includes/adminHome.php");


session_start();
$usuario= $_SESSION['usuario'];

if(!isset($usuario)){

header("location: login.php");
}else{

  include("../Logica/conexion_db.php");
  $consulta="SELECT * FROM inicio";
  $query=mysqli_query($conn,$consulta);
  $datos=mysqli_fetch_array($query);


?>


<br>
<br>

    <div class="container formulario">
        <form action="../Logica/EditarHome.php" method="POST"  enctype="multipart/form-data">
        
                <div style="text-align:center;float:center;margin:30px;">
                    <p ><img src="img/letras2.png" width="25%" height="10%"></p>
                    <p><img src="<?= $datos['HomImagen1'];?>" width="50%" height="70%"></p>
                    
                    <label>Ingrese el link de la imagen:</label> <br>
  <input type="text" class="form-grup" cols="53" rows="10" name="imagen1" value="<?= $datos['HomImagen1'];?>" >

                </div>


    </div>




    <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><iframe width="348" height="225" src="<?= $datos['HomLink2'];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
          <input type="text" placeholder="Ingre un link de video" name="link1" value="<?= $datos['HomLink2'];?>" >
          <div class="card-body">
            <h4 class="card-title">
              <input name="titulo1" type="text" value="<?= $datos['IniCardTitulo1']?>">
            </h4>
            <p class="card-text">
            <textarea name="cuerpo1" id="" cols="53" rows="10">
            <?= $datos['IniCardCuerpo1']?>
           </textarea></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><iframe width="348" height="225" src="<?= $datos['HomLink3'];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
            <input type="text" placeholder="Ingre un link de video" name="link2" value="<?= $datos['HomLink3'];?>" >
          <div class="card-body">
            <h4 class="card-title">
              
              <input type="text" class="form-group" name="titulo2" value="<?= $datos['IniCardTitulo2']?>">
            </h4>
            <p class="card-text">
               <textarea name="cuerpo2" id="" cols="53" rows="10"><?= $datos['IniCardCuerpo2']?></textarea> 
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><iframe width="300" height="225" src="<?= $datos['HomLink4'];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
            <input type="text" placeholder="Ingre un link de video" name="link3" value="<?= $datos['HomLink4'];?>">
          <div class="card-body">
            <h4 class="card-title">
              <input type="text" value="<?= $datos['IniCardTitulo3']?>" name="titulo3"> 
            </h4>
            <p class="card-text">
            <textarea name="cuerpo3" id="" cols="53" rows="10">
            <?= $datos['IniCardCuerpo3']?>
                 </textarea>
            </p>
          </div>
        </div><br><br><br>
      </div><input type="submit" name="actualizar" value="Actualizar" class="btn btn-success btn-block">
    
    </div>
    
    
    </form>
          <?php } include("../includes/footer.php")?>

