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

function calcularMedia($nome, $nota1, $nota2){

    $media = ($nota1 + $nota2) / 2;

    if($media >= 7){
        echo"<p>O aluno(a) {$nome} foi aprovado com {$media}.</p>";
    }else{
        echo"<p>O aluno(a) {$nome} foi aprovado com... melhor nao saber. ({media})</p>";
    }


}

calcularMedia("Arthur", 3.5, 7,0);


function somarNumeros(...$numeros){
    
    #echo print_r($numeros);
    
    $soma = 0;
    
    foreach($numeros as $num){
        $soma += $num;
    }

    echo"Soma: {$soma}";

}

somarNumeros(3,2,10,40,20,50);




?>
</body>
</html>