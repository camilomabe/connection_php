<?php
   include("loginserv.php"); // Include loginserv for checking username and password
   ?>
<!doctype html>
<html>
   <head>
      <meta charset="UTF-8">
      <title>Iniciar sesion</title>
   </head>
   <body>
   <center>
      <h1>Iniciar Sesión</h1>
      <form action="" method="post">
         <input type="text" placeholder="Usuario: Camilo" id="user" name="user"><br/><br/>
         <input type="password" placeholder="Password: CMB" id="pass" name="pass"><br/><br/>
         <input type="submit" value="Ingresar" name="submit">
      </form>
      <!-- Error Message -->
      <span class="input"><?php echo $error; ?></span>
      </center>
   </body>
</html>