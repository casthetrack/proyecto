<?php include("../includes/hederSistem.php");
    include("../includes/layout.php");
    include("../logica/conexion_db.php");

    session_start();
    $usuario= $_SESSION['usuario'];
    
if(!isset($usuario)){

header("location: login.php");
}else{

    
?>


  <div class="container formulario">
  <div class="row justify-content-center">
<h1>EVENTOS</h1>
</div>



  
       

                <?php if(isset($_SESSION['message'])) {?>

                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php session_unset();}  ?>
          
                    
                <form action="../Logica/save_dates.php" method="POST">
                    <div class="form-row form-group justify-content-center">

                         <div class="col">
                            <label>Cliente:</label>
                            <select name="" id="" class="form-control" required>
                            <option value="">Juan Arturo</option>
                            <option value="">Carlos Caro</option>
                            
                            </select>
                        </div>
                    
                        <div class="col">
                            <label>Nombre evento:</label>
                            <input type="text" class="form-control" name="nombreEvento" placeholder="Cumpleaños" required>
                        </div>

                    </div>

                    <div class="form-row form-group justify-content-center">
                    
                        <div class="col">
                            <label>Tipo evento:</label>
                            <select name="" id="" class="form-control" required>
                            <option value="">Perreo</option>
                            <option value="">Cumpleaños</option>
                            
                            </select>
                        </div>
                        <div class="col-md-6 ">
                            <label>Dirección:</label>
                            <input type="text" class="form-control" name="Direccion" placeholder="carrera 49B #95-105 Aranjuez" required>
                        </div>                      
                    </div>

                    <div class="form-row form-group justify-content-center">
                    
                        <div class="col-md-6">
                            <label>Estado:</label>
                            <select name="" id="" class="form-control" required>
                            <option value="">Cumplido</option>
                            <option value="">Pendiente</option>
                            
                            </select>
                        </div>
                        <div class="col-md-6 ">
                            <label>Fecha:</label>
                            <input type="date" class="form-control" name="Fecha" placeholder="2020-01-01" required>
                        </div>                       
                    </div>
                    <div class="form-row form-group justify-content-center">
                        
                        <div class="col-md-6">
                            <label>Hora inicio:</label>
                            <input type="time" class="form-control" name="horaInicio" placeholder="1Pm" required>
                        </div>
                        <div class="col-md-6 ">
                            <label>Hora fin:</label>
                            <input type="time" class="form-control" name="horaFin" placeholder="2Pm" required>
                        </div>                
                    </div>     

                    <div class="form-row form-group justify-content-center">
                    <div class="col-md-6">
                            <label>Duración:</label>
                            <input type="time" class="form-control" name="Duracion" required>
                        </div> 
                        <div class="col-md-6">
                           <br>
                           <input type="submit" class="btn btn-success btn-block" name="evento" value="Siguiente >">
                            
                        </div>       
                    </div>       

                    
                </form>
               
       </div>



       <!-- tabla musico-->
<div class="modal fade" id="musico">
        <div class="modal-dialog">
            <div class="modal-content">

            <div class="modal-header">
                            
                    <h2 class="modal-title">Evento</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="container">
            
                <div class="modal-body">
                <div class="row justify-content-center">
                <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
  <br>
  </div>
                <table class="table table-sm table-bordered">
                <thead>
                <tr>
                <th>N° documento</th> 
                <th>Primer nombre</th>
                <th>Primer apellido</th>
                
                <th>Tarifa</th> 
                <th>Opciones</th>
                </tr>                
                </thead>
                <tbody>
                <?php 
                
                $query="SELECT * FROM musico";
                $result=mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($result)){ ?>
                <tr>
                <td><?php echo $row['MusDocumento']; ?></td>
                <td><?php echo $row['MusPrimerNombre']; ?></td>
                
                
                <td><?php echo $row['MusPrimerApellido']; ?></td>
                
                <td><?php echo $row['MusTarifaHoraExtra']; ?></td>               
                <td>
                    <a href="eventosIngresar.php?id=<?php echo $row['MusDocumento']?>"class="btn btn-primary"> Ingresar</a>
                    
                </td>
                </tr>


                
                
                <?php } ?>



                </tbody>
                
                </table> 
                <!--tabla musicos en evento-->

                        <h3>Musicos Asociados al evento</h3>

                <table class="table table-sm table-bordered">
                <thead>
                <tr>
                <th>N° documento</th> 
                <th>Primer nombre</th>
                <th>Primer apellido</th>
                
                <th>Tarifa</th> 
                <th>Opciones</th>
                </tr>                
                </thead>
                <tbody>
                <?php 
                
                $query="SELECT * FROM musico";
                $result=mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($result)){ ?>
                <tr>
                <td><?php echo $row['MusDocumento']; ?></td>
                <td><?php echo $row['MusPrimerNombre']; ?></td>
                
                
                <td><?php echo $row['MusPrimerApellido']; ?></td>
                
                <td><?php echo $row['MusTarifaHoraExtra']; ?></td>               
                <td>
                    <a href="eventosIngresar.php?id=<?php echo $row['id']?>"class="btn btn-danger btn-block"> <i class="far fa-times-circle"></i>
</a>
                    
                </td>
                </tr>


                
                
                <?php } ?>



                </tbody>
                
                </table>


    </div>
</div>

</div></div>

                </div>
            
            </div>
    </div>

           
                <?php }   include('../includes/footer.php') ?>
     