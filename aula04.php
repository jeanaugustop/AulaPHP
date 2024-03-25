<!-- 15. Faça um Programa que peça os 3 lados de um triângulo. 
O programa deverá informar se os valores podem ser um triângulo. 
Indique, caso os lados formem um triângulo, se o mesmo é: equilátero, isósceles ou escaleno. 
Dicas: 
a. Três lados formam um triângulo quando a soma de quaisquer dois lados formaior que o terceiro;
b. Triângulo Equilátero: três lados iguais;
c. Triângulo Isósceles: quaisquer dois lados iguais;
d. Triângulo Escaleno: três lados diferentes; -->

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

    echo "<h2> aula 4 - for </h2>";

    for($i = 0; $i < 10; $i++){
        echo "VSFD THIAGO KKKKKKKKKKKKKKKKKK<BR>";
    }

    echo "<h3>While ---</h3>";

    echo "<BR>-------0 a 50:--------<BR>";
    $i = 0;
    while($i <= 50){

        echo " zx{$i} -";

        $i += 2;
    }

?>
    

</body>
</html>