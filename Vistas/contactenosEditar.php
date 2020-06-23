<?php include("../includes/hederSistem.php");
include("../includes/adminHome.php");
session_start();
$usuario= $_SESSION['usuario'];

if(!isset($usuario)){

header("location: login.php");
}else{
?>
<style>

.face
{
color:blue;
font-size:70;
margin:20;
}
.youtube
{
color:red;
}

.insta
{
color:violet;
}

</style>
<div class="container formulario">
<div class="row justify-content-center">
<img src="img/redes.png" width="150%" height="100%">
<div class="custom-file">
                <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
            </div>
</div>

<br>
<br>
<div class="row justify-content-center">

<div class="col-lg-4 mb-4">
<div class="card h-100" >
  <div class="card-body" style="text-align:center">
    <h5 class="card-title"> Suscribete en youtube:</h5>
    Ingres link de youtube  <input type="text">
    <a class="youtube" href="https://www.youtube.com/channel/UC-5g_dJ52YaZ_1bBVG63wdQ" target="_blank"><i class="fab fa-youtube youtube"></i></a>
  </div>
</div>
</div>

<div class="col-lg-4 mb-4">
<div class="card">
  <div class="card-body" style="text-align:center">
    <h5 class="card-title">Siguenos en instagram</h5><br>
    Ingres link de instagaram  <input type="text">
    <a href="https://www.instagram.com/aguapachachirimia/?fbclid=IwAR3YvY42fHRu1DYOXn3bsUNk-NQmcvlkB6EDUBjz1puzPIgD3NoDCD-WjTc" target="_blank"><i class="fab fa-instagram insta"></i></a><br>
  </div>
</div>
</div>


<div class="col-lg-4 mb-4">
<div class="card">
  <div class="card-body" style="text-align:center">
    <h5 class="card-title">Dale me gusta a nuestra página de Faceboock</h5>
    Ingres link de faceboock  <input type="text">
    <a href="https://www.facebook.com/chirimia.aguapacha" target="_blank"><i class="fab fa-facebook face"></i></a>
  </div>
</div>
</div>

</div>



<aside>


</aside>
</div>

<?php } include("../includes/footer.php")?>

