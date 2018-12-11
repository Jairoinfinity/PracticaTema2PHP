<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pedidos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
                setcookie("historial","0-".$fecha." ".$hora."-".$_SESSION["total"],time()+31540000);
            }

            echo "<div class='alert alert-warning alert-dismissible fade show shadow-lg' role='alert'>";
            echo "<strong>Pedido realizado Correctamente!</strong> Puede ver sus anteriores pedidos en la tabla de abajo.";
            echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
            echo "<span aria-hidden='true'>&times;</span>";
            echo "</button>";
            echo "</div>";
        }


        
    ?>

    <div class="card text-center">
        <div class="card-header">
            <h1>Lista de Pedidos Realizados</h1>
        </div>
        <div class="card-body card-text">
            <table class="table table-striped">
                <tr>
                <th>Id</th>
                        <th>Fecha</th>
                    <th>Importe</th>
                </tr>
                <?php
            
                    $arrayHistorial = explode("*",$_COOKIE["historial"]);
                    for($i = count($arrayHistorial)-1; $i >= 0; $i--){
                        $datos = explode("-",$arrayHistorial[$i]);

                        echo "<tr>";
                        echo "<td>".$datos[0]."</td>";
                        echo "<td>".$datos[1]."</td>";
                        echo "<td>".$datos[2]."€</td>";
                        echo "</tr>";
                    }
            

                session_destroy();
                ?>
            </table>
            <a href="inicio.php" class="btn btn-primary">Volver al inicio</a>
        </div>
    </div>
    <!--Script de Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>