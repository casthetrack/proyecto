<?php 
    include("conexion_db.php");
    if (isset($_POST['tipoDocumento'])){
        $nombre = $_POST['Identificacion'];
        
        $query= "INSERT INTO tipodocumento (TipDescripcion)
         VALUES ('$nombre')";
        $result = mysqli_query($conn,$query);
        if(!$result)
        {
            die("query failed");
        }

        $_SESSION['message']='cliente guardado';
        $_SESSION['message_type']='success';
            header("Location:../vistas/ConfigDatos_1.php");
    }
    ?>

<?php

include("conexion_db.php");

if (isset($_GET['id']))
{
    $id=$_GET['id'];
    $query="DELETE FROM tipodocumento WHERE TipTipoDocumentoId=$id";
    $result=mysqli_query($conn,$query);
    if(!$result)
    {
        die("fallo");
    }

    $_SESSION['message']='Musico eliminado';
    $_SESSION['message_type']='danger';
    header("Location:../vistas/ConfigDatos.php");
}

?>
