<?php
    require("datosConexion.php");

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Borrar</title>
</head>

<!-- ........................................................................................................  -->

<body class="bg-info">

<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$  -->
    <?php


        $resultadoGet = $_GET["id"];

        if(isset($_POST["borrar"])){
            $decision= $_POST["pregunta"];

            if($decision == "si"){
                echo "Se borra el registro seleccionado";

                $sql= "delete from productos where id='$resultadoGet'"; //Creamos la sentencia SQL

                $resultado= $conexion->query($sql); //Le pasamos al método query la setencia

                if($conexion->query($sql)==true){ //Comprobamos que la sentencia se ha ejecutado correctamente

    ?>
                    <div class="container w-75 text-center p-5">
                        <h4>Se ha borrado el registro seleccionado</h4>

                        <a href="listado.php" class="btn btn-primary mb-1 text-start p-3">Volver</a>
                    </div>
    <?php
                }else {
    ?>
                    <div class="container w-75 text-center p-5">
                        <h4>NO se ha borrado el registro seleccionado</h4>
                    </div>
    <?php   
                }//Final del if else de comprobar que se ha ingresado el borrado correctamente

            }elseif ($decision == "no") {
    ?>
                <a href="listado.php" class="btn btn-primary mb-1 text-start p-3">Volver</a>
    <?php
            } //Final del if decision si o no
            
        } //Final del if ISSET pulsar boton borrar
    ?>
    
    <div class="container 75 p-5">
        <div class="col-12 bg-info" >
            <form action="<?php $_SERVER['PHP_SELF']?>" method="post" name="borrar">

                <div class="row text-center"> <!-- 1º select-->
                    <div class="col mb-2"> 

                        <label for="pregunta" class="form-label"><h5>¿Estas seguro que quieres borrar el registro con id = <?php echo $resultadoGet; ?>?</h5></label>
                            <select class="form-control" name="pregunta"> <!-- Rellenar select -->
                                <option value="no" selected>NO</option>
                                <option value="si">SI</option>
                            </select>

                        <button type="submit" class="btn btn-danger m-3" name="borrar">BORRAR</button>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>