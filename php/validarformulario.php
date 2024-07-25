<?php

print_r($_POST);

if (isset($_POST['Enviar'])) 
{
        if(empty($nombre)) 
        {
                echo '<div class="alert alert-danger mt-3" role="alert">
                El nombre  no puede estar Vacio 
                </div>';
                $r=1;
        } else{ if(strlen($nombre) > 20) {
                echo '<div class="alert alert-danger mt-3" role="alert">
                El nombre es muy largo
                </div>';
                $r=1;
                }
        }

        
        if(empty($apellido)) 
        {
            echo '<div class="alert alert-danger mt-3" role="alert">
        El apellido no puede estar Vacio
            </div>';
            $r=1;
        }else{ if(strlen($apellido) > 20) {
            echo '<div class="alert alert-danger mt-3" role="alert">
            El nombre es muy largo
            </div>';
            $r=1;
            }
        }

        if(empty($numtlf)) 
        {
            echo '<div class="alert alert-danger mt-3" role="alert">
            El numero de telefono no puede estar Vacio
            </div>';
            $r=1;
        }else{ if(!is_numeric($numtlf)) {
            
            echo '<div class="alert alert-danger mt-3" role="alert">
            Debe ser un numero de telefono
            </div>';
            $r=1;
            }else
                    
            $validartlf = "SELECT * FROM USUARIOS WHERE NumTelf = '$numtlf' ";
            $Validando1 = $con->query($validartlf);
            if($Validando1->num_rows > 0){
                echo '<div class="alert alert-danger mt-3" role="alert">
                Numero de telefono ya existe
                </div>';$r=1;
            }
          

        }

        if(empty($zona)) 
        {
            echo '<div class="alert alert-danger mt-3" role="alert">
            La direccion no puede estar Vacia
            </div>';
            $r=1;
        }else{ if(strlen($zona) > 149) {
            echo '<div class="alert alert-danger mt-3" role="alert">
            La Direccion es muy larga
            </div>';
            $r=1;
            }
        }
        if(empty($email)) {
            echo '<div class="alert alert-danger mt-3" role="alert">
            El Email no puede estar Vacio
            </div>';
            $r=1;
        }else   {if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo '<div class="alert alert-danger mt-3" role="alert">
                    Correo Incorrecto
                    </div>';
                    $r=1;
                }else
                    
                    $validaremail = "SELECT * FROM USUARIOS WHERE EMAIL = '$email' ";
                    $Validando = $con->query($validaremail);
                    if($Validando->num_rows > 0){
                        echo '<div class="alert alert-danger mt-3" role="alert">
                        Correo Electronico ya existe
                        </div>'; 
                        $r=1;
                    }
                 }
                    

         }
        
        if(empty($contr)) {
            echo '<div class="alert alert-danger mt-3" role="alert">
            La contraseña no puede estar Vacia
            </div>';
            $r=1;
        }else{ if(strlen($contr) > 49 ) {
            echo '<div class="alert alert-danger mt-3" role="alert">
            Contraseña demaciado larga
            </div>';
            $r=1;
            }
        }



 ?>