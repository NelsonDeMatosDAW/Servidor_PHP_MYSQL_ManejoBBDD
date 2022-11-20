<?php
    require("datosConexion.php"); //Requerimos el archivo donde se guardan las variables de conexión

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Listado</title>
</head>
<body class="bg-info">

<div class="h1 text-center p-5">
    <h1>Gestión de productos</h1>
</div>
    


<div class="container w-75">
        <a href="crear.php"><button type="button" class="btn btn-success mb-1 text-start">Crear</button></a> 
</div>


<div class="container w-75">


    <?php       

        $sql = "select * from productos"; //guardamos en $sql la consulta a realizar

        $resultados=$conexion->query($sql); //guardamos en $resultado el resultado que nos devuelve el método query al pasarle la consulta

    ?>
        

        <table class='table table-dark table-striped table-hover align-center text-center mt-3'>
            <tr class="text-center p-2">
                <td>Detalle</td>
                <td>Código</td>
                <td>Nombre</td>
                <td>Acciones</td>
            </tr>

    <?php
            while ($fila=$resultados->fetch_assoc()){
            //while ($fila=$resultados->fetch_assoc()) {
                //foreach($fila as $key => $value){
                    
    ?>
            
                <tr>
                    <td> <a href="detalle.php?id=<?php echo $fila['id']; ?>"  class="btn btn-info mb-1 text-center"> Detalle</a> </td>
                    <td> <?php echo $fila['id']; ?> </td>
                    <td> <?php echo $fila['nombre']; ?> </td>
                    <td> <a href="update.php?id=<?php echo $fila['id']; ?>" class="btn btn-warning mb-1 text-start"> Actualizar</a>
                         <a href="borrar.php?id=<?php echo $fila['id']; ?>" class="btn btn-danger mb-1 text-start"> Borrar</a>
                    </td>
                </tr>
    <?php            
                // } //Final del foreach
            } //Final del while
    ?>
            
        </table>

</div>

    
</body>
</html>