<?php include("../includes/heder.php");
include("../includes/navar_home.php");
?>
<style>
i
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
<div class="container">
<div class="row justify-content-center">
<img src="img/redes.png" width="150%" height="100%">
</div>

<br>
<br>
<div class="card col-md-12" style="left:0px;">
  <div class="card-header"> <h3>Formulario de contacto </h3>
     
  </div>

    <form action="../logica/contacto.php" method="POST">
      <div class="justify-content-center"> 
      <div class="form-row form-group justify-content-center">                
        <div class="col-md-6 ">
          <label>Nombres:</label>
            <input type="text" class="form-control" name="nombres"  placeholder="Ingrese sus nombres">
        </div>
        <div class="col-md-6 ">
          <label>Apellidos:</label>
          <input type="text" class="form-control" name="apellidos"  placeholder="Ingrese sus apellidos">
        </div>
        </div>
        <div class="col">
          <label>Correo electronico:</label>
          <input type="email" class="form-control" name="correo"  placeholder="Alguien@gmail.com">
        </div>
        <div class="col md-6">
          <label>Envianos un mensaje:</label>
          <p><textarea name="mensaje" cols="132" rows="5" placeholder="Escribe aquí"></textarea></p> 
        </div>                                
        <input type="submit" class="btn btn-success btn-block" name="contacto" value="Enviar">
    </form>
</div>

<div class="row justify-content-center">

<div class="col-lg-4 mb-4">
<div class="card h-100" >
  <div class="card-body" style="text-align:center">
    <h5 class="card-title"> Suscribete en youtube:</h5>
    <a class="youtube" href="https://www.youtube.com/channel/UC-5g_dJ52YaZ_1bBVG63wdQ" target="_blank"><i class="fab fa-youtube youtube"></i></a>
  </div>
</div>
</div>

<div class="col-lg-4 mb-4">
<div class="card">
  <div class="card-body" style="text-align:center">
    <h5 class="card-title">Siguenos en instagram</h5><br>
    <a href="https://www.instagram.com/aguapachachirimia/?fbclid=IwAR3YvY42fHRu1DYOXn3bsUNk-NQmcvlkB6EDUBjz1puzPIgD3NoDCD-WjTc" target="_blank"><i class="fab fa-instagram insta"></i></a><br>
  </div>
</div>
</div>


<div class="col-lg-4 mb-4">
<div class="card">
  <div class="card-body" style="text-align:center">
    <h5 class="card-title">Dale me gusta a nuestra página de Faceboock</h5>
    <a href="https://www.facebook.com/chirimia.aguapacha" target="_blank"><i class="fab fa-facebook"></i></a>
  </div>
</div>
</div>

</div>



<aside>


</aside>
</div>

<?php include("../includes/footer.php")?>

