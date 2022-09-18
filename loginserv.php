<?php
$error = ""; //Variable para guardar un error en la conexión 
if (isset($_POST["submit"])) {
    if (empty($_POST["user"]) || empty($_POST["pass"])) {
        $error = "Username or Password is Invalid";
    } else {
        //Define $user y $pass
        $user = $_POST["user"];
        $pass = $_POST["pass"];
        //Se establece la conexión con la variable conectar_db al servidor local con los parámetros localhost, usuario y contraseña "localhost", "root", "root"

        $conectar_db = mysqli_connect("localhost", "root", "");
        //Se selecciona la base de datos a la cual se le quiere hacer la conexión
        $db = mysqli_select_db($conectar_db, "dbjardin");
        //consulta sql para obtener información del usuario registrado y encuentra la coincidencia del usuario
        $query = mysqli_query(
            $conectar_db,
            "SELECT * FROM acudiente WHERE pass='$pass' AND user='$user'"
        );

        $rows = mysqli_num_rows($query);
        
        if ($rows == 1) {
            // Si hay registros redirigir homepage.php
            header("Location: homepage.php");
        } else {
            // Si no hay registros, cierra la conexión 
            $error = "¡El nombre de usuario o la contraseña no son válidos!";
        }
        mysqli_close($conectar_db); 
    }
}

?>
