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
    <?php 
    
    echo "<h3>Me fale sua data de nascimento</h3>";

    echo "Dia : 05 <br> Mês: 10 <br> Ano: 2004";

    $dia = 5;
    $mes = 10;
    $ano = 2004;

    echo "<br><br>";

    echo "Seu aniversário é " . $dia . "/" . $mes . "/" . $ano;
    
    ?>
</body>
</html>