<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="responsive.css" />
</head>
<body>
<?php include ('componentes/nav.php') ?>
<?php include ('componentes/articulos-nav.php') ?>
<?php include ('componentes/side-menu.php') ?>

<div class="form-wrapper">

    <h1>Registro de articulos</h1>
    <form action="" method="POST" class="form-registro">
        <input type="text" name="nombre" placeholder="Nombre del articulo">
        <input type="text" name="precioMayoreo" placeholder="Precio al mayoreo">
        <input type="text" name="precioPublico" placeholder="Precio al publico">
        <input type="text" name="cantidadExistencia" placeholder="Cantidad en existencia">
        <input type="text" name="Marca" placeholder="Marca">
        <input type="submit" value="Registrar" name="Registrar">
        <?php 
       include ('con_db.php');
   
       if(isset($_POST['Registrar'])){
  

        $nombre = $_POST['nombre'];
        $precioMayoreo = $_POST['precioMayoreo'];
        $precioPublico = $_POST['precioPublico'];
        $cantidadExistencia = $_POST['cantidadExistencia'];
        $Marca = $_POST['Marca'];
           $consulta = "INSERT INTO articulos (nombre, precioMayoreo, precioPublico, cantidadExistencia, Marca) VALUES ('$nombre', '$precioMayoreo', '$precioPublico', '$cantidadExistencia', '$Marca')";
           $resultado = mysqli_query($conex,$consulta);
           if($resultado){
            echo "<script>alert('Producto registrado correctamente');</script>";
               
           }else{
            echo "<script>alert('Ocurrio un error');</script>";
           }
        }
        ?>
    </form>
</div>
    <?php include('componentes/footer.php') ?>
</body>
<script src="script.js"></script>
</html>

<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
?>