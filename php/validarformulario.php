<?php

//print_r($_POST);


function validarformulario($datos) 
{
    $errores = [];
        
        if (isset($_POST['Enviar'])) 
        {
            if(empty($datos['nombre'])) 
            {
                
                
                
                $errores[] = "El nombre  no puede estar Vacio"; 
                        
                
                    
                    
            } else{ if(strlen($datos['nombre']) > 20)
                    {
                      
                        $errores[] = "El nombre es muy largo";
                        
                         
                    }
            }

                
            if(empty($datos['apellido'])) 
            {
                $errores[]  =  "El apellido no puede estar Vacio"; 
                    
                     
            }else{ if(strlen($datos['apellido']) > 20) {
                
                $errores[] = "El nombre es muy largo";
                    
                     
                    }
            }

            if(empty($datos['numtlf'])) 
            {
                $errores[] ="El numero de telefono no puede estar Vacio";
                    
                    
            }else{if(!is_numeric($datos['numtlf'])) {
                    
                    $errores[] = "Debe ser un numero de telefono";
                    
                    
                    }else
                            $n =  $datos['numtlf'];
                    $validartlf = "SELECT * FROM USUARIOS WHERE NumTelf = '$n' ";
                    $Validando1 = $con->query($validartlf);
                    if($Validando1->num_rows > 0){
                        $errores[] =  "Numero de telefono ya existe";
                        
                        
                    }
                

            }

            if(empty($datos['zona'])) 
            {
                $errores[] ="La direccion no puede estar Vacia";
                 
            }else{ if(strlen($datos['zona']) > 149) {
                $errores[] ="La Direccion es muy larga";
                 
                    
                    }
            }
            if(empty($datos['email'])) {
                $errores[] = "El Email no puede estar Vacio";
                    
                    
            }else   {if(!filter_var($datos['email'], FILTER_VALIDATE_EMAIL)) {
                        $errores[] = "Correo Incorrecto";
                        
                    }else
                            $e = $datos['email'];
                            $validaremail = "SELECT * FROM USUARIOS WHERE EMAIL = '$e' ";
                            $Validando = $con->query($validaremail);
                            if($Validando->num_rows > 0){
                                $errores[] ="Correo Electronico ya existe"; 
                               
                            }
                    }
            }
                
            if(empty($datos['contr'])) {
                $errores[] = "La contraseña no puede estar Vacia";
                   
            }else{ if(strlen($datos['contr']) > 49 ) {
                $errores[] ="Contraseña demaciado larga";
            
                 
            }

        }


    return $errores;
}

//print_r($_SERVER["REQUEST_METHOD"]);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $datos = $_POST;
    //print_r($datos);
    
    $errores = validarformulario($datos);
    
    //print_r($errores);
    

    if (empty($errores)) {
        // Si no hay errores, inserta los datos en la base de datos
    


        header("Location: ../pages/exito.php"); // Redirige a la página de éxito
    } else {
        // Si hay errores, muestra los mensajes y vuelve a cargar la página de registro
        foreach ($errores as $error) {
           // echo '<div class="alert alert-danger mt-3" role="alert">' . $error . '</div>';
           // print_r($error);
            //print_r($errores);
            //$_prueba =  '?' . $error;
           // print_r($_prueba);
        }
        $prueba = http_build_query($errores);
       
   header("Location: ../pages/registro.php?$prueba");    
    }
}






 ?>