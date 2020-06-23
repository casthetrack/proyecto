<?php include("coneccion_db.php")
if(isse($_GET['id_doc']))
{

    $id=$_POST['id_doc'];
    $query="SELECT * FROM tipo_documento WHERE id_tipo_documento=$id";
    $result=mysqli_query($connet,$query);
    if(mysqli_num_rows($result) != 0)
    {
        $row = mysqli_fetch_array($result);
        $descripcion=$row['descripcion'];

    }

}
if(isset($_POST['actualizar']))
{
    $id = $_GET['id'];
    $descripcion = $_POST['descripcion'];
    $query = "UPDATE tipo_documento set descripcion = '$descripcion' WHERE id = $id";
    
    mysqli_query($connect, $query);

    $_SESSION['message'] = 'tipo documento actualizado correctamente';
    $_SESSION['message_type'] = 'success';

    header("location: index.php"); 
    include("includes/heder.php")
}
?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit_dates.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form group">
                    <h5>Primer nombre</h5>
                        <input type="text" name="descripcion" value="<?php echo $nombre; ?>"
                        class="form-control" placeholder="Actualizar nombres" autofocus>
                    </div> 
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