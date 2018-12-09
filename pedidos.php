<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pedidos</title>
</head>
<body>
    <?php
        session_start();

        $fecha = date("d")."/".date("m")."/".date("Y");
        $hora = date("H").":".date("i").":".date("s");
        if(isset($_SESSION["total"])){
            if(isset($_COOKIE["idCompra"])){
                setcookie("idCompra",($_COOKIE["idCompra"] + 1),time()+31540000);
            }else{
                setcookie("idCompra",1,time()+31540000);
            }

            if(isset($_COOKIE["historial"])){
                setcookie("historial",$_COOKIE["historial"]."*".$_COOKIE["idCompra"]."-".$fecha." ".$hora."-".$_SESSION["total"],time()+31540000);
            }else{
                setcookie("historial",$_COOKIE["idCompra"]."-".$fecha." ".$hora."-".$_SESSION["total"],time()+31540000);
            }
        }


        
    ?>

    <table>
        <tr>
            <th>Id</th>
            <th>Fecha</th>
            <th>Importe</th>
        </tr>
        <?php
           
                $arrayHistorial = explode("*",$_COOKIE["historial"]);
                for($i = 0; $i < count($arrayHistorial); $i++){
                    $datos = explode("-",$arrayHistorial[$i]);

                    echo "<tr>";
                    echo "<td>".$datos[0]."</td>";
                    echo "<td>".$datos[1]."</td>";
                    echo "<td>".$datos[2]."</td>";
                    echo "</tr>";
                }
           

            session_destroy();
        ?>
    </table>
    <a href="inicio.php"><button>Volver al inicio</button></a>
</body>
</html>