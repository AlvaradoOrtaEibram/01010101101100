<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="responsive.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
   <?php include ('componentes/nav.php') ?>
   <?php include ('componentes/side-menu.php') ?>
   <?php include ('componentes/articulos-nav.php') ?>

   <div class="login-wrapper">
       <button class="login-close" id="closeLoginBtn">X</button>
    <div class="login-container">
        <h1>Inicia sesión</h1>
        <form action="" method="POST" >
            <input type="text" name="admin_user" placeholder="Ingresa tu usuario">
            <input type="password" name="admin_password" placeholder="Ingresa tu contrase&ntilde;a">
            <input type="submit" value="Ingresar" name="ingresar">
            <div class="error">
              <?php 
              
              if(isset($_POST['ingresar'])){
                $user = $_POST['admin_user'];
                $password = $_POST['admin_password'];
                
                if(strlen($user) <= 1 && strlen($password) <= 1){
                 echo "<p style = 'color:red'>Llena los campos</p>";

                }
                if($user == 'admin' && $password == 'admin'){
                  header("Location: Registro.php");
                }else{
                 echo "<p style = 'color:red'>Usuario o contraseña incorrectos</p>";
                }
              }?>
            </div>
        </form>
    </div>
   </div>
   <div class="container-table">

     <?php 
  include("con_db.php"); 
  
  $consulta = "SELECT * FROM articulos";
  print "<table class='tabla-articulos'>";
  print "<tr class='first-row'><td class='first-row-e'>ID</td><td>Nombre</td><td>Precio&nbsp;al&nbsp;Mayoreo</td><td>Cantidad&nbsp;en&nbsp;Existencia</td><td>Precio&nbsp;al&nbsp;Publico</td><td class='last-row-e'>Marca</td>";
  $result = $conex->query($consulta);
  foreach ($result as $rows){
    print("<tr>");
    print("<td>".$rows["ID"]."</td>");
    print("<td>".$rows["nombre"]."</td>");
    print("<td>".$rows["precioMayoreo"]."</td>");
    print("<td>".$rows["precioPublico"]."</td>");
    print("<td>".$rows["cantidadExistencia"]."</td>");
    print("<td>".$rows["Marca"]."</td>");
    print("<tr>");
  }
  print "</table>"
  ?>
  </div>
  

</body>
<script src="script.js"></script>
<script src="login.js"></script>
</html>
<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
?>

<?php include ('componentes/footer.php') ?>
