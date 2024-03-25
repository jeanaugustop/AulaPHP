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

    <h3>Faça um script que peça dois números e imprima a soma.</h3>

    <form action="" method="get">
        
        <label for="num1">Informe o numero 1:</label>
        <input name="num1" id="num1" type="number">

        <label for="num2">Informe o numero 2:</label>
        <input name="num2" id="num2" type="number">

        <button type="submit">Submit</button>
    </form>

    <?php 
    $raio = $_GET['num1'];
    $raio = $_GET['num2'];

    $total = $num1 + $num2;

    echo "A soma dos 2 números é: " . $total;

    ?>
</body>
</html>

