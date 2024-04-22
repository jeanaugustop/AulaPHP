<?php

    echo "<h1> Aula 07</h1>";

    $str = "Janela";
    echo $str;

    $str[2] = "o";

    echo "<br>";

    echo $str;

    echo "<br>";

    echo $str[0] . "oão";

    echo "<br>";

    $tamanho = strlen($str);
    echo "Tamanho STR: " . $tamanho;

    echo "<br>";

    for ($i = 0; $i < $tamanho; $i++){
        echo "<br>" . $str[$i];
    }


    // "-"


    echo "<br><br> um teste legal";
    echo "<br> outro teste legal";

    echo "<br> olha \n essa srtring";
    echo '<br> olha essa \n outra string';

    echo "<br> kkkk ooi ";

    echo "<h3>Teclado parou de funcionar, procura formatacao string em php</h3>";

    $texto = "Aula Strings";

    function titulo($texto){
        
        echo "\n<br>";
        echo str_pad("", 30, "*"); 
        echo "\n<br>";
        echo str_pad($texto, 32, "*", STR_PAD_BOTH);
        echo "\n<br>";
        echo str_pad("", 30, "*");


    }

    titulo($texto);
    

    //1. Faça um programa que receba 2 strings e informe o conteúdo delas seguidodo seu comprimento. Informe também se as duas strings possuem o mesmocomprimento e são iguais ou diferentes no conteúdo.

    echo "<h2>Ex01 Comparacao Strings</h2>";
    $str1 = "Teste frase 1";
    $str2 = "Test3 frase 1";

    echo "a quantidade de letras texto 1: " . strlen($str1);
    echo "<br>";
    echo "a quantidade de letras texto 2: " . strlen($str2);

    echo "<br>";

    if(strlen($str1) == strlen($str2) && $str1 == $str2){
        echo "São enguais em tudo";
    }
    else if(strlen($str2) == strlen($str1)){
        echo "Enguais só em tamanho";
    }
    else{
        echo "Enguais em nada";
    }
    
    
    

?>