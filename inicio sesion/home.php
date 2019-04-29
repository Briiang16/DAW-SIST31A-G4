<?php
session_start();
//si hay una sesión
if (isset($_SESSION['name'])){
    //se muestra el contenido de la página web
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
  </head>
  <body>      
    <h1>¡Bienvenido <?php print $_SESSION['name'];?>!</h1>
    <h4>Aquí se muestra el contenido web visible solo para usuarios registrados.</h4>
	
	<a href="cerrar_sesion.php">Salir</a>
  </body>
</html>
<?php
}//si no hay sesión
else{
    //se redirecciona
    header ('location: ./');
}
?>