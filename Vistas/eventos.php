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

<div class="card col-md-10 formulario" style="left:110px;">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
      <a href="eventosIngresar.php" class="btn btn-primary my-2 my-sm-0">  Crear un nuevo evento  </a>
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
                <th>Cliente</th>
                <th>Evento</th>
                <th>Tipo evento</th>
                <th>Dirección</th>
                <th>Estado</th>
                <th>Fecha</th>
                <th>Hora inicial</th> 
                <th>Hora final</th>
                <th>Duración</th>
                <th>Opciones</th>
                </tr>                
                </thead>
                <tbody>
                <?php 
                
                $query="SELECT * FROM evento";
                $result=mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($result)){ ?>
                <tr>
                <td><?php echo $row['EvenClienteDocumento']; ?></td>
                <td><?php echo $row['EveEventoId']; ?></td>
                <td><?php echo $row['EvenTipoEventoId']; ?></td>
                <td><?php echo $row['EvenDireccion']; ?></td>
                <td><?php echo $row['EvenEstado']; ?></td>
                <td><?php echo $row['EvenFecha']; ?></td>
                <td><?php echo $row['EvenHoraInicio']; ?></td>
                <td><?php echo $row['EvenHoraFin']; ?></td>
                <td><?php echo $row['EvenDuracion']; ?></td>
                <td>
                    <a href="../edit_dates.php?id=<?php echo $row['id']?>"class="btn btn-primary"> <i class="fas fa-marker"></i> </a>
                    <a href="../delete_dates.php?id=<?php echo $row['id']?>"class="btn btn-danger"> <i class="fas fa-trash-alt"></i> </a>
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