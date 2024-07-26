<?php

print_r($_POST);


function validarformulario($datos) 
{
    $errores = [];
        
        if (isset($_POST['Enviar'])) 
        {
            if(empty($nombre)) 
            {
                
                
                $errores[] = "El nombre  no puede estar Vacio"; 
                        
                
                    
                    
            } else{ if(strlen($nombre) > 20)
                    {
                      
                        $errores[] = "El nombre es muy largo";
                        
                         
                    }
            }

                
            if(empty($apellido)) 
            {
                $errores[]  =  "El apellido no puede estar Vacio"; 
                    
                     
            }else{ if(strlen($apellido) > 20) {
                
                $errores[] = "El nombre es muy largo";
                    
                     
                    }
            }

            if(empty($numtlf)) 
            {
                $errores[] ="El numero de telefono no puede estar Vacio";
                    
                    
            }else{if(!is_numeric($numtlf)) {
                    
                    $errores[] = "Debe ser un numero de telefono";
                    
                    
                    }else
                            
                    $validartlf = "SELECT * FROM USUARIOS WHERE NumTelf = '$numtlf' ";
                    $Validando1 = $con->query($validartlf);
                    if($Validando1->num_rows > 0){
                        $errores[] =  "Numero de telefono ya existe";
                        
                        
                    }
                

            }

            if(empty($zona)) 
            {
                $errores[] ="La direccion no puede estar Vacia";
                 
            }else{ if(strlen($zona) > 149) {
                $errores[] ="La Direccion es muy larga";
                 
                    $_POST['r']++; 
                    }
            }
            if(empty($email)) {
                $errores[] = "El Email no puede estar Vacio";
                    
                    
            }else   {if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $errores[] = "Correo Incorrecto";
                        
                    }else
                            
                            $validaremail = "SELECT * FROM USUARIOS WHERE EMAIL = '$email' ";
                            $Validando = $con->query($validaremail);
                            if($Validando->num_rows > 0){
                                $errores[] ="Correo Electronico ya existe"; 
                               
                            }
                    }
            }
                
            if(empty($contr)) {
                $errores[] = "La contraseña no puede estar Vacia";
                   
            }else{ if(strlen($contr) > 49 ) {
                $errores[] ="Contraseña demaciado larga";
            
                 
            }

        }


    return $errores;
}

print_r($_SERVER["REQUEST_METHOD"]);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $datos = $_POST;
    $errores = validarformulario($datos);
    print_r($errores);
    

    if (empty($errores)) {
        // Si no hay errores, inserta los datos en la base de datos
    


        header("Location: ../pages/exito.php"); // Redirige a la página de éxito
    } else {
        // Si hay errores, muestra los mensajes y vuelve a cargar la página de registro
        foreach ($errores as $error) {
           // echo '<div class="alert alert-danger mt-3" role="alert">' . $error . '</div>';
           // print_r($error);
            //print_r($errores);
            $_prueba =  '?' . $error;
            print_r($_prueba);
        }
        $prueba = http_build_query($errores);
        print_r($prueba);
   header("Location: ../pages/registro.php?$prueba");    
    }
}






 ?>