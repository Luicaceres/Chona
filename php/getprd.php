<?php
session_start();


if(!isset($_SESSION['loggedin'])) {

       header('Location: ./login.php');
       exit;
}

include "../php/conection.php";



$ID = $_POST['id'];

$sql = "SELECT id, name  , price from product where id=$ID limit 1";

$resultado = $con->query($sql);
$rows= $resultado->num_rows;

$productos = [];

if($rows > 0){

    $productos = $resultado->fetch_array();
}

echo json_encode($productos, JSON_UNESCAPED_UNICODE);



