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
<h1>USUARIOS</h1>
</div>

<?php if(isset($_SESSION['correo'])) {?>

                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['correo']?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php } unset($_SESSION['correo']);  ?>

                <?php if(isset($_SESSION['musico'])) {?>

<div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
    <?= $_SESSION['musico']?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php } unset($_SESSION['musico']); ?>
          
                    
                <form action="../Logica/usuarioRegistrar.php" method="POST">
                    <div class="form-row form-group justify-content-center">
                    
                        <div class="col">
                            <label>Email:</label>
                            <input type="email" class="form-control" name="email" placeholder="example@****" required>
                        </div>
                        <div class="col">
                            <label>Clave:</label>
                            <input type="password" class="form-control" name="clave"  placeholder="" required>
                        </div>
                    </div>
                    <div class="form-row form-group justify-content-center">
                    <div class="col">
                        <label>Musico:</label>
                        <select name="musico" class="form-control" required>
                        <?php
                            include '../Logica/conexion_db.php';
                             $sql="SELECT * from musico";
                            $resultado=$conn->query($sql);
                            while ($datos = $resultado->fetch_array())  
                             {
                            echo '<option value="'.$datos['MusDocumento'].'">'.$datos['MusPrimerNombre'].' 
                            '.$datos['MusPrimerApellido'].'</option>';
                                } ?>
                        </select>
                    </div>
                    <div class="col">
                        <label>Tipo de usuario:</label>
                        <select name="tipo_usuario" class="form-control" required>
                        <?php
                           
                             $sql="SELECT * from tipousuario";
                            $resultado=$conn->query($sql);
                            while ($datos = $resultado->fetch_array())  
                             {
                            echo '<option value="'.$datos['TpuTipoUsuarioId'].'">'.$datos['TpuDescripcion'].'</option>';
                                } ?>
                        </select>
                    </div>
                </div>


                    <input type="submit" class="btn btn-success btn-block" name="usuario" value="guardar">
                </form>
               
       </div>
           
                <?php }   include('../includes/footer.php') ?>
     