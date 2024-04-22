<?php

function formsCalculo(){
    echo '<form action="" method="get">';
    echo ' Primeiro Numero: <input name="num1" type="text" />';
    echo '<select name="operacao" id="operacao">';
    echo '<option value="soma">+</option>';
    echo '<option value="subtracao">-</option>';
    echo'<option value="multiplicacao">x</option>';
    echo'<option value="divisao">/</option>';
    echo'<option value="potencia">*</option>';
    echo'<option value="fatorial">!</option>';
    echo'</select>';
    echo'Segundo numero: <input name="num2" type="text" />';
    echo'<input type="submit" value="Calcular" />';
    echo'</form>';

    if(isset($_GET["num1"]) && isset($_GET["num2"]) && isset($_GET["operacao"])) {
        $a = $_GET["num1"];
        $b = $_GET["num2"];
        $op = $_GET["operacao"];
        $c = 0;
        if($op == "soma")
            $c = $a + $b;
        else if($op == "subtracao")
            $c = $a - $b;
        else if($op == "multiplicacao")
            $c = $a * $b;
        else if($op == "divisao")
            $c = $a / $b;
        else if($op == "potencia")
            
        echo "O resultado da operação é: $c";
    }
}





?>