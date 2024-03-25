<!DOCTYPE html>
<html lang="pt-br">
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

    <h3>Faça um script que peça um número e então mostre a mensagem:
     'O número informado foi [número]'</h3>

     <form action="" method="get">
        <label for="num">Digite um Número</label>
        <input type="number" name="num" id="num">
        <button type="submit">Submit</button>
     </form>

    <?php 
        
        $num = $_GET['num'];
        echo "<br>Número Thiagado: " . $num;

    ?>
</body>
</html>