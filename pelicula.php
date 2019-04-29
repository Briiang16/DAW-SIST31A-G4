<<!DOCTYPE html>
<html>
<head>
	<title>Brayan was here</title>
</head>
<center><h1>EL JUEGO DEL CINE Mamoland</h1></center>
<body>
<form method="post"> <font face="verdana"><center>
	Adivine el nombre de la pelicula: <input type="password" name="nombre[]" value="pelicula"><br><br>
	letra: <input type="text" name="letra[]"><br><br>
	<input type="submit" name="ok" value="Evaluar">
	<input type="submit" name="ok" value="Evaluar"></center>
</font></form>
<img src="Game/aho1.gif" align="right">
</body>
</html>
<?php
if (isset($_POST["ok"])) {
     $letra=$_POST["letra"];
     $nombre=$_POST["nombre"]; 
         foreach($_POST["letra"] as $clave=>$valor){  
           if ($valor!=""){  
              echo "<tr style=font-size:20><td>historial:</td><td>";  
              echo "<input type=text size=30 maxlength=50 name=letra[] style=font-size:30 value='".trim($valor)."'></td>";
              elseif (isset($_POST["nombre"])) {
               	# code...
               } 
}
}
}
?>
