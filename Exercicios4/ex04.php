<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header style="background-color: lightblue">
        <ul>
            <a href=".././exercicios.php"><li>Exercícios PHP</li></a>
        </ul>
    </header>

<h2>Faça um programa que tenha um vetor de 5 numeros inteiros e mostre-os</h2>
<?php

$array = [];

echo '<form action="" method="get">';

for($i = 0; $i < 5; $i++){
    echo "

        <br>
        <label for='num{$i}'>Informe o numero</label>
        <input name='num{$i}' type='number'>";
       
        
} 

echo '<br><button type="submit">Submit</button><br></form>';
for($i = 0; $i < 5; $i++){
  
    $num[$i]= $_GET["num{$i}"];
    array_push($array, $num[$i]);

} 


echo "<br>Numeros:<br>";


foreach ($array as $numero){
    echo "$numero ";
}

?>
    
</body>
</html>