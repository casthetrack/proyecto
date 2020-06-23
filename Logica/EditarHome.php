<?php 


if($_POST['actualizar'])
{

$imagen1=$_POST['imagen1'];
$link1=$_POST['link1'];
$titulo1=$_POST['titulo1'];
$cuerpo1=$_POST['cuerpo1'];
$link2=$_POST['link2'];
$titulo2=$_POST['titulo2'];
$cuerpo2=$_POST['cuerpo2'];
$link3=$_POST['link3'];
$titulo3=$_POST['titulo3'];
$cuerpo3=$_POST['cuerpo3'];

include 'conexion_db.php';

$query="UPDATE inicio SET IniCardTitulo1='$titulo1',IniCardCuerpo1='$cuerpo1',IniCardTitulo2='$titulo2',IniCardCuerpo2='$cuerpo2',IniCardTitulo3='$titulo3',IniCardCuerpo3='$cuerpo3',HomImagen1='$imagen1',HomLink2='$link1',HomLink3='$link2',HomLink4='$link3' WHERE IniHomeId=1";

$ejec=mysqli_query($conn,$query);

if($ejec){ echo "bien hecho";}

else{
echo "mal hecho";

}


}

?>