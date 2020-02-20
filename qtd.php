<?php
    $quantidade = $_GET["quantidade"];
    
    echo "<table><tr>";
    for ($i=1; $i <= $quantidade; $i++) { 
        echo "<td><img src='https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Instagram-Icon.png/240px-Instagram-Icon.png' class='icone'></td>";
    }
    echo "</table></tr>"
?>

<style>
    .icone{
        height: 60px;
    }
</style>