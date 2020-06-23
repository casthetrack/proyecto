<?php

include("coneccion_db.php");

if (isset($_GET['id']))
{
    $id=$_GET['id'];
    $query="DELETE FROM cliente WHERE id=$id";
    $result=mysqli_query($connect,$query);
    if(!$result)
    {
        die("fallo");
    }

    $_SESSION['message']='Cliente eliminado';
    $_SESSION['message_type']='danger';
    header("Location: modulos/clientes.php");
}
if (isset($_GET['id_doc']))
{
    $id=$_GET['id_doc'];
    $query="DELETE FROM tipo_documento WHERE id_tipo_documento=$id";
    $result=mysqli_query($connect,$query);
    if(!$result)
    {
        die("fallo");
    }

    $_SESSION['message']='Cliente eliminado';
    $_SESSION['message_type']='danger';
    header("Location: tipo_documento.php");
}

?>