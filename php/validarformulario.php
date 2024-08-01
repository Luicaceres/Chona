<?php
session_start();
include "../php/conection.php";





function validarformulario($datos,$con) 
{
    echo "<div>  a  </div>";

    $errores = [];
        
        if (isset($_POST['Enviar'])) 
        {
            if(empty($datos['Nombre'])) 
            {
                
                
                
                $errores[] = "El nombre  no puede estar Vacio"; 
                        
                
                    
                    
            } else{ if(strlen($datos['Nombre']) > 20)
                    {
                      
                        $errores[] = "El nombre es muy largo";
                        
                         
                    }
            }

                
            if(empty($datos['Apellido'])) 
            {
                $errores[]  =  "El apellido no puede estar Vacio"; 
                    
                     
            }else{ if(strlen($datos['Apellido']) > 20) {
                
                $errores[] = "El nombre es muy largo";
                    
                     
                    }
            }
                echo "numtelef";
       
      
            if (empty($datos['Numtlf'])) {
                $errores[] = "El número de teléfono no puede estar vacío";
            } elseif (!is_numeric($datos['Numtlf'])) {
                $errores[] = "Debe ser un número de teléfono";
            } elseif (strlen($datos['Numtlf']) !== 11) {
                $errores[] = "El número de teléfono debe tener 12 dígitos.";
            } else {
                // Preparar la consulta para evitar inyecciones SQL
                $stmt = $con->prepare("SELECT * FROM USUARIOS WHERE NumTelf = ?");
                $stmt->bind_param("s", $datos['Numtlf']);
                $stmt->execute();
                $result = $stmt->get_result();
            
                if ($result->num_rows > 0) {
                    $errores[] = "Número de teléfono ya existe";
                }
            }

            if(empty($datos['Zona'])) 
            {
                $errores[] ="La direccion no puede estar Vacia";
                 
            }else{ if(strlen($datos['Zona']) > 149) {
                $errores[] ="La Direccion es muy larga";
                 
                    
                    }
            }
            if(empty($datos['Email'])) {
                $errores[] = "El Email no puede estar Vacio";
                    
                    
            }else   {if(!filter_var($datos['Email'], FILTER_VALIDATE_EMAIL)) {
                        $errores[] = "Correo Incorrecto";
                        
                    }else
                            $e = $datos['Email'];
                            $validaremail = "SELECT * FROM USUARIOS WHERE EMAIL = '$e' ";
                            $Validando = $con->query($validaremail);
                            if($Validando->num_rows > 0){
                                $errores[] ="Correo Electronico ya existe"; 
                               
                            }
                    }
            }
                
            if (empty($datos['Contraseña'])) {
                $errores[] = "La contraseña no puede estar vacía";
            } elseif (strlen($datos['Contraseña']) < 8) {
                $errores[] = "La contraseña debe tener al menos 8 caracteres";
            } elseif (strlen($datos['Contraseña']) > 19) {
                $errores[] = "La contraseña es demasiado larga";
            }


    return $errores;
}



if($_SERVER["REQUEST_METHOD"] == "POST"){
    $datos = $_POST; 
  
    
    
    
    $errores = validarformulario($datos, $con);
    echo "<div>  a  </div>";


  ;
    

    if (empty($errores)) {
        // Si no hay errores, inserta los datos en la base de datos
    
        $_SESSION = $datos;

        header("Location: ../php/crearusu.php"); // Redirige a la página de éxito
    } else {
        // Si hay errores, muestra los mensajes y vuelve a cargar la página de registro
        foreach ($errores as $error) {
       
        }
        $prueba = http_build_query($errores);
       
 header("Location: ../pages/registro.php?$prueba");    
    }
}






 ?>