<?php include("../includes/hederSistem.php");
    include("../includes/layout.php");
    

    session_start();
    $usuario= $_SESSION['usuario'];
    
if(!isset($usuario)){

header("location: login.php");
}else{

  
     if(isset($_SESSION['message'])) {?>

        <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['actualizar']?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php } unset($_SESSION['message']); 
    
    if (isset($_GET['id']))
    {
      require "../Logica/conexion_db.php";
      require "../Logica/SED.php";
        $id = $_GET['id'];
        $query = "SELECT * from usuario INNER JOIN musico on MusDocumento=UsuMusicoId INNER JOIN tipousuario on TpuTipoUsuarioId=UsuTipoUsuarioId  WHERE UsuUsuarioId=$id";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) != 0){
            $row = mysqli_fetch_array($result);
            $email = $row['UsuEmail'];
            $clave = $row['UsuClave'];
            $estado = $row['UsuEstado'];
            $musico = $row['UsuMusicoId'];
            $datosMusico=$row['MusPrimerNombre']." ".$row['MusPrimerApellido'];
            $tipo = $row['UsuTipoUsuarioId'];
            $tipodesc=$row['TpuDescripcion'];
            $documento=$row['MusDocumento'];


           
           
            
        }
    }
    
    
    
    
    
    
    
    
    if(isset($_POST['actualizar']))
    {
      require "../Logica/conexion_db.php";
      include "../Logica/SED.php";
            $id = $_GET['id'];
            $email = $_POST['email'];
            $clave = $_POST['clave'];
            $tipo = $_POST['tipo'];
            $musico = $_POST['musico'];

            $encriptado=SED::encryption($clave);
            $clave=$encriptado;
           
           
    
        $sql = "UPDATE usuario set UsuEmail = '$email',UsuClave='$clave',UsuTipoUsuarioId='$tipo',UsuMusicoId='$musico' WHERE UsuEmail = $email";
    
    
    
    
        
        $resultado=$conn->query($sql);
        if(!$resultado){
            $_SESSION['actualizar'] = 'usuario no actualizado ';
            $_SESSION['message_type'] = 'danger';
            header("location: usuarioEditar.php?id=$id"); 
    
            }
            else{
        
    
        $_SESSION['message'] = 'usuario actualizado correctamente';
        $_SESSION['message_type'] = 'success';
    
        header("location: usuarios.php"); }
    }

    
    
    
    
    
    



?>

    <div class="container formulario">
                
                <div class="row justify-content-center">

                    <h1>Editar Usuario</h1>

                </div>                
                


        <form action="../Logica/EditarUsu.php?id=<?= $_GET['id'] ?>" method="POST">
                    <div class="form-row form-group justify-content-center">    
                        
                    
                        <div class="col">
                            <label>Correo:</label>
                            <input type="email" class="form-control" name="email" value="<?php echo $email?>">
                        </div>
                        <div class="col">
                            <label>Contraseña:</label>
                            <input type="password" class="form-control" name="clave"  value="<?php echo $clave?>">
                        </div>

                    </div>
                    <div class="form-row form-group justify-content-center">
                    
                       
                    <div class="col">
                    <label>musico:</label>
                    <select name="musico" class="form-control">
                    <?php
                    
                    echo '<option value="'.$musico.'">'.$datosMusico.' </option>';
                        include '../Logica/conexion_db.php';
                        
                         $sql="SELECT * from musico";
                        $resultado=$conn->query($sql);
                        while ($datos = $resultado->fetch_array())  
                         {
                             if($musico==$datos['MusDocumento']){}
                             else{
                        echo '<option value="'.$datos['MusDocumento'].'">'.$datos['MusPrimerNombre']." ".$datos['MusPrimerApellido'].' 
                        </option>';}
                            } ?>
                    </select>
                </div>
                
                <div class="col">
                    <label>Tipo Usuario:</label>
                    <select name="tipo" class="form-control">
                    <?php
                    
                            
                    echo '<option value="'.$tipo.'">'.$tipodesc.' </option>';
                        include '../Logica/conexion_db.php';
                        
                         $sql="SELECT * from tipousuario";
                        $consulta=$conn->query($sql);
                        while ($tpu = $consulta->fetch_array())  
                         {
                             if($tpu['TpuTipoUsuarioId']==$tipo){}
                             else{
                        echo '<option value="'.$tpu['TpuTipoUsuarioId'].'">'.$tpu['TpuDescripcion'].' 
                        </option>';
                                }
                            } ?>
                    </select>
                </div>
                </div>


                                 
                    <input type="submit" class="btn btn-success btn-block" name="actualizar" value="actualizar">
                </form>
        
        
        
        </div>
    
    
    





<?php }   include('../includes/footer.php') ?>
     