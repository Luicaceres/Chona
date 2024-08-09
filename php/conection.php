<?php


//credenciales de acceso a la base datos

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'cartbasic1';

/* 
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'jonapisc_1';
$DATABASE_PASS = 'jon102003123';
$DATABASE_NAME = 'jonapisc_cartbasic1'; */

// conexion a la base de datos

$con = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);


//$con  = new mysqli("localhost","root","","cartbasic1");
//$con  = new mysqli("127.0.0.1","jonapisc_1","jon102003123","jonapisc_cartbasic1");
   
if ($con->connect_error) {

    die("fallo". $con->connect_error);
}



if (mysqli_connect_error()) {

    // si se encuentra error en la conexión

    exit('Fallo en la conexión de MySQL:' . mysqli_connect_error());
}

