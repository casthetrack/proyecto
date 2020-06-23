<?php
 session_start();
 include('conexion_db.php');
if(isset($_POST['actualizar']))
{
    $correo = $_POST['email'];
    
    $clave = $_POST['clave'];
    
    $tipoUsuario = $_POST['tipo_usuario'];
    
    $estado = $_POST['estado'];
   
    $musico = $_POST['musico'];

    $id=$_GET['id'];
   
    $query = "UPDATE usuario SET UsuEmail='$correo' WHERE UsuUsuarioId= '$id'";
       
        $consulta=mysqli_query($conn, $query);
    if($consulta){
       $_SESSION['message'] = 'Usuario actualizado correctamente';
    $_SESSION['message_type'] = 'success';
       
    header("Location:../vistas/usuarios.php"); 
    }
    else{ $_SESSION['message'] = 'Usuario no actualizado '.$id;
        $_SESSION['message_type'] = 'danger';
    
     header("Location:../vistas/usuarioEditar.php"); 


}

}
?>
