<!DOCTYPE html>
<html>
    <head>  
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ROZT ADMIN</title>
        
        <link rel="stylesheet" href="..\..\..\style\style_web_interna.css">
        <link rel="stylesheet" href="..\..\..\style\style_registro_cliente.css">
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
            <h1>Agregar Empleado</h1>
            <div class="cuadro">
                
                <form action="" method="post" class="formulario">

                    <div class="run">
                            <label for="run">RUN:</label><br>
                            <input type="text" name="run" 
                                required>
                            </input><br>
                    </div>
                    <div class="dv">
                            <label for="dv">Digito Verificador:</label><br>
                            <input type="text" name="dv" 
                                required>
                            </input><br>
                    </div>


                    <div class="nombre">
                        <label for="nombre">Nombre:</label><br>
                        <input type="text" name="nombre" 
                            required 
                            pattern="^([A-Za-zÑñÁáÉéÍíÓóÚú]+['\-]{0,1}[A-Za-zÑñÁáÉéÍíÓóÚú]+)(\s+([A-Za-zÑñÁáÉéÍíÓóÚú]+['\-]{0,1}[A-Za-zÑñÁáÉéÍíÓóÚú]+))*$" 
                            title="No se permiten ni simbolos ni numeros">
                        </input><br>
                    </div>
                    
                    <div class="apellido">
                        <label for="apellido">Apellido:</label><br>
                        <input type="text" name="apellido" 
                        required
                        pattern="^([A-Za-zÑñÁáÉéÍíÓóÚú]+['\-]{0,1}[A-Za-zÑñÁáÉéÍíÓóÚú]+)(\s+([A-Za-zÑñÁáÉéÍíÓóÚú]+['\-]{0,1}[A-Za-zÑñÁáÉéÍíÓóÚú]+))*$"
                        title="No se permiten ni simbolos ni numeros">
                    </input><br>
                    </div>
                    
                    <div class="correo">
                        <label for="correo">Correo:</label><br>
                        <input type="email" name="correo" 
                        required>
                        </input><br>
                    </div>
                    
                    <div class="telefono">
                        <label for="telefono">Telefono:</label><br>
                        <input type="number" name="telefono"
                        >
                        </input><br>
                    </div>
                    
                    <div class="direccion">
                        <label for="direccion">Dirección:</label><br>
                        <input type="text" name="direccion" 
                        required>
                        </input><br>
                    </div>

                    <div class="puesto">
                        <label for="puesto">Puesto:</label><br>
                        <select name="puesto" id="puesto">
                        <option value=1>Admin</option>
                        <option value=2>Vendedor</option>
                        <option value=3>Empleado</option>
                        
                    </div>
                    <br>
                    
                    <div class="cuenta">
                        <input class = button type="submit" value="añadir" name="agregar">
                    </div>
                </form>
                <a href="empleados.php"><button type="button">volver<button></a>
                <?php
                    include("..\..\..\conection.php");
                    include("controlador_agregar.php");
                
                ?>
            </div>
            
            </main>
            <script src="..\..\script_web_interna.js"></script>
        </body>


</html>