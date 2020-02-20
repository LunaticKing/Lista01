<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Questão 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Q1.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="calcularq1.php" method="get">
        <label for="base">Base:</label>
        <input type="number" name="base" class="retangulo">
        <label for="altura">Altura:</label>
        <input type="number" name="altura" class="retangulo">

        <input type="submit" value="Calcular"><br><br>

        <label for="area">Área:</label><br>
        <input type="number" name="area" value="<?php echo (isset($_GET['area'])?$_GET['area']:'');?>"><br>

        <label for="perimetro">Perímetro:</label><br>
        <input type="number" name="perimetro" value="<?php echo (isset($_GET['perimetro'])?$_GET['perimetro']:'');?>">
    </form>
</body>
</html>


<?php
    
?>