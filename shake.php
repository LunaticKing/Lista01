<?php
    $idioma = $_GET["idioma"];

    echo "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Shakespeare.jpg/300px-Shakespeare.jpg' alt=''>";
    echo "<br>";
    if ($idioma == "pt") {
        echo "\"Ser ou não ser? Eis a questão!\"";
    } else if($idioma ){
        echo "\"To be or not to be? That is the question!\"";
    }
    
?>