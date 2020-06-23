

<?php include("../includes/hederSistem.php");
      include("../includes/layout.php");
      require '../logica/conexion_db.php';
     session_start();
      $usuario= $_SESSION['usuario'];
      
      if(!isset($usuario)){
      
      header("location: login.php");
      }else{
      ?>
<br>
<br>


<div class="row">
<div class="card col-md-4 formulario" style="left:140px;">
  <div class="card-header">

  <?php
        
        include("../logica/conexion_db.php");
        $consulta="SELECT * FROM usuario INNER JOIN musico on MusDocumento=UsuMusicoId WHERE UsuEmail='$usuario'";
        $resultado=mysqli_query($conn,$consulta);
        $rowu=mysqli_fetch_array($resultado); ?>
  <h3><?php  echo $rowu['UsuEmail'];?></h3>

  </div>

  <div style="text-align:center;float:center;margin:30px;">
  <p><img src="img/perfil.png" width="50%" height="90%"></p>
  </div>



  <a href=""class="btn btn-primary">Cambiar foto de perfil</a>
  <br>
  <a href="#clave"class="btn btn-primary">Cambiar ontraseña</a>
  <br>











  <div class="modal fade" id="clave">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title">Cambiar contraseña</h2>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="container">
            <div class="modal-body">
              <div class="row justify-content-center">

                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>














  </div>








<div class="card col-md-5 formulario" style="left:200px;">
  <div class="card-header">



<h3>Datos</h3>


    
  </div>

       
  <?php
        
        include("../logica/conexion_db.php");
        $consulta="SELECT * FROM musico WHERE MusDocumento=".$rowu['UsuMusicoId'];
        $resultado=mysqli_query($conn,$consulta);
        $row=mysqli_fetch_array($resultado); 
 

        $consulta="SELECT * FROM tipodocumento WHERE TipTipoDocumentoId=".$row['MusTipoDocumentoId'];
        $resultado=mysqli_query($conn,$consulta);
        $rowp=mysqli_fetch_array($resultado); ?>
<br>

                <h5>Nombre: <?php echo $row['MusPrimerNombre']; ?></h5>
                <h5>Segundo nombre: <?php echo $row['MusSegundoNombre']; ?></h5>
                <h5>Apellido: <?php echo $row['MusPrimerApellido']; ?></h5>
                <h5>Segundo apellido: <?php echo $row['MusSegundoApellido']; ?></h5>
                <h5>Tipo de documento: <?php echo $rowp['TipDescripcion']; ?></h5>
                <h5>Numero de documento: <?php echo $row['MusDocumento']; ?></h5>
                <h5>Dirección: <?php echo $row['MusDireccion']; ?></h5>
                <h5>Fecha de nacimiento: <?php echo $row['MusFechaNacimiento']; ?></h5>
                <h5>Estado: <?php if($row['MusEstado']){echo"Habilitado";}else{echo"Inhabilitado";} ?></h5>
                <h5>Tarifa por hora extra: <?php echo $row['MusTarifaHoraExtra']; ?></h5>


</div>

</div>








   












<?php }  include("../includes/footer.php");
?>