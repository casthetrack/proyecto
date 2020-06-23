<?php

    include("coneccion_db.php");

if (isset($_GET['id']))
{
    $id = $_GET['id'];
    $query = "SELECT * FROM cliente WHERE id=$id";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) != 0){
        $row = mysqli_fetch_array($result);
        $nombre = $row['primer_nombre'];
        $s_nombre = $row['segundo_nombre'];
        $apellido = $row['primer_apellido'];
        $s_apellido = $row['segundo_apellido'];
        $tipo = $row['tipo_documento'];
        $documento = $row['documento'];
        $direccion = $row['direccion'];
        $telefono = $row['telefono'];
        $fecha_n = $row['fecha_nacimiento'];
        
        
    }
}

    if(isset($_POST['actualizar']))
    {
        $id = $_GET['id'];
        $nombre = $_POST['primer_nombre'];
        $s_nombre = $_POST['segundo_nombre'];
        $apellido = $_POST['primer_apellido'];
        $s_apellido = $_POST['segundo_apellido'];
        $tipo = $_POST['tipo_documento'];
        $documento = $_POST['documento'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $fecha_n = $_POST['fecha_nacimiento'];

        $query = "UPDATE cliente set primer_nombre = '$nombre', segundo_nombre = '$s_nombre', primer_apellido = '$apellido',
        segundo_apellido = '$s_apellido', tipo_documento = '$tipo', documento = '$documento', direccion = '$direccion', 
        telefono = '$telefono', fecha_nacimiento = '$fecha_n' WHERE id = $id";
        
        mysqli_query($connect, $query);

        $_SESSION['message'] = 'Cliente actualizado correctamente';
        $_SESSION['message_type'] = 'success';

        header("location: modulos/clientes.php"); 
    }

?>
<?php include("includes/heder.php")?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="editarPaciente.php?idPaciente=<?php echo $_GET['idPaciente']; ?>" method="POST">
                    <div class="form group">
                    <h5>Primer nombre</h5>
                        <input type="text" name="primer_nombre" value="<?php echo $nombre; ?>"
                        class="form-control" placeholder="Actualizar nombres" autofocus>
                    </div>
                    <div class="form-group">
                    <h5>Segundo nombre</h5>
                        <input type="text" name="segundo_nombre" value="<?php echo $s_nombre; ?>"
                        class="form-control" placeholder="Actualizar nombres" autofocus>   
                    </div>
                    <div class="form-group">
                    <h5>Primer apellido</h5>
                        <input type="text" name="primer_apellido" value="<?php echo $apellido; ?>"
                        class="form-control" placeholder="Actualizar apellidos" autofocus>   
                    </div>
                    <div class="form-group">
                    <h5>Segundo apellido</h5>
                        <input type="text" name="segundo_apellido" value="<?php echo $s_apellido; ?>"
                        class="form-control" placeholder="Actualizar apellidos" autofocus>   
                    </div>
                    <div class="form-group">
                    <h5>Tipo documento</h5>
                        <input type="number" name="tipo_documento" value="<?php echo $tipo; ?>"
                        class="form-control" placeholder="Actualizar tipo documento" autofocus>   
                    </div>
                    <div class="form-group">
                    <h5>Numero documento</h5>
                        <input type="number" name="documento" value="<?php echo $tipo; ?>"
                        class="form-control" placeholder="Actualizar Numero documento" autofocus>   
                    </div>
                    <div class="form-group">
                    <h5>Direccion</h5>
                        <input type="text" name="direccion" value="<?php echo $direccion; ?>"
                        class="form-control" placeholder="Actualizar Direccion" autofocus>   
                    </div>
                    <div class="form-group">
                    <h5>Telefono</h5>
                        <input type="text" name="telefono" value="<?php echo $telefono; ?>"
                        class="form-control" placeholder="Actualizar telefono" autofocus>   
                    </div>
                    <div class="form-group">
                    <h5>Fecha nacimiento</h5>
                        <input type="date" name="fecha_nacimiento" value="<?php echo $fecha_n; ?>"
                        class="form-control" placeholder="Actualizar fecha nacimiento" autofocus>   
                    </div>
                    <Button class = "btn btn-success btn-block" name="actualizar">
                        Actualizar  
                    </Button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php")?>