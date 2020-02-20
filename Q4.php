<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 4</title>
</head>
<body>
    <label for="esportes">Qual(is) esporte(s) pratica?</label><br>
    <form action="esportes.php" method="get">
        <input type="checkbox" name="esportes[]" id="" value="Vôlei">Vôlei<br>
        <input type="checkbox" name="esportes[]" id="" value="Futebol">Futebol<br>
        <input type="checkbox" name="esportes[]" id="" value="Basquete">Basquete<br>
        <input type="checkbox" name="esportes[]" id="" value="Natação">Natação<br>
        <input type="checkbox" name="esportes[]" id="" value="Outro...">Outro...<br><br>
        <input type="submit" value="Concluir">
    </form>
</body>
</html>