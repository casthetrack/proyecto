<?php

    include("conexion_db.php");

if (isset($_GET['id']))
{
    $id = $_GET['id'];
    $query = "SELECT * FROM musico WHERE MusDocumento=$id";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) != 0){
        $row = mysqli_fetch_array($result);
        $nombre = $row['MusPrimerNombre'];
        
        $s_nombre = $row['MusSegundoNombre'];
        
        $apellido = $row['MusPrimerApellido'];
        
        $s_apellido = $row['MusSegundoApellido'];
       
        $tipodocumento = $row['MusTipoDocumentoId'];

        $documento = $row['MusDocumento'];

        $telefono = $row['MusNumeroTelefono'];
        
        $direccion = $row['MusDireccion']; 
        
        $tarifa = $row['MusTarifaHoraExtra'];

        $estado=$row['MusEstado'];
        
        $fecha_n = $row['MusFechaNacimiento'];


        header("Location:../vistas/MusicoEditarV.php?MusPrimerNombre=$nombre&MusDocumento=$documento&MusSegundoNombre=$s_nombre&MusPrimerApellido=$apellido&MusSegundoApellido=$s_apellido&MusTipoDocumentoId=$tipodocumento&MusNumeroTelefono=$telefono&MusDireccion=$direccion&MusTarifaHoraExtra=$tarifa&MusEstado=$estado&MusFechaNacimiento=$fecha_n"); 
       
    }
}

    if(isset($_POST['actualizar']))
    {
        $id=$_GET['MusDocumento'];
        $unonombre = $_POST['PrimerNombre'];
        
        $s_nombre = $_POST['segundo_nombre'];
        
        $apellido = $_POST['primer_apellido'];
        
        $s_apellido = $_POST['MusSegundoApellido'];
       
        $tipodocumento = $_POST['tipodocumento'];

        $documento = $_POST['documento'];

        $telefono = $_POST['telefono'];
        
        $direccion = $_POST['direccion']; 
        
        $tarifa = $_POST['tarifa'];

        $estado = $_POST['estado'];
        
        $fecha_n = $_POST['fechanacimiento'];


        $query = "UPDATE musico SET MusPrimerNombre = '$unonombre', MusSegundoNombre = '$s_nombre', MusPrimerApellido = '$apellido',
        MusSegundoapellido = '$s_apellido', MusTipoDocumentoId ='$tipodocumento', MusDocumento = '$documento', MusNumeroTelefono = '$telefono', MusDireccion = '$direccion', 
        MusTarifaHoraExtra = '$tarifa',MusEstado ='$estado', MusFechaNacimiento = '$fecha_n' WHERE MusDocumento= '$id'";
        
        mysqli_query($connect, $query);
        
        $_SESSION['message'] = 'Musico actualizado correctamente';
        $_SESSION['message_type'] = 'success';

    }
?>
