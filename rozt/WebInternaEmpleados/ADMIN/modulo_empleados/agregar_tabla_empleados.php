
<div class="agregar_a_tabla" style="display: none;">
    
    <form action="" method="post" class="formulario">

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
        <div class="usuario">
            <label for="usuario">Usuario:</label><br>
            <input type="text" name="usuario" 
            required
            pattern="^([a-z]{2,}|[a-z][0-9]{2,})[0-9]*$"
            title="">
            </input><br>
        </div>
        
        <div class="contrasena">
            <label for="constraseña">Contraseña:</label><br>
            <input type="password" name="clave" 
            required
            pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"
            title="Minimo 8 caracteres, minimo una letra y numero">
            </input><br>
        </div>
        
        <div class="claveVerificar">
            <label for="claveVerificar">Repetir Contraseña:</label><br>
            <input type="password" name="claveVerificar" 
            required
            pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"
            title="Minimo 8 caracteres, minimo una letra y numero">
            </input><br>
        </div>
        
        <div class="cuenta">
            <input class = button type="submit" value="Registrar" name="registro">
        </div>
        

    </form>
        
</div>