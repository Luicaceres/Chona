<?php 
session_start();
include "../php/conection.php";
//print_r($_POST);
print_r($_SESSION);
if(!empty($_POST)){
echo "entro";
$q1 = $con->query("insert into cart(client_email,created_at,id_usu) value(\"$_POST[email]\",NOW(),$_SESSION[id])");
if ($q1 === FALSE) { // Comparar con FALSE para detectar errores
    echo "Error al crear el carrito: " . mysqli_error($con);
    exit; // Detener la ejecución si hay un error
}


//echo " '$a' ";
if($q1){
$cart_id = $con->insert_id;
foreach($_SESSION["cart"] as $c){
    
$q1 = $con->query("insert into cart_product(product_id,Cantidad,cart_id) value($c[product_id],$c[q],$cart_id)");

if ($q1 === FALSE) { // Comparar con FALSE para detectar errores
    echo "Error al crear el cart_product: " . mysqli_error($con);
    exit; // Detener la ejecución si hay un error
}


}
unset($_SESSION["cart"]);
}
}



$a = $con->query("SELECT cantidad, name, price, price*cantidad as total FROM cart a join cart_product b ON a.id = b.cart_id join product c on c.id = b.product_id where a.id = $cart_id ;");

$f = 0;



while($r=$a->fetch_object()):

    //print_r($r);
    $R_ID = $r->cantidad;
	$R_PR = $r->price;
	$R_PD = $r->name;
    $R_PT = $r->total; 
    if ($f<>0){
        $f = $f+ $R_PT;
    }else{$f = $R_PT;
    }  
    $ds=   $R_PD . ' x ' . $R_ID ;
  
    if(!empty($g)){
  
        $g = $g .'  ' . $ds . '  ';
    }else{
        $g = $ds;
      
    }
    
    
endwhile;
//print_r($f);
$productos=($g . ', total = $' .$f )  ;

$nombre = $_SESSION['nombre'];
$Apellido = $_SESSION['apellido'];

$mensaje = "Hola soy $nombre $Apellido, acabo de hacer una compra de $productos ";


//print "<script>alert('Venta procesada exitosamente');window.location='../pages/products.php';</script>";



  header("Location: https://wa.me/584129025204?text=$mensaje");
    ?>