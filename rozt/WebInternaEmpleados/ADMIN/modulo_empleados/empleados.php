<!DOCTYPE html>
<html>
    <head>  
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ROZT ADMIN</title>
        
        <link rel="stylesheet" href="..\..\..\style\style_web_interna.css">
        <script src="https://kit.fontawesome.com/0397f53a73.js" crossorigin="anonymous"></script>
    </head>
    <body id="body">
        <header>
            <div class="icon_menu">
                <i class="fa-solid fa-bars" id="btn_open"></i>
            </div>
        </header>
        <div class="menu_side" id="menu_side">

            <div class="name_page">
                <i class="fa-solid fa-toolbox"></i>
                <h4>ADMIN</h4>
            </div>

            <div class="options_menu">
                <a href="..\adminHome.php">
                    <div class="option">
                        <i class="fa-solid fa-house" title="Inicio"></i>
                        <h4>Inicio</h4>
                    </div>
                </a>
                <a href="..\inventario.php">
                    <div class="option" >
                        <i class="fa-solid fa-layer-group" title="Inventario"></i>
                        <h4>Inventario</h4>
                    </div>
                </a>
                <a href="#">
                    <div class="option">
                        <i class="fa-solid fa-store" title="vender"></i>
                        <h4>Vender</h4>
                    </div>
                </a>
                <a href="#" class="selected">
                    <div class="option">
                    <i class="fa-solid fa-user-tie" title="empleados"></i>
                        <h4>Empleados</h4>
                    </div>
                </a>

                <a href="..\..\MainWeb\index.html">
                    <div class="option">
                        <i class="fa-solid fa-earth-americas"></i>
                        <h4>Web</h4>
                    </div>
                </a>
            </div>
        </div>
        <main>
            <h1 class="titulo">REGISTRO EMPLEADOS</h1>
            <?php
                include('control_tabla_empleados.php');
                include("tabla_empleados.php");
                include('agregar_tabla_empleados.php');
            ?>
            
        </main>
        <script src="..\..\script_web_interna.js"></script>
        <script src="ocultar_aparecer_contenido.js"></script>
    </body>


</html>