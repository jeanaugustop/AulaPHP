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
    
    <form action="" method="get">
        <label for="sexo">Sexo do bebe</label>
        <input type="text" name="sexo" id="sexo">

        <button type="submit">Enviar</button>
   </form>

<?php

    $sexo = $_GET['sexo'];

    switch($sexo){

        case 'M':
            echo "<br>Masculino";
            break;
        
        case 'F':
            echo "<br>Feminino";
            break;

        default:
            echo "<br>Opção Inválida";
            break;

    }


?>

</body>
</html>