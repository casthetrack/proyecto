<?php 

include('conexion_db.php');

$id=$_GET['id'];

class EditarUsuario{
/*
public function leerDatos()
{
    

    $consulta="SELECT * FROM usuario WHERE UsuUsuarioId=$id";
    $ejecutar=mysqli($conn,$consulta);
    $datos=fetch_array($ejecutar);

}




*/



public function single_record($id){
    $sql = "SELECT * FROM usuario where id='$id'";
    $res = mysqli_query($conn, $sql);
    $return = mysqli_fetch_object($res);
    return $return ;
}

public function update($email,$tipo,$estado,$musico,$clave, $id){
    $sql = "UPDATE usuario SET UsuEmail='$email', UsuTipoUsuarioId='$tipo', UsuEstado='$estado', UsuMusicoId='$musico', UsuClave='$clave' WHERE UsuUsuarioId=$id";
    $res = mysqli_query($conn, $sql);
    if($res){
        return true;
    }else{
        return false;
    }
}


}























?>