<?php 
    include("conexion_db.php");
    if (isset($_POST['musico'])){
        $nombre = $_POST['primerNombre'];
        
        $s_nombre = $_POST['segundoNombre'];
        
        $apellido = $_POST['primerApellido'];
        
        $s_apellido = $_POST['segundoApellido'];
       
        $tipodocumento = $_POST['tipoDocumento'];

        $documento = $_POST['numeroDocumento'];

        $telefono = $_POST['Telefono'];
        
        $direccion = $_POST['Direccion']; 
        
        $tarifa = $_POST['Tarifa'];

        $estado=$_POST['Estado'];
        
        $fecha_n = $_POST['fechaNacimiento'];

        $query= "INSERT INTO musico(MusPrimerNombre,MusSegundoNombre,MusPrimerApellido,MusSegundoapellido,MusTipoDocumentoId,MusDocumento,MusNumeroTelefono,MusDireccion,MusTarifaHoraExtra,MusEstado,MusFechaNacimiento)
         VALUES ('$nombre','$s_nombre','$apellido','$s_apellido','$tipodocumento','$documento','$telefono','$direccion','$tarifa','$estado','$fecha_n')";
        $result = mysqli_query($conn,$query);
        if(!$result)
        {
            die("query failed");
        }

        $_SESSION['message']='cliente guardado';
        $_SESSION['message_type']='success';
            header("Location:../vistas/musicos.php");
    }

    if(isset($_POST['guardar_tipo']))
    {
        $tipo_documento=$_POST['tipo_documento'];
        
        $query="INSERT INTO tipo_documento(descripcion) VALUES ('$tipo_documento')";
        $result = mysqli_query($conn,$query);
        if(!$result){die("query fallido");}



        $_SESSION['message']='tipo documento guardado';
        $_SESSION['message_type']='success';
            header("Location:../../vistas/musicos.php");

    }



?>