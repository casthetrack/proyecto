<?php

include("../includes/heder.php");
include("../includes/navar_home.php");
include("../logica/sesion_usuario.php");
/*$usersession= new UserSession();
$usuario=new Usuario();*/
session_start();
if(isset($_SESSION['message'])) {?>

  <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
      <?= $_SESSION['message']?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <?php } unset($_SESSION['message']);


?>
<br>
<br>
<br>


    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
    <div class="form-row justify-content-center">
    <img src="img/logo.png" width="10%"  height="10%">
    </div>
    <br>
    <div class="container">
      <div class="form-row justify-content-center">

        <form action="../logica/loguear.php" method="POST">
        <div class="card col-md" style="width: 25rem;">
            <div class="form-group">
            <br>
            <h3 class="card-title">inicio de sesión</h3>
            <div>
            <label>correo electronico</label>
            <input class="form-control" name="email" type="text" placeholder="alguien@mail.com" required>
            </div>
            <br>
            <div>
            <label>contraseña</label>
            <input class="form-control" name="contrasena" type="password" placeholder="ingrese su contraseña" required>
            </div>
            <a href="recuperar_contrasena.php">¿Olvidó su contraseña?</a>
            <br>
            
            <br>
            <input class="btn btn-primary btn-block" type="submit" name="validar" value="Iniciar sesión">
            </div>
        </form>
      </div>
    </div>
    </div>
    <?php include("../includes/footer.php")?>