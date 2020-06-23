<?php 
require 'conexion_db.php';
if(isset($_POST['actualizar']))
{
    $tituloc=$_POST['tituloc'];
    $imagen1=$_POST['imagen1'];
    $imagen2=$_POST['imagen2'];
    $imagen3=$_POST['imagen3'];
    $titulo=$_POST['titulo'];
    $titulo1=$_POST['titulo1'];
    $titulo2=$_POST['titulo2'];
    $titulo3=$_POST['titulo3'];
    $cuerpo1=$_POST['cuerpo1'];
    $cuerpo2=$_POST['cuerpo2'];
    $cuerpo3=$_POST['cuerpo3'];
    
    $sql="UPDATE nosotros SET NosCarrucel1='$imagen1',NosCarrucel2='$imagen2',NosCarrucel3='$imagen3',NosCarrucelTitulo='$tituloc',NosTitulo='$titulo',NosCardTitulo1='$titulo1',NosCardTitulo2='$titulo2',NosCardTitulo3='$titulo3',NosCardCuerpo1='$cuerpo1',NosCardCuerpo2='$cuerpo2',NosCardCuerpo3='$cuerpo3' WHERE NosId=1 ";

    $query=mysqli_query($conn,$sql);

    if($query){echo "bien hecho";}
     else{echo"mal heho";}



}


?>