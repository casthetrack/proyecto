<?php include("../includes/heder.php");
include("../includes/adminHome.php");
session_start();
$usuario= $_SESSION['usuario'];

if(!isset($usuario)){

header("location: login.php");
}else{


?>


<div class="container formulario">
    <div>

        <div style="text-align:center;margin: 30px;padign:30px;">


            <img src="img/carrucel2.png"  width="100%" height="60%" aling="left" margin: 30px>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
            </div>



        </div>
        <div  style="text-align:center;margin: 30px;padign:30px;background-color:white;">
            <p>
                <h1>
                <input type="text" value=" Música en vivo para todo tipo de evento">
                 
                </h1>
            </p>
            <p >
            <textarea name="" id="" cols="100" rows="10">
             Atendemos todo tipo de evento, interpretando lo mejor de nuestra música Colombiana,
              porros, gaitas, cumbias, fandangos, puyas, mapalé, entre otros.
             Seguramente será un momento inolvidable y único.
             </textarea>

            </p>


        </div>

       <div class="row">
             <div class="col-md-4">
                    <div class="card" style="width: 17rem;" >
                            <img src="img/carrucel3.jpg" class="card-img-top" alt="...">
                            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
            </div>
                            <div class="card-body">
                                <p class="card-text">
                                <textarea name="" id="" cols="25" rows="10">
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                                </textarea></p>
                            </div>
                    </div>
             </div>

             <div class="col-md-4">
                    <div class="card" style="width: 18rem;" >
                            <img src="img/privado4.jpg" class="card-img-top" alt="...">
                            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
            </div>
                            <div class="card-body">
                                <p class="card-text">
                                <textarea name="" id="" cols="25" rows="10">
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                                </textarea></p>
                            </div>
                    </div>
             </div>

             <div class="col-md-4">
                    <div class="card" style="width: 19rem;" >
                            <img src="img/privado3.jpg" class="card-img-top" alt="...">
                            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
            </div>
                            <div class="card-body">
                                <p class="card-text">
                                <textarea name="" id="" cols="25" rows="10">
                                 quick example text to build on the card title and make up the bulk of the card's content.
                                </textarea></p>
                            </div>
                    </div>
             </div>

        </div>

    </div>
</div>
<?php } include("../includes/footer.php")?>