<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Inicio</title>
  </head>
  <body>
		<h2>Inicia Sesión</h2>
          <form action="archivo_destino.php" method="post" enctype="application/x-www-form-urlencoded">
              <label for="control1_nombre">Usuario</label>
              <input type="text" name="datos_introducidos_usuario" id="control1_nombre" placeholder="Username" required>
              <label for="control1_contraseña">Contraseña</label>
              <input type="password" name="datos_introducidos_contraseña" id="control1_contraseña" placeholder="Password" required>
			  <input type="submit" value="Entrar">
          </form>

         <h2>O Regístrate</h2>
        </div>
          <form action="archivo_registrar.php" method="post" enctype="application/x-www-form-urlencoded">
              <label for="control2_nombre">Usuario</label>
              <input type="text" name="datos_registrar_usuario" id="control2_nombre" placeholder="Username" required>
              <label for="control2_contraseña">Contraseña</label>
              <input type="password" name="datos_registrar_contraseña" id="control2_contraseña" placeholder="Password" required>
              <input type="submit" value="Registrar">
          </form>
  </body>
</html>