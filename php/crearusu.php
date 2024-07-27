<?php
session_start();

include "../php/conection.php";

$Nombre = $_SESSION["Nombre"];
$Apellido = $_SESSION["Apellido"];
$Numtlf = $_SESSION["Numtlf"];
$Zona = $_SESSION["Zona"];
$Email = $_SESSION["Email"];
$tipo = 0;
$Contrasena = password_hash($_SESSION["Contraseña"], PASSWORD_BCRYPT);

$crear = "INSERT INTO usuarios (Nombre, Apellido, NumTelf, Email, Zona, Tipusu, Password) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $con->prepare($crear);

$stmt->bind_param("ssissis", $Nombre, $Apellido, $Numtlf,$Email, $Zona, $tipo, $Contrasena);

$stmt->execute();

session_destroy();

$a[]= "El Usuario fue creado Bienvenido'$Nombre  $Apellido', Por favor ingresa al sistema ";

$prueba = http_build_query($a);
       
header("Location: ../index.php?$prueba");