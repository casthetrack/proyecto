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
      <h3>Mensajes de contacto</h3>
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
                <tr >
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Correo electronico</th>
                <th>Mensaje</th>
                <th>borrar mensaje</th>
                </tr>                
                </thead>
                <tbody>
                <?php 
                
                $query="SELECT * FROM contacto";
                $result=mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($result)){ ?>
                <tr>
                <td><?php echo $row['ConNombre']; ?></td>
                <td><?php echo $row['ConApellidos']; ?></td>
                <td><?php echo $row['ConEmail']; ?></td>
                <td><?php echo $row['ConMensaje']; ?></td>
                              
                <td>
                    <a href="../Logica/EliminarMensaje.php?id=<?php echo $row['ConId']?>"class="btn btn-danger btn-block"> <i class="fas fa-trash-alt"></i> </a>
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