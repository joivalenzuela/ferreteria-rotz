<?php
    if(!empty($_POST["agregar"])){
            $run=$_POST["run"];
            $dv=$_POST["dv"];
            $nombre=$_POST["nombre"];
            $apellido=$_POST["apellido"];
            $correo=$_POST["correo"];
            $telefono=$_POST["telefono"];
            $direccion=$_POST["direccion"];
            $puesto=$_POST["puesto"];
            

            $sql=$conection->query("insert into empleado(run,dv,contraseña,nombre,apellido,correo,direccion,telefono,puesto)values('$run','$dv','$run','$nombre','$apellido','$correo','$direccion','$telefono','$puesto')");
                        if($sql==1){
                            echo '<div class="success">exito</div>';
                        } else{
                            echo '<div class="success">Error</div>';
                        }
                    }
                
?>

