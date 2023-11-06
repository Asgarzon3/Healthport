<?php

include("conexion.php"); //se llama el archivo donde se inicia la conexion a la bd

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$numIdenti = $_POST["numIdenti"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];

//Registrar en tabla tbladmin nuevo administrador

if (isset($_POST["btnregistrar"])) {
    $sqlgrabar = "INSERT INTO tbladmin (nombre, apellido, numIdenti, correo, usuario, contrasena) values ('$nombre', '$apellido', '$numIdenti', '$correo', '$usuario', '$contrasena')";

    if (mysqli_query($conn, $sqlgrabar)) {
        echo "<script> alert('Usuario registrado con éxito, $nombre'); window.location='index.html' </script>";
    } else {
        echo "Error en la consulta: " . mysqli_error($conn);
    }
}

?>