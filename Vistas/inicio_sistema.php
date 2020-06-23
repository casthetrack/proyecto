<?php
include("../includes/heder.php");
include("../includes/layout.php");

session_start();
$usuario= $_SESSION['usuario'];

if(!isset($usuario)){

header("location: login.php");
}else{
?>
<br>
<br><br>
 <div class="container">
    <div style="text-align:center;float:center;margin:30px;">
        <p ><img src="img/letras2.png" width="55%" height="30%"></p>
        <p><h1 style="color:white"> BIENVENIDO
        <?php
            echo "$usuario" ;
        ?>
         </h1></p><br>
          
            <br>

            <a href="cliente"></a>
    </div>
</div>
<?php

}
?>
<?php include("../includes/footer.php")?>