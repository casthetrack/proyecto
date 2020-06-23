<?php 
include('../logica/conexion_db.php');

if(isset($_POST['enviar'])){
$primerNombre = $_POST['primerNombre'];
$segundoNombre = $_POST['segundoNombre'];
$primerApellido = $_POST['primerApellido'];
$segundoApellido = $_POST['segundoApellido'];
$tipoDocumento = $_POST['tipoDocumento'];
$numeroDocumento = $_POST['numeroDocumento'];
$telefono = $_POST['Telefono'];
$direccion = $_POST['Direccion'];
$fechaNacimiento = $_POST['fechaNacimiento'];

$query = "INSERT INTO cliente(CliPrimerNombre, CliSegundoNombre, CliPrimerApellido, CliSegundoApellido, CliTipoDocumento, 
CliDocumento, CliNumeroTelefono, CliDireccion, CliFechaNacimiento) VALUES ('$primerNombre','$segundoNombre','$primerApellido', 
'$segundoApellido','$tipoDocumento', '$numeroDocumento','$telefono', '$direccion', '$fechaNacimiento')";
$result = mysqli_query($conn, $query);
if(!$result){
    die("Query Failed");
}
header ("Location: ../vistas/clientesLista.php");
}



?> 