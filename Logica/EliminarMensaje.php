<?php

include("conexion_db.php");

if (isset($_GET['id']))
{
    $id=$_GET['id'];
    $query="DELETE FROM contacto WHERE ConId=$id";
    $result=mysqli_query($conn,$query);
    if(!$result)
    {
        die("fallo");
    }

    $_SESSION['message']='Mensaje eliminado';
    $_SESSION['message_type']='danger';
    header("Location:../vistas/mensajes.php");
}

?>