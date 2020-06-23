<?php

   include('../logica/conexion_db.php');

   if (isset($_GET['CliDocumento'])){
        $CliDocumento = $_GET['CliDocumento'];
        $query = "DELETE FROM cliente WHERE CliDocumento = $CliDocumento";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Acción invalidad");
        }
        
        header ("Location: ../vistas/clientesLista.php");
   }

?>