<?php

    include('../logica/conexion_db.php');

    if(isset($_GET['CliDocumento'])){
        $id = $_GET['CliDocumento'];
        $query = "SELECT * FROM cliente WHERE CliDocumento = $id";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
                     
            $nombre = $row['CliPrimerNombre'];
            $s_nombre = $row['CliSegundoNombre'];
            $apellido = $row['CliPrimerApellido'];
            $s_apellido = $row['CliSegundoApellido'];
            $tipo = $row['CliTipoDocumento'];
            $documento = $row['CliDocumento'];
            $direccion = $row['CliDireccion'];
            $telefono = $row['CliNumeroTelefono'];
            $fecha_n = $row['CliFechaNacimiento'];

            
        }
    }

    if(isset($_POST['actualizar'])){
           $id = $_GET['CliDocumento'];
           $nombre = $_POST['CliPrimerNombre'];
            $s_nombre = $_POST['CliSegundoNombre'];
            $apellido = $_POST['CliPrimerApellido'];
            $s_apellido = $_POST['CliSegundoApellido'];
            $tipo = $_POST['CliTipoDocumento'];
            $documento = $_POST['CliDocumento'];
            $direccion = $_POST['CliDireccion'];
            $telefono = $_POST['CliNumeroTelefono'];
            $fecha_n = $_POST['CliFechaNacimiento'];

            $query = "UPDATE cliente set CliPrimerNombre='$nombre', CliSegundoNombre='$s_nombre', CliPrimerApellido='$apellido',
            CliSegundoApellido='$s_apellido', CliTipoDocumento='$tipo', CliDocumento='$documento', CliDireccion='$direccion',
            CliNumeroTelefono='$telefono', CliFechaNacimiento='$fecha_n' WHERE CliDocumento = $id";

            mysqli_query($conn, $query);
            header ("Location: ../vistas/clientesLista.php");
            
    }
?>
<?php include("../includes/hederSistem.php");
    include("../includes/layout.php");

    session_start();
    $usuario= $_SESSION['usuario'];
    
if(!isset($usuario)){

header("location: login.php");
}else{  
?>

<div class="container p-4 ">
  <div class="row justify-content-center">
<h1>CLIENTES</h1>
</div> 
<div class="container p-4">
    <div class="row">
        <div class="card card-body">
            <form action="editarCliente.php=<?php echo $_GET['CliDocumento'];?>" method="POST">
                    <div class="form-row form-group justify-content-center">
                    
                        <div class="col">
                            <label>Primer nombre:</label>
                            <input type="text" class="form-control" name="CliPrimerNombre" 
                            value="<?php echo $nombre; ?>" placeholder="Primer nombre">
                        </div>
                        <div class="col">
                            <label>Segundo nombre:</label>
                            <input type="text" class="form-control" name="CliSegundoNombre"
                            value="<?php echo $s_nombre; ?>" placeholder="Segundo nombre">
                        </div>

                    </div>

                    <div class="form-row form-group justify-content-center">
                    
                        <div class="col-md-6 ">
                            <label>Primer apellido:</label>
                            <input type="text" class="form-control" name="CliPrimerApellido" 
                            value="<?php echo $apellido; ?>" placeholder="Primer apellido">
                        </div>
                        <div class="col-md-6">
                            <label>Segundo apellido:</label>
                            <input type="text" class="form-control" name="CliSegundoApellido" 
                            value="<?php echo $s_apellido; ?>" placeholder="Segundo apellido"> 
                        </div>

                    </div>

                    <div class="form-row form-group justify-content-center">
                    
                        <div class="col-md-6 ">
                            <label>Tipo de documento</label>
                            <input type="text" class="form-control" name="CliTipoDocumento" 
                            value="<?php echo $tipo; ?>" placeholder="Tipo de documento">
                        </div>
                        <div class="col-md-6">
                            <label>Número de documento</label>
                            <input type="number" class="form-control" name="CliDocumento" 
                            value="<?php echo $documento; ?>" placeholder="Número de documento">
                        </div>

                    </div>
                    <div class="form-row form-group justify-content-center">
                        
                        <div class="col-md-6 ">
                            <label>Teléfono:</label>
                            <input type="number" class="form-control" name="CliNumeroTelefono" 
                            value="<?php echo $telefono; ?>" placeholder="Telefono">
                        </div>
                        
                        <div class="col-md-6">
                            <label>Dirección:</label>
                            <input type="text" class="form-control" name="CliDireccion" 
                            value="<?php echo $direccion; ?>" placeholder="Dirección">
                        </div>

                    </div>

                    <div class="form-row form-group justify-content-center">
                    
                        <div class="col-md-6 ">
                            <label>Fecha de nacimiento:</label>
                            <input type="date" class="form-control" name="CliFechaNacimiento" 
                            value="<?php echo $fecha_n; ?>">
                        </div>

                    </div>
                    <Button class = "btn btn-success btn-block" name="actualizar">
                        Actualizar  
                    </Button>
            </form>
        </div>
    </div>
</div>

<?php }   include('../includes/footer.php') ?>
