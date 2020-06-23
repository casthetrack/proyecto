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
        	<a href="#documento" class="nav-link active" role="tab" data-toggle="tab">Identificación</a>
        </li>

        <li class="nav-item">
        	<a href="#Eventos" class="nav-link" role="tab" data-toggle="tab">Eventos</a>
        </li>

        <li class="nav-item">
        	<a href="#musico" class="nav-link" role="tab" data-toggle="tab">musicos</a>
        </li>
    </ul>

        <div class="tab-content">
        	<div role="tabpanel" class="tab-pane fade in active" id="documento">
                
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tipo de documento</th>
                            <th>Eliminar</th>
                        </tr>                
                    </thead>
                    <tbody>
                    <?php include('../Logica/conexion_db.php');
              
                    $query="SELECT * FROM tipodocumento";
                    $result=mysqli_query($conn,$query);
                    while($row=mysqli_fetch_array($result)){ ?>
                    <tr>
                        <td><?php echo $row['TipDescripcion']; ?></td>
                        <td>
                        <div >
                            <a href=".?ided=<?php echo $row['TipTipoDocumentoId']?>"class="btn btn-primary"> <i class="fas fa-marker"></i> </a>
                            <a href="../Logica/tipoDocumento.php?id=<?php echo $row['TipTipoDocumentoId']?>"class="btn btn-danger"> <i class="fas fa-trash-alt"></i> </a>
                        </div>
                        </td>
                    </tr> 

                    <?php } ?>
                    </tbody>
                </table>

                <form action="../logica/tipoDocumento.php" method="POST">
                    <div class="form-row form-group justify-content-center">
                        <div class="col">
                            <label>Nuevo tipo de identificación:</label>
                            <input type="text" class="form-control" name="Identificacion">
                        </div>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="tipoDocumento" value="guardar">
                </form>
            </div>



        	<div role="tabpanel" class="tab-pane fade" id="Eventos">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tipo de evento</th>
                            <th>Costo</th>
                            <th>Opciones</th>

                        </tr>                
                    </thead>
                    <tbody>
                        <?php include('../Logica/conexion_db.php');
              
                        $query="SELECT * FROM tipoevento";
                        $result=mysqli_query($conn,$query);
                        while($row=mysqli_fetch_array($result)){ ?>
                        <tr>
                            <td><?php echo $row['TpeDescripcion']; ?></td>
                            <td><?php echo $row['TpeCostoId']; ?></td>
                            <td>
                                <div >
                                    <a href=".?ided=<?php echo $row['TpeTipoEventoId']?>"class="btn btn-primary"> <i class="fas fa-marker"></i> </a>
                                    <a href="../Logica/eventosConfig.php?id=<?php echo $row['TpeTipoEventoId']?>"class="btn btn-danger"> <i class="fas fa-trash-alt"></i> </a>
                                </div>
                            </td>
                        </tr>            
                        <?php } ?>
                    </tbody>
                </table>

                <form action="" method="POST">
                    <div class="form-row form-group justify-content-center">
                        <div class="col-md-6">
                            <label>Nuevo tipo de evento:</label>
                            <input type="text" class="form-control" name="TituloEvento">
                        </div>
                        <div class="col-md-6">
                            <label>Costo del evento:</label>
                            <input type="text" class="form-control" name="CostoEvento">
                        </div>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="TipoEvento" value="guardar">
                </form>
            </div>
        	<div role="tabpanel" class="tab-pane fade" id="musico">
            
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Instrumentos</th>
                            <th>Opciones</th>
                        </tr>                
                    </thead>
                    <tbody>
                        <?php include('../Logica/conexion_db.php');
                
                        $query="SELECT * FROM instrumentos";
                        $result=mysqli_query($conn,$query);
                        while($row=mysqli_fetch_array($result)){ ?>
                        <tr>
                            <td><?php echo $row['InsDescripcion']; ?></td>
                            <td>
                                <div >
                                    <a href=".?ided=<?php echo $row['InsInstrumentoId']?>"class="btn btn-primary"> <i class="fas fa-marker"></i> </a>
                                    <a href="../Logica/instrumentos.php?id=<?php echo $row['InsInstrumentoId']?>"class="btn btn-danger"> <i class="fas fa-trash-alt"></i> </a>
                                </div>
                            </td>
                        </tr>            
                        <?php } ?>
                    </tbody>
                </table>

                <form action="../Logica/instrumentos.php" method="POST">
                    <div class="form-row form-group justify-content-center">
                        <div class="col-md-6">
                            <label>Nuevo instrumento:</label>
                            <input type="text" class="form-control" name="instrumentonuevo">
                        </div>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="instrumento" value="guardar">
                </form>
            </div>
                
        

        </div>
    </div>
</div>

<?php
 }  include("../includes/footer.php");
?>