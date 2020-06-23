<?php include("../includes/hederSistem.php");
      include("../includes/layout.php");
      require '../logica/conexion_db.php';
     session_start();
      $usuario= $_SESSION['usuario'];

      if(!isset($usuario)){
      
      header("location: login.php");
      }else{
      ?>

<div class="col-md-10 formulario" style="left:10px">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 formulario">
    <br/>
        	
    <ul class="nav nav-tabs">
        <li class="nav-item">
        	<a href="#documento" class="nav-link active" role="tab" data-toggle="tab">Información del evento</a>
        </li>

        <li class="nav-item">
        	<a href="#Eventos" class="nav-link" role="tab" data-toggle="tab">Músicos asociados al evento</a>
        </li>
    </ul>

        <div class="tab-content">
        	<div role="tabpanel" class="tab-pane fade in active" id="documento">
                <br>
                <br>
                <?php if(isset($_SESSION['message'])) {?>
                    <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert"> <?= $_SESSION['message']?> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php session_unset();}  ?>

                    <form action="../save_dates.php" method="POST">
                        <div class="form-row form-group justify-content-center">
                            <div class="col">
                                <label>Cliente:</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Juan Arturo</option>
                                    <option value="">Carlos Caro</option>
                                </select>
                            </div>
                    
                            <div class="col">
                                <label>Nombre evento:</label>
                                <input type="text" class="form-control" name="nombreEvento" placeholder="Cumpleaños">
                            </div>
                        </div>

                        <div class="form-row form-group justify-content-center">
                            <div class="col">
                                <label>Tipo evento:</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Perreo</option>
                                    <option value="">Cumpleaños</option>
                                </select>
                            </div>

                            <div class="col-md-6 ">
                                <label>Dirección:</label>
                                <input type="text" class="form-control" name="Direccion" placeholder="carrera 49B #95-105 Aranjuez">
                            </div>                      
                        </div>

                        <div class="form-row form-group justify-content-center">
                            <div class="col-md-6">
                                <label>Estado:</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Cumplido</option>
                                    <option value="">Pendiente</option>
                                </select>
                            </div>
                            <div class="col-md-6 ">
                                <label>Fecha:</label>
                                <input type="date" class="form-control" name="Fecha" placeholder="2020-01-01">
                            </div>                       
                        </div>

                        <div class="form-row form-group justify-content-center">
                            <div class="col-md-6">
                                <label>Hora inicio:</label>
                                <input type="time" class="form-control" name="horaInicio" placeholder="1Pm">
                            </div>
                            <div class="col-md-6 ">
                                <label>Hora fin:</label>
                                <input type="time" class="form-control" name="horaFin" placeholder="2Pm">
                            </div>                
                        </div>     
                    </form>
            </div>
       


        	<div role="tabpanel" class="tab-pane fade" id="Eventos">
                <br>
                <br>
                <div class="container">
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
                                    <a href="../logica?id=<?php echo $row['MusDocumento']?>"class="btn btn-primary"> Ingresar</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                    
                    <h3>Musicos asociados al evento</h3>

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
                                    <a href="../logica?id=<?php echo $row['MusDocumento']?>"class="btn btn-danger"><i class="far fa-times-circle"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    <input type="submit" class="btn btn-success btn-block" name="evento" value="Crear nuevo evento">
                </div>
            </div>   	
    </div>
</div>

<?php
 }  include("../includes/footer.php");
?>