<div class="controles">
    <div class="icon_container">
        <a class="flechas" 
            <?php 
                    if(isset($_GET['manera'])){
                        if($_GET['manera']=='desc'){
                            $url = str_replace('manera=desc','manera=asc',$_SERVER['REQUEST_URI']);
                            echo 'href='.$url;
                            $_SESSION['aux'] = '&manera=asc';
                        }
                    }else{
                        if(isset($_GET['ordenarPor'])) {
                            echo 'href='.$_SERVER['REQUEST_URI'].'&manera=asc';
                            $_SESSION['aux'] = '&manera=asc';
                        }else {
                            if(!isset($_GET['manera'])){
                                echo 'href=empleados.php?manera=asc'; 
                                $_SESSION['aux'] = '&manera=asc';
                            }
                        }
                    }
            ?>
        >
            <i title="Ascendente" id="flecha_arriva" class="fa-sharp-duotone fa-solid fa-arrow-up" style="--fa-primary-color: #0505a0; --fa-secondary-color: #0505a0;"></i>
        </a> 
        <a class="flechas" 
            <?php 
                if(isset($_GET['manera'])){
                    if($_GET['manera']=='asc'){
                        $url = str_replace('manera=asc','manera=desc',$_SERVER['REQUEST_URI']);
                        echo 'href='.$url;
                        $_SESSION['aux'] = '&manera=desc';
                    }
                }else{
                    if(isset($_GET['ordenarPor'])) {
                        echo 'href='.$_SERVER['REQUEST_URI'].'&manera=desc';
                        $_SESSION['aux'] = '&manera=desc';
                    }else {
                        if(!isset($_GET['manera'])){
                            echo 'href=empleados.php?manera=desc'; 
                            $_SESSION['aux'] = '&manera=desc';
                        }
                    }
                }
                
            ?>
        >
            <i title="Descendente" id="flecha_abajo" class="fa-sharp-duotone fa-solid fa-arrow-up fa-rotate-180" style="--fa-primary-color: #0505a0; --fa-secondary-color: #0505a0;"></i>
        </a> 
        <a class="modificar"    onclick=ocultar_tabla()><i id="agregar" class="fa-solid fa-plus"></i></a>
        <a class="modificar" ><i id="eliminar" class="fa-solid fa-trash"></i></a>
    </div>
</div>
  


      