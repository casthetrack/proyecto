
<?php
    session_start();


    extract($_REQUEST);

     if(isset($_REQUEST['validar']) && !empty($_REQUEST['email']) && !empty($_REQUEST['contrasena']))
    {
        require('conexion_db.php');
        include("SED.php");

        $algo=$_REQUEST['contrasena'];
        $codificada=SED::encryption($algo);
        $_REQUEST['contrasena']=$codificada;

        echo "<br>";
        $sql = "SELECT UsuEmail,UsuClave from usuario where UsuEmail = '".$_REQUEST['email']."' and UsuClave = '".$_REQUEST['contrasena']."' ";

        $resultado = $conn->query($sql);

        

       if($resultado->num_rows != 0)
        {
            echo "El usuario existe.<br>";
            $datos = $resultado->fetch_object();
            $_SESSION['usuario'] = $datos->UsuEmail;
            echo "Bienvenido, ".$_SESSION['usuario']."<br>";
            header("location: ../vistas/inicio_sistema.php");
        }  
        else{
        
                $_SESSION['message'] = 'Usuario o contraseña incorrecto';
                $_SESSION['message_type'] = 'danger';
                
             header("Location:../vistas/login.php"); 
            
        }
    }
  

?>