<?php
    session_start();
    //session_destroy();

    $producto = $_POST["product"];
    $cantidad = $_POST["cantidad"];

    if(isset($_SESSION["Productos"])){
        
        

        /*$arrayProductos = explode(":",$_SESSION["Productos"]);
        $enc = false;

        for($i = 0; $i < count($arrayProductos); $i++){
            $valor1 = getProducto($arrayProductos[$i]);
            $valor2 = getProducto($producto);

            $enc = comprobar($valor1, $valor2);

            if($enc == true){
                echo $enc."<br>";
            }else{
                $sesion = $_SESSION["Productos"].":".$arrayProductos[$i];
            }
            $_SESSION["Productos"] = $sesion;
        }*/
        
        //Añadimos el producto nuevo a la sesion
        $_SESSION["Productos"] .= ":".$producto."-".$cantidad;

        //Mostramos todos los productos de la sesion
        echo $_SESSION["Productos"];
        echo "<hr>";

        //Separamos todos los productos de la sesion por ":" y lo añadimos a un array
        $arrayProductos = explode(":",$_SESSION["Productos"]);

        //Mostramos el array
        print_r($arrayProductos);
    }else{
        $_SESSION["Productos"] = $producto."-".$cantidad;
        echo $_SESSION["Productos"];
    }
    
    

    function getProducto($valor){
        $datos = explode("-",$valor);
        return $datos[2];
    }

    function comprobar($valor1, $valor2){
        $encontrado = false;
        if($valor1 == $valor2){
            $encontrado = true;
        }
        return $encontrado;
    }
    
?>