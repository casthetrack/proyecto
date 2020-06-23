<?php

include("conexion_db.php");

if (isset($_GET['id']))
{
    $id=$_GET['id'];
    $query="DELETE FROM musico WHERE MusDocumento=$id";
    $result=mysqli_query($conn,$query);
    if(!$result)
    {
        die("fallo");
    }

    $_SESSION['message']='Musico eliminado';
    $_SESSION['message_type']='danger';
    header("Location:../vistas/musicos.php");
}

?>