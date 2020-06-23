<?php 
    include("conexion_db.php");
    if (isset($_POST['contacto'])){
        $nombres = $_POST['nombres'];
        
        $apellidos = $_POST['apellidos'];
        
        $correo = $_POST['correo'];
        
        $mensaje = $_POST['mensaje'];

        $query= "INSERT INTO contacto(ConNombre,ConApellidos,ConEmail,ConMensaje)
         VALUES ('$nombres','$apellidos','$correo','$mensaje')";
        $result = mysqli_query($conn,$query);
        if(!$result)
        {   
            die("query failed");
        }

        $_SESSION['message']='Mensaje enviado';
        $_SESSION['message_type']='success';
            header("Location:../vistas/contactenos.php");
    }

?>