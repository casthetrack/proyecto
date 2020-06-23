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
<h1>EDITAR MÚSICO</h1>
</div>
<?phpinclude("../Logica/musicocrud/edit_musico.php");?>

                <?php if(isset($_SESSION['message'])) {?>

                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php session_unset();}  ?>
          
                    
                <form action="../Logica/EditarMusico.php?id=<?= $_GET['MusDocumento'];  ?>" method="POST">
                    <div class="form-row form-group justify-content-center">
                    
                        <div class="col">
                            <label>Primer nombre:</label>
                            <input type="text" name="PrimerNombre" value="<?php echo $_GET['MusPrimerNombre']; ?>"
                        class="form-control" autofocus>
                        </div>
                        <div class="col">
                            <label>Segundo nombre:</label>
                            <input type="text" name="segundo_nombre" value="<?php echo $_GET['MusSegundoNombre']; ?>"
                        class="form-control" autofocus>
                        </div>

                    </div>

                    <div class="form-row form-group justify-content-center">
                    
                        <div class="col-md-6 ">
                            <label>Primer apellido:</label>
                            <input type="text" name="primer_apellido" value="<?php echo $_GET['MusPrimerApellido']; ?>"
                        class="form-control" autofocus>
                        </div>
                        <div class="col-md-6">
                            <label>Segundo apellido:</label>
                            <input type="text" name="segundo_apellido" value="<?php echo $_GET['MusSegundoApellido']; ?>"
                        class="form-control" autofocus>
                        </div>

                    </div>

                    <div class="form-row form-group justify-content-center">
                    

                        <div class="col">
                        <label>Tipo de Documento:</label>
                        <select name="musico" class="form-control">
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
                            <input type="number" name="documento" value="<?php echo $_GET['MusDocumento']; ?>"
                        class="form-control" autofocus>
                        </div>

                    </div>
                    <div class="form-row form-group justify-content-center">
                        
                        <div class="col-md-6 ">
                            <label>Telefono:</label>
                            <input type="number" name="telefono" value="<?php echo $_GET['MusNumeroTelefono']; ?>"
                        class="form-control" autofocus>
                        </div>
                        
                        <div class="col-md-6">
                            <label>Dirección:</label>
                            <input type="text" name="direccion" value="<?php echo $_GET['MusDireccion']; ?>"
                        class="form-control" autofocus>
                        </div>

                    </div>

                    <div class="form-row form-group justify-content-center">
                        
                        <div class="col-md-6 ">
                            <label>Tarifa</label>
                            <input type="number" name="tarifa" value="<?php echo $_GET['MusTarifaHoraExtra'];; ?>"
                        class="form-control" autofocus>
                        </div>                        
                        <div class="col-md-6 ">
                            <label>Estado</label>
                            <input type="number" name="estado" value="<?php echo $_GET['MusEstado']; ?>"
                        class="form-control" autofocus>
                        </div>
                    </div>
                    <div class="form-row form-group justify-content-center">
                    
                        <div class="col-md-6 ">
                            <label>Fecha de Nacimiento:</label>
                            <input type="date" name="fechanacimiento" value="<?php echo $_GET['MusFechaNacimiento'];?>"
                        class="form-control" autofocus>
                        </div>

                    </div>
                                 
                    <input type="submit" class="btn btn-success btn-block" name="actualizar" value="Actualizar">
                </form>
               
       </div>
           
                <?php }   include('../includes/footer.php') ?>
     