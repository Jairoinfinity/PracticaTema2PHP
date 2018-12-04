<?php
    session_start();
    //session_destroy();

    $producto = $_POST["product"];
    $cantidad = $_POST["cantidad"];

    if(isset($_SESSION["Productos"])){
        $arrayProductos = explode(":",$_SESSION["Productos"]);
        $enc = false;

        for($i = 0; $i < count($arrayProductos) && $enc == false; $i++){
            $enc = comprobar(getProducto($arrayProductos[$i]), getProducto($producto));

            if($enc == true){
                $arrayProductos[$i] = getId($arrayProductos[$i])."-".getPrecio($arrayProductos[$i])."-".getProducto($arrayProductos[$i])."-".editCantidad($arrayProductos[$i],$cantidad);
                $enc = true;
            }
        }
       
        if($enc == true){
            for($i = 0; $i < count($arrayProductos); $i++){
                if($i == 0){
                    $_SESSION["Productos"] = $arrayProductos[$i];
                }else{
                    $_SESSION["Productos"] .= ":".$arrayProductos[$i];
                }
            }

            $enc = false;
        }else{
            $_SESSION["Productos"] .= ":".$producto."-".$cantidad;
        }

        echo $_SESSION["Productos"];
        
    }else{
        $_SESSION["Productos"] = $producto."-".$cantidad;
        echo $_SESSION["Productos"];
    }
    
    

    function getProducto($valor){
        $datos = explode("-",$valor);
        return $datos[2];
    }

    function getId($valor){
        $datos = explode("-",$valor);
        return $datos[0];
    }

    function getPrecio($valor){
        $datos = explode("-",$valor);
        return $datos[1];
    }

    function editCantidad($valor1, $valor2){
        $datos = explode("-",$valor1);
        return ($datos[3]+$valor2);
    }

    function comprobar($valor1, $valor2){
        $encontrado = false;
        if($valor1 == $valor2){
            $encontrado = true;
        }
        return $encontrado;
    }
?>