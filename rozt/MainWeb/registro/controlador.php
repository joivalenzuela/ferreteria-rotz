<?php
    if(!empty($_POST["registro"])){
        if(empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["direccion"]) or empty($_POST["usuario"]) or empty($_POST["clave"]) or empty($_POST["claveVerificar"])){
            echo '<div class="alerta">Uno de los campos esta vacio</div>';
        } else{
            if(strcmp($_POST["clave"],$_POST["claveVerificar"])==0){
                $nombre=$_POST["nombre"];
                $apellido=$_POST["apellido"];
                if(empty($_POST["correo"])){
                    $correo=NULL;
                }else{
                    $correo=$_POST["correo"];
                }
                if(empty($_POST["telefono"])){
                    $telefono=NULL;
                }else{
                    $telefono=$_POST["telefono"];
                }
                $direccion=$_POST["direccion"];
                $usuario=$_POST["usuario"];
                $clave=password_hash($_POST["clave"],PASSWORD_BCRYPT);
                

                $sql=$conection->query("insert into cliente(usuario,contraseña,nombre,apellido,correo,direccion,telefono)values('$usuario','$clave','$nombre','$apellido','$correo','$direccion','$telefono')");
                if($sql==1){
                    echo '<div class="success">Registrado Correctamente</div>';
                } else{
                    echo '<div class="success">Error al registrar</div>';
                }
            }
            else{
                echo '<div class="alerta">Las contraseñas no coinciden</div>';
            }
            
            
        }
    }

?>