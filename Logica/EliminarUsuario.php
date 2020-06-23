<?php

include("conexion_db.php");
session_start();

if (isset($_GET['id']))
{
    $id=$_GET['id'];
    $query="DELETE FROM usuario WHERE UsuUsuarioId=$id";
    $result=mysqli_query($conn,$query);
    if(!$result)
    {
        die("fallo");
    }

    $_SESSION['eliminar']='usuario eliminado';
    $_SESSION['message_type']='danger';
    header("Location:../vistas/usuarios.php");
}

?>