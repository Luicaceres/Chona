<?php
session_start();



//credenciales de acceso a la base datos

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'cartbasic1';

// conexion a la base de datos

$conexion = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);




if (mysqli_connect_error()) {

    // si se encuentra error en la conexión

    exit('Fallo en la conexión de MySQL:' . mysqli_connect_error());
}

// Se valida si se ha enviado información, con la función isset()

if (!isset($_POST['imail'], $_POST['floatingPassword'])) {

    // si no hay datos muestra error y re direccionar
  
     header('Location: ../pages/index.php');
}

// evitar inyección sql

if ($stmt = $conexion->prepare('SELECT id,password FROM usuarios WHERE Email = ?')) {

    // parámetros de enlace de la cadena s

    $stmt->bind_param('s', $_POST['imail']);
    $stmt->execute();
}


// acá se valida si lo ingresado coincide con la base de datos

$stmt->store_result();
if ($stmt->num_rows > 0) {
    $stmt->bind_result($id, $password);
    $stmt->fetch();

    // se confirma que la cuenta existe ahora validamos la contraseña
    

    if ($_POST['floatingPassword'] === $password) {
      //  print_r($stmt);
        $consulta=("Select * from usuarios WHERE id = $id ");
        $sentencia=mysqli_query($conexion,$consulta);
        $resultado= mysqli_fetch_array($sentencia);
        // la conexion sería exitosa, se crea la sesión

        //print_r($_SESSION);

        session_regenerate_id();
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['email'] = ($resultado['Email']);
        $_SESSION['id'] = ($resultado['ID']);
        $_SESSION['nombre'] = ($resultado['Nombre']);
        $_SESSION['apellido'] = ($resultado['Apellido']);
        $_SESSION['num'] = ($resultado['NumTelf']);
        $_SESSION['Zona'] = ($resultado['Zona']);
        $_SESSION['usu'] = ($resultado['Tipusu']);
        
        header('Location: ../pages/inicio.php');
    }
} else {

    // usuario incorrecto
    header('Location: ../pages/loginbad.php');

  

}

$stmt->close();