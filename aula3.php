<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="get">
        <label for="ano">Ano</label>
        <input type="number" name="ano" id="ano">
        <button type="submit">Submit</button>
     </form>

<?php

    $ano = $_GET['ano'];
    $idade = 2024 - $ano;

    echo "Ano: {$ano} / Idade: {$idade}";

    if($idade > 18){
        echo "<br>Parabens voce pode votar e dirigir! VELHO KKKKKKKKK";
    }

    else if($idade == 18){
        echo "<br>Vai virar luiz kkkkkkkkkkkkkkkk";
    }

    else if($idade >= 16 && $idade < 18){
        echo "<br>Pode votar kk, mas dirigir nao";
    }

    else{

        echo"<br>Pode fazer nada AHAHAHAHAHHAHAH";
    }

?>

</body>
</html>