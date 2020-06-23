<?php include("../includes/hederSistem.php");
    include("../includes/layout.php");

    session_start();
    $usuario= $_SESSION['usuario'];
    
if(!isset($usuario)){

header("location: login.php");
}else{   
?>
  <div class="container p-4 formulario">
  <div class="row justify-content-center">
<h1>MÚSICOS</h1>
</div>

                <?php if(isset($_SESSION['message'])) {?>

                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php session_unset();}  ?>
          
                    
                <form action="../logica/CrearMusico.php" method="POST">
                    <div class="form-row form-group justify-content-center">
                    
                        <div class="col">
                            <label>Primer nombre:</label>
                            <input type="text" class="form-control" name="primerNombre"  placeholder="Juan" required>
                        </div>
                        <div class="col">
                            <label>Segundo nombre:</label>
                            <input type="text" class="form-control" name="segundoNombre"  placeholder="Felipe" required>
                        </div>

                    </div>

                    <div class="form-row form-group justify-content-center">
                    
                        <div class="col-md-6 ">
                            <label>Primer apellido:</label>
                            <input type="text" class="form-control" name="primerApellido" placeholder="Soto" required>
                        </div>
                        <div class="col-md-6">
                            <label>Segundo apellido:</label>
                            <input type="text" class="form-control" name="segundoApellido" placeholder="Soto" required>
                        </div>

                    </div>

                    <div class="form-row form-group justify-content-center">
                    
                       
                        <div class="col">
                        <label>Tipo de Documento:</label>
                        <select name="tipoDocumento" class="form-control" required>
                        <?php
                            include '../Logica/conexion_db.php';
                             $sql="SELECT * from tipodocumento";
                            $resultado=$conn->query($sql);
                            while ($datos = $resultado->fetch_array())  
                             {
                            echo '<option value="'.$datos['TipTipoDocumentoId'].'">'.$datos['TipDescripcion'].' 
                            </option>';
                                } ?>
                        </select>
                    </div>
                        <div class="col-md-6">
                            <label>Número de documento</label>
                            <input type="number" class="form-control" name="numeroDocumento" placeholder="123******" required>
                        </div>

                    </div>
                    <div class="form-row form-group justify-content-center">
                        
                        <div class="col-md-6 ">
                            <label>Telefono:</label>
                            <input type="number" class="form-control" name="Telefono" placeholder="321*******" required>
                        </div>
                        
                        <div class="col-md-6">
                            <label>Dirección:</label>
                            <input type="text" class="form-control" name="Direccion" placeholder="carrera 55 #55-55" required>
                        </div>

                    </div>

                    <div class="form-row form-group justify-content-center">
                        
                        <div class="col-md-6 ">
                            <label>Tarifa</label>
                            <input type="number" class="form-control" name="Tarifa" placeholder="60000" required>
                        </div>                        
                        <div class="col-md-6 ">
                            <label>Estado</label>
                            <input type="number" class="form-control" name="Estado" placeholder="Habilitado-Inhabilitado" required>
                        </div>
                       
                    </div>
                    <div class="form-row form-group justify-content-center">
                    
                        <div class="col-md-6 ">
                            <label>Fecha de Nacimiento:</label>
                            <input type="date" class="form-control" name="fechaNacimiento" placeholder="1999-02-02" required>
                        </div>

                    </div>
                                 
                    <input type="submit" class="btn btn-success btn-block" name="musico" value="guardar">
                </form>
               
       </div>
           
                <?php }   include('../includes/footer.php') ?>
     