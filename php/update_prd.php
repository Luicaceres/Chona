
<?php

session_start();

if(!isset($_SESSION['loggedin'])) {

       header('Location: ./login.php');
       exit;
}
include "../php/conection.php";
    $Producto = $_POST['Producto'];
    $Precio = $_POST['Precio'];
    $P = $_POST['id'];
   // $imagen = $_POST['imagen'];
   $dir = "../assets/img";
    
$sql = "UPDATE product SET  name = '$Producto', price = $Precio WHERE id =  $P ";
   
    echo $sql ;
   if($con->query($sql)){

             $_SESSION['color'] = "success";
            $_SESSION['msg'] = "Registro Editado";
          if ($_FILES['imagen']['error'] == UPLOAD_ERR_OK) {
            $permitidos = array("image/jpg", "image/jpeg");
            if (in_array($_FILES['imagen']['type'], $permitidos)) {
                print_r($_FILES);
                $info_img = pathinfo($_FILES['imagen']['name']);
                $info_img['extension'];
                $poster = $dir.'/'.$P.'.jpg';
                $_SESSION["dir"] = $dir;
                $_SESSION["prueba"] = $poster;
                if (!file_exists($dir)) {
                    mkdir($dir, 0777);
                }
                if (!move_uploaded_file($_FILES['imagen']['tmp_name'], $poster)) {
                    $_SESSION['color'] = "danger";
                    $_SESSION['msg'] .= "<br>Error al guardar imagen";
                }
            } else {
                $_SESSION['color'] = "danger";
                $_SESSION['msg'] .= "<br>Formato de imágen no permitido";
            }
        }
    }else{
        $_SESSION['color'] = "danger";
        $_SESSION['msg'] = "Error al guarda imágen";
    }
    header('Location: ../pages/lista_products.php');

exit;