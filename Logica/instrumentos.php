<?php 
    include("conexion_db.php");
    if (isset($_POST['instrumento'])){
        $nombre = $_POST['instrumentonuevo'];
        
        $query= "INSERT INTO instrumentos (InsDescripcion)
         VALUES ('$nombre')";
        $result = mysqli_query($conn,$query);
        if(!$result)
        {
            die("query failed");
        }

        $_SESSION['message']='cliente guardado';
        $_SESSION['message_type']='success';
            header("Location:../vistas/ConfigDatos.php");
    }
    ?>

<?php

include("conexion_db.php");

if (isset($_GET['id']))
{
    $id=$_GET['id'];
    $query="DELETE FROM instrumentos WHERE InsInstrumentoId=$id";
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
