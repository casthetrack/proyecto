<?php

include("../includes/heder.php");
include("../includes/navar_home.php");
include("../logica/sesion_usuario.php");
/*$usersession= new UserSession();
$usuario=new Usuario();*/
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

        <form action="../logica/recuperar.php" method="POST">
        <div class="card col-md" style="width: 25rem;">
            <div class="form-group">
            <br>
            <h3 class="card-title">recuperar contraseña</h3>
            <div>
            <label>correo electronico</label>
            <input class="form-control" name="email" type="text" placeholder="alguien@mail.com">
            </div>
            <br>
            <br>
            <input class="btn btn-primary btn-block" type="submit" name="validar" value="Recuperar contraseña">
            </div>
        </form>
      </div>
    </div>
    </div>
    <?php include("../includes/footer.php")?>