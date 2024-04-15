<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

echo "<h1>Bom dia</h1>";

    function formulario($metodo, ...$x){
    
        echo '<form action="resposta.php" method="'. $metodo .'">';
        foreach($x as $camp){
        echo '<br><label for="">'.$camp .'</label>';
        echo '<input type="text" name ="'. $camp .'"id="">';
        }   

    echo '<br><input type= "submit" value= "Submit">';
    echo "</form>";
}

formulario("get", "nome", "email" );


?>
</body>
</html>