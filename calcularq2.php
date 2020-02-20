<?php
    $altura = $_GET["altura"];
    $peso = $_GET["peso"];

    $imc = $peso/(pow($altura, 2));

    if ($imc>25) {
        echo "Você está acima do peso!";
        echo "<img src='https://abrilexame.files.wordpress.com/2016/09/size_960_16_9_obesidade1.jpg?quality=70&strip=info&w=412'>";
    } else {
        echo "Você está saudável!";
        echo "<img src='https://www.mundoboaforma.com.br/wp-content/uploads/2016/06/dieta-e-exercicios-saudaveis-e1465925719462.jpg'>";
    }
    
?>