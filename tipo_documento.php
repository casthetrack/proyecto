<?php include("coneccion_db.php")?>

<?php include("includes/heder.php")?>

<h1>Tipo documento</h1>

    <div class="container p-4"></div>

    <div class="row">
       <div class="col-md-4">

            <?php if(isset($_SESSION['message'])) {?>

                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php session_unset();}  ?>
            <div class="card card-body">
                <form action="save_dates.php" method="POST">
                    
                    <div class="form-group">
                    <h5>Tipo documento</h5>
                        <input name="tipo_documento"  class="form-control" placeholder="descripcion"></textarea>
                    </div> 
                    <input type="submit" class="btn btn-success btn-block" name="guardar_tipo" value="guardar">
                </form>
            </div>

       </div>
       <div class="col-md-8">
       <table class="table table-bordered">
                <thead>
                <tr>
                <th>Descripcion</th>
                <th>Acciones</th>
                </tr>                 
                </thead>
                <tbody>
                <?php 
                
                $query="SELECT * FROM tipo_documento";
                $result=mysqli_query($connect,$query);
                while($row=mysqli_fetch_array($result)){ ?>
                <tr>
                
                <td><?php echo $row['descripcion']; ?></td>
                <td>
                    <a href="edit_type_doc.php?id_doc=<?php echo $row['id_tipo_documento']?>"class="btn btn-primary"> <i class="fas fa-marker"></i> </a>
                    <a href="delete_dates.php?id_doc=<?php echo $row['id_tipo_documento']?>"class="btn btn-danger"> <i class="fas fa-trash-alt"></i> </a>
                </td>
                </tr>


                
                
                <?php } ?>



                </tbody>
                
                </table>

       </div>
    </div>
   

<?php include("includes/footer.php")?>