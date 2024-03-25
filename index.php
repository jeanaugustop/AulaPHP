<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2/</title>
</head>
<body>
    <header style="background-color: yellow;">
        <ul>
            <a href="./index.html"><li>Menu</li></a>
            <a href="./index.php"><li>PHP</li></a>
            <a href="./exercicios.php"><li>Exercícios PHP</li></a>
            <a href="./exercicios2.php"><li>Exercícios PHP Lista 2</li></a>
            <a href="./exercicios3.php"><li>Exercícios PHP Lista 3</li></a>

        </ul>
    </header>
    
    <?php 

        $nome = "Jean";
        $idade = 19;
        $cidade = "Curitiba";
        $faculdade = true;

        if($faculdade == true){
            $faculdade = "Positivo";
        }


        echo "Olá Mundo";
        echo "<br>";
        echo "Nome: " . $nome . " - <br> ";
        echo "Idade: " . $idade . " - <br>";
        echo "Cidade: " . $cidade . " - <br>";
        echo "Faculdade: " . $faculdade . " - <br>";


    

    ?>
</body>
</html>