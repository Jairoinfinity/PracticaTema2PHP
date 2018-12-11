<?php
    session_start();
    //session_destroy();
    if(isset($_POST["anadido"])){
       $producto = $_POST["product"];
        $cantidad = $_POST["cantidad"];
        $compra = $_POST["anadido"]; 
    }

    if(isset($_POST["anadido"])){

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
    
            //echo $_SESSION["Productos"];
            
        }else{
            $_SESSION["Productos"] = $producto."-".$cantidad;
            //echo $_SESSION["Productos"];
        }
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

    <div class="card text-center">
        <div class="card-header">
            <h1>Lista del Pedido</h1>
        </div>
        <div class="card-body card-text">
            <table class="table table-striped">
            <tr>
                <th>Id</th>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>
            <?php
                if(isset($_SESSION["Productos"])){
                    $arrayProductos = explode(":",$_SESSION["Productos"]);
                    for($i = 0; $i < count($arrayProductos); $i++){
                        $datos = explode("-",$arrayProductos[$i]);

                        if($i == 0){
                            $_SESSION["total"] = ($datos[1]*$datos[3]);
                        }else{
                            $_SESSION["total"] += ($datos[1]*$datos[3]);
                        }

                        echo "<tr>";
                        echo "<td>".$datos[0]."</td>";
                        echo "<td>".$datos[2]."</td>";
                        echo "<td>".$datos[1]."€</td>";
                        echo "<td>".$datos[3]."</td>";
                        echo "</tr>";
                    }
                }
            ?>
            </table>
            <a href="inicio.php" class="btn btn-primary">Seguir comprando</a>
            <a href="pedidos.php" class="btn btn-primary">Procesar pedido</a>
        </div>
        <div class="card-footer text-muted">
            <?php if(isset($_SESSION["Productos"])){echo "Total: ".$_SESSION['total']."€";}?>
        </div>
    </div>

    <!--Script de Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>


