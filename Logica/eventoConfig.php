<?php 
    include("conexion_db.php");
    if (isset($_POST['TipoEvento'])){
        $nombre = $_POST['TituloEvento'];
        $costo = $_POST['CostoEvento'];
        
        $query= "INSERT INTO tipoevento (TpeDescripcion)
         VALUES ('$nombre')";
        $result = mysqli_query($conn,$query);
        if(!$result)
        {
            die("query failed");
        }

        $_SESSION['message']='tipo de evento guardado';
        $_SESSION['message_type']='success';
            header("Location:../vistas/ConfigDatos.php");
    }
    ?>

<?php

include("conexion_db.php");

if (isset($_GET['id']))
{
    $id=$_GET['id'];
    $query="DELETE FROM tipoevento WHERE TpeTipoEventoId=$id";
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
