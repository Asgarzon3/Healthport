<?php

include("conexion.php"); //llamar archivo de conexion a bd


$usuario = $_POST["usuario"];
$contrasena	= $_POST["contrasena"];

//consultar en tabla de bd si el usuario existe
if (isset($_POST["btningresar"])){
	$query = mysqli_query($conn, "SELECT * FROM tbladmin WHERE usuario = '$usuario' AND contrasena = '$contrasena'");
	$nr = mysqli_num_rows($query);

	    if ($query) {
        $nr = mysqli_num_rows($query);

        if ($nr == 1) {
            echo "<script> alert('Bienvenido $usuario'); window.location='gestion admin.html' </script>";
        } else {
            echo "<script> alert('Usuario no existe'); window.location='admin.html' </script>";
        }
    } else {
        echo "Error en la consulta: " . mysqli_error($conn);
    }
}

?>