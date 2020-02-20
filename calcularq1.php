<?php
    $base = $_GET['base'];
    $altura = $_GET['altura'];

    $area = ($base)*($altura);
    $perimetro = (2*$base)+(2*$altura);

    header("Location: Q1.php?area=$area&perimetro=$perimetro");
?>