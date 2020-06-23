<?php include("../includes/hederSistem.php");
    include("../includes/layout.php");

    session_start();
    $usuario= $_SESSION['usuario'];
    
if(!isset($usuario)){

header("location: login.php");
}else{

    
?>


  <div class="container formulario ">
  <div class="row justify-content-center">
<h1>CLIENTES</h1>
</div>



  
       

                <?php if(isset($_SESSION['message'])) {?>

                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php session_unset();}  ?>
          
                    
                <form action="../Logica/crearCliente.php" method="POST">
                    <div class="form-row form-group justify-content-center">
                    
                        <div class="col">
                            <label>Primer nombre:</label>
                            <input type="text" class="form-control" name="primerNombre" placeholder="Juanito" required>
                        </div>
                        <div class="col">
                            <label>Segundo nombre:</label>
                            <input type="text" class="form-control" name="segundoNombre" placeholder="Andres" >
                        </div>

                    </div>

                    <div class="form-row form-group justify-content-center">
                    
                        <div class="col-md-6 ">
                            <label>Primer apellido:</label>
                            <input type="text" class="form-control" name="primerApellido" placeholder="Garcia" required>
                        </div>
                        <div class="col-md-6">
                            <label>Segundo apellido:</label>
                            <input type="text" class="form-control" name="segundoApellido" placeholder="Marquez" required> 
                        </div>

                    </div>

                    <div class="form-row form-group justify-content-center">
                        <div class="col-md-6">
                            <label>Número de documento</label>
                            <input type="number" class="form-control" name="numeroDocumento" placeholder="123******" required>
                        </div>   
                        <div class="col-md-6">
                            <label>Tipo documento</label>
                            <input type="number" class="form-control" name="tipoDocumento" placeholder="1 or 2" required>
                        </div>                                          
                    </div>
                    <div class="form-row form-group justify-content-center">
                        
                        <div class="col-md-6 ">
                            <label>Teléfono:</label>
                            <input type="number" class="form-control" name="Telefono" placeholder="3013*****" required>
                        </div>
                        
                        <div class="col-md-6">
                            <label>Dirección:</label>
                            <input type="text" class="form-control" name="Direccion" placeholder="carrera 49B #95-105 Aranjuez" required>
                        </div>

                    </div>

                    <div class="form-row form-group justify-content-center">
                    
                        <div class="col-md-6 ">
                            <label>Fecha de nacimiento:</label>
                            <input type="date" class="form-control" name="fechaNacimiento" placeholder="2000-01-01" required>
                        </div>

                    </div>
                   

                    <input type="submit" class="btn btn-success btn-block" name="enviar" value="guardar">
                </form>
               
       </div>
           
                <?php }   include('../includes/footer.php') ?>
     