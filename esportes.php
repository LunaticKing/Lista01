<?php
    $esportes = $_GET["esportes"];

    foreach ($esportes as $atividade) {
        echo $atividade."<br>";
    }
?>