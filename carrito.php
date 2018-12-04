<?php
    session_start();

    $producto = $_POST["product"];
    $cantidad = $_POST["cantidad"];

    $_SESSION["Productos"] = $producto."-".$cantidad;

    echo $_SESSION["Productos"];
?>