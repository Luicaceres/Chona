<?php
session_start();
include "../php/conection.php";

// Se valida si se ha enviado información, con la función isset()



if (isset($_POST['imail'], $_POST['floatingPassword'])) {
    // Verificamos que los campos no estén vacíos
    if (!empty($_POST['imail']) && !empty($_POST['floatingPassword'])) {
        // Los datos son válidos
        
                // evitar inyección sql

                if ($stmt = $con->prepare('SELECT id,password FROM usuarios WHERE Email = ?')) {

                    // parámetros de enlace de la cadena s

                    $stmt->bind_param('s', $_POST['imail']);
                    $stmt->execute();
                }


                // acá se valida si lo ingresado coincide con la base de datos

                $stmt->store_result();
                if ($stmt->num_rows > 0) {
                    $stmt->bind_result($id, $password);
                    $stmt->fetch();

                    if (password_verify($_POST['floatingPassword'], $password)){
                        $consulta=("Select * from usuarios WHERE id = $id ");
                        $sentencia=mysqli_query($con,$consulta);
                        $resultado= mysqli_fetch_array($sentencia);
                        // la conexion sería exitosa, se crea la sesión



                        session_regenerate_id();
                        $_SESSION['loggedin'] = TRUE;
                        $_SESSION['email'] = ($resultado['Email']);
                        $_SESSION['id'] = ($resultado['ID']);
                        $_SESSION['nombre'] = ($resultado['Nombre']);
                        $_SESSION['apellido'] = ($resultado['Apellido']);
                        $_SESSION['num'] = ($resultado['NumTelf']);
                        $_SESSION['Zona'] = ($resultado['Zona']);
                        $_SESSION['usu'] = ($resultado['Tipusu']);
                        echo "v es: '$v'" ;
                        ob_clean();
                    header('Location: ../pages/inicio.php');
                    $stmt->close();
                    } else{
                        $v= 'contraseña incorrecta' ;
                        echo "v es: '$v'" ;
                        
                        ob_clean();
                        //$prueba = http_build_query($v);
                        header("Location: ../pages/loginbad.php?$v");
                        $stmt->close();                   
                    
                    
                    
                    }

                } else {
                    $stmt->close();
                    //echo "Por favor, completa todos los campos.";
                    $v = 'Usuario Incorrecto';
                    //echo "v es: '$v'";
                    ob_clean();
                    header("Location: ../pages/loginbad.php?$v");
                    exit;
                }


                
    } else {
        // Al menos uno de los campos está vacío
        echo "Por favor, completa todos los campos.";
        $v = 'Por favor, completa todos los campos';
        echo "v es: '$v'";
        ob_clean();
        header("Location: ../pages/loginbad.php?$v");
        exit;
    }
} else {
    // Alguno de los campos no está definido
    echo "Faltan datos en el formulario.";
    $v = 'Faltan datos en el formulario.';
    echo "v es: '$v'";
    ob_clean();
    header("Location: ../pages/loginbad.php?$v");
    exit;
}
