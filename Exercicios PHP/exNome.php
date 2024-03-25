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
    
    echo "<H3>Qual é o seu nome?</H3>";
    echo "Oi, meu nome é Jean";
    $nome = "Jean";
    echo "<br>";
    echo "<br>";
    echo "Olá " . $nome . ", Seja bem vindo";

    ?>
</body>
</html>