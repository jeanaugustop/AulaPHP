<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header style="background-color: lightblue">
        <ul>
            <a href=".././exercicios.php"><li>Exercícios PHP</li></a>
        </ul>
    </header>


    <h3>Faça um script que pede o raio de um círculo, e em seguida exiba o perímetro e a área
    do círculo. OBS: procure por um M_PI.</</h3>

    <form action="" method="get">
        <label for="raio">Informe o raio do círculo:</label>
        <input name="raio" id="raio" type="number">
        <button type="submit">Submit</button>
    </form>

    <?php 

    $raio = $_GET['raio'];

    
    $perimetro = 2 * 3.14 * $raio;
    $area = 3.14 * $raio * $raio;

    echo "Perímetro: {$perimetro}";
    echo "<br>Area: {$area}";

    

    ?>
</body>
</html>