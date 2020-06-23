<?php 
    include("coneccion_db.php");
    if (isset($_POST['cliente'])){
        $nombre = $_POST['name'];
        
        $s_nombre = $_POST['two_name'];
        
        $apellido = $_POST['last_name'];
        
        $s_apellido = $_POST['two_last_name'];
       
        $documento = $_POST['doct'];
        
        $direccion = $_POST['direction'];
        
        $telefono = $_POST['phone'];
        
        $fecha_n = $_POST['born'];
        $tipo=$_POST['tipo'];
        


        $query= "INSERT INTO cliente(primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,tipo_documento,documento,direccion,telefono,fecha_nacimiento)
         VALUES ('$nombre','$s_nombre','$apellido','$s_apellido','$tipo','$documento','$direccion','$telefono','$fecha_n')";
        $result = mysqli_query($connect,$query);
        if(!$result)
        {
            die("query failed");
        }

        $_SESSION['message']='cliente guardado';
        $_SESSION['message_type']='success';
            header("Location: modulos/clientes.php");
    }

    if(isset($_POST['guardar_tipo']))
    {
        $tipo_documento=$_POST['tipo_documento'];
        
        $query="INSERT INTO tipo_documento(descripcion) VALUES ('$tipo_documento')";
        $result = mysqli_query($connect,$query);
        if(!$result){die("query fallido");}



        $_SESSION['message']='tipo documento guardado';
        $_SESSION['message_type']='success';
            header("Location: tipo_documento.php");

    }



?>