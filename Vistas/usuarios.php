<?php include("../includes/hederSistem.php");
      include("../includes/layout.php");
      require '../logica/conexion_db.php';
     session_start();
      $usuario= $_SESSION['usuario'];

      if(!isset($usuario)){
      
      header("location: login.php");
      }else{
      ?>
<br>
<br>

<div class="container formulario">

<?php if(isset($_SESSION['message'])) {?>

<div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
    <?= $_SESSION['message']?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php } unset($_SESSION['message']); ?>

<?php if(isset($_SESSION['eliminar'])) {?>

<div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
    <?= $_SESSION['eliminar']?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php } unset($_SESSION['eliminar']);?>
</div>






<div class="card col-md-10 formulario" style="left:110px;">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
      <a href="usuariosIngresar.php" class="btn btn-primary my-2 my-sm-0">  Crear un nuevo usuario  </a>
      </li>
      <li class="nav-item">
      <form class="form-inline" >
    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
      </li>
    </ul>   
  </div>
 
  <table class="table table-sm table-bordered">
                        <thead>
                              <tr>
                                    <th>Tipo usuario</th>
                                    <th>Email</th>
                                    <th>musico</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                              </tr>                
                        </thead>
                        <tbody>
                              <?php 
                              
                              $query="SELECT * FROM usuario INNER JOIN musico on MusDocumento=UsuMusicoId";
                              $result=mysqli_query($conn,$query);
                              while($row=mysqli_fetch_array($result)){ ?>
                              <tr>
                                    <td><?php echo $row['UsuTipoUsuarioId']; ?></td>
                                    <td><?php echo $row['UsuEmail']; ?></td>
                                    <td><?php echo $row['MusPrimerNombre'].' '.$row['MusPrimerApellido']; ?></td>
                                    <td><?php echo $row['UsuEstado']; ?></td>
                                    <td>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <a href="usuarioEditar.php?id=<?php echo $row['UsuUsuarioId']?>"class="btn btn-primary"> <i class="fas fa-marker"></i> </a>
                    <a href="../Logica/EliminarUsuario.php?id=<?php echo $row['UsuUsuarioId']?>"class="btn btn-danger"> <i class="fas fa-trash-alt"></i> </a>
                </div>
                </td>
                              </tr>


                              
                              
                              <?php } ?>



                        </tbody>
                
                  </table>
  <div>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
</div>
</div>


<?php }  include("../includes/footer.php");
?>