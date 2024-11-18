
<div id="tabla">

        <link rel='stylesheet' href='..\..\..\style\style_tabla_empleados.css'>
        <script src="https://kit.fontawesome.com/0397f53a73.js" crossorigin="anonymous"></script>


        <div class="contenedor_nombres_columnas">
            <?php
                function accion_apretar_nombre($s){
                    if(isset($_GET['ordenarPor']) && $_GET['ordenarPor']!=$s){
                        $_SESSION['aux'] = '';
                    }
                    echo 'href=empleados.php?ordenarPor='. $s . $_SESSION['aux'];
                }
            ?>
                
            <a <?php 
                    accion_apretar_nombre('ID');
                ?>>
                    <span class="nom_columna_id"><h2>ID</h2></span>
            </a>

            <a <?php
                    accion_apretar_nombre('RUN');
                ?>>
                    <span class="nom_columna"><h2>RUN</h2></span>
            </a>

            <a
                <?php 
                    accion_apretar_nombre('nombre');
                ?>>
                    <span class="nom_columna"><h2>NOMBRE</h2></span>
            </a>

            <a 
                <?php 
                    accion_apretar_nombre('apellido');
                ?>>
                    <span class="nom_columna"><h2>APELLIDO</h2></span>
            </a>

            <a 
                <?php 
                    accion_apretar_nombre('correo');
                ?>>
                    <span class="nom_columna_correo"><h2>CORREO</h2></span>
            </a>

            <a 
                <?php 
                    accion_apretar_nombre('telefono');
                ?>>
                    <span class="nom_columna"><h2>TELEFONO</h2></span>
            </a>
            
            <a 
                <?php 
                    accion_apretar_nombre('puesto');
                ?>>
                    <span class="nom_columna"><h2>PUESTO<h2></span>
            </a>
        </div>
        <br>
        <?php
        $inc = include("..\..\..\conection.php");
        
        if ($inc) {
            if(isset($_GET['ordenarPor'])){
                $ordenarPor = $_GET['ordenarPor'];
            }
            else{
                $ordenarPor = 'ID';
            }
            if(isset($_GET['manera'])){
                $manera = $_GET['manera'];
            }
            else{
                $manera = 'asc';
            }
            $consulta = "SELECT empleado.ID, empleado.run as RUN, empleado.dv as dv, 
            empleado.nombre as nombre, empleado.apellido as apellido, empleado.correo, empleado.telefono, puesto.nombre as puesto FROM empleado inner join puesto on empleado.id = puesto.id order by $ordenarPor $manera" ;
            $resultado = mysqli_query($conection,$consulta);
            if($resultado) {

                while($row = $resultado->fetch_array()){
                    $id = $row['ID'];
                    $nombre = $row['nombre'];
                    $apellido = $row['apellido'];
                    $run = $row['RUN'].'-'.$row['dv']; 
                    $correo = $row['correo'];
                    $telefono = $row['telefono'];
                    $puesto = $row['puesto'];


                    echo " 
                    <link rel='stylesheet' href='..\..\..\style\style_tabla_empleados.css'>
                    <div class='container_items'>
                        <span class='item_columna_id'><h4>$id</h4></span>
                        <span class='item_columna'><h4>$run</h4></span>
                        <span class='item_columna'><h4>$nombre</h4> </span>
                        <span class='item_columna'><h4>$apellido</h4> </span>
                        <span class='item_columna_correo'><h4>$correo</h4> </span>
                        <span class='item_columna'><h4>$telefono</h4> </span>
                        <span class='item_columna'><h4>$puesto</h4> </span>
                    </div>
                    ";
                }
            }
        }
    ?>
</div>

