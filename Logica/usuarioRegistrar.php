<?php
    
    extract($_REQUEST);
    if(isset($_REQUEST['usuario'])&&$_REQUEST['email']&&$_REQUEST['clave']&&$_REQUEST['musico']&&$_REQUEST['tipo_usuario'])
    {
       // $password=$_REQUEST['clave'];
        //$encriptado=SED::encryption($password);
        // Se valida la conexión con la base de datos
        require "../Logica/conexion_db.php";
         session_start();
         include("SED.php");
         $algo=$_REQUEST['clave'];
                $codificada=SED::encryption($algo);


                $_REQUEST['clave']=$codificada;

        $query="SELECT * FROM usuario";
        $result=mysqli_query($conn,$query);
        $row=mysqli_fetch_array($result);
        

               

        
         if( $row['UsuEmail']==$_REQUEST['email'] || $row['UsuMusicoId']==$_REQUEST['musico'] ){

                 if($row['UsuEmail']==$_REQUEST['email']) 
                 { 
                    $_SESSION['correo']='El correo de este usuario ya ha sido registrado';
                    $_SESSION['message_type']='danger';}
               
           
       
                if( $row['UsuMusicoId']==$_REQUEST['musico'])
               { $_SESSION['musico']='El musico ya tiene un usuario asignado';
                $_SESSION['message_type']='danger';}


                header('Location:../vistas/usuariosIngresar.php');


        }
        
        
        else{
               


        $sql = "INSERT into usuario (UsuEmail,UsuClave,UsuMusicoId,UsuTipoUsuarioId,UsuEstado) 
        values ('$_REQUEST[email]','$_REQUEST[clave]','$_REQUEST[musico]','$_REQUEST[tipo_usuario]',1)";

        // Realizamos la consulta
       
        if($conn->query($sql))
        {
            
                  $_SESSION['message']='Usuario registrado con exito';
                  $_SESSION['message_type']='success';
                  header('Location:../vistas/usuarios.php');
        }
        else{
            $_SESSION['message']='usuario no  Registrado';
            $_SESSION['message_type']='danger';
            header('Location:../vistas/usuariosIngresar.php');
         
          
        }

    }
    }
    else{
        $_SESSION['message']='usuario no  Registrado';
            $_SESSION['message_type']='danger';
            header('Location:../vistas/usuariosIngresar.php');
     
      
    }
    
    //termina insertar

    //eliminar

    
    if (isset($_GET['id']))
  {
    require "conexion_db.php";
    
    $id=$_GET['id'];
    $sql="DELETE from usuario where UsuUsuarioId=$id";
    $resultado=$objConexion->query($sql);
    if(!$resultado)
    {
        $_SESSION['message']='usuario no eliminado';
    $_SESSION['message_type']='danger';
    header('Location:../vistas/usuarios.php');
    }
    $_SESSION['message']='usuario eliminado';
    $_SESSION['message_type']='danger';
    header('Location:../vistas/usuarios.php');

  }

  
?>