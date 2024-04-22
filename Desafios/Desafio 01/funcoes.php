<?php

function formulario($metodo, ...$x){
    
    echo '<form action="" method="'. $metodo .'">';
    foreach($x as $camp){
    echo '<br><label for="">'.$camp .'</label>';
    echo '<input type="text" name ="'. $camp .'"id="">';
    }   

echo '<br><br><input type= "submit" value= "Submit">';
echo "</form>";

if ($metodo == "GET" && isset($_GET["nome"])) {
    validar_nome_usuario($_GET["nome"]);    
} elseif ($metodo == "POST" && isset($_POST["nome"])) {
    validar_nome_usuario($_POST["nome"]);
}
}

function validar_nome_usuario($nome){
    if (!preg_match('/^[a-zA-Z0-9]+$/', $nome)) {
        echo "NOME INVÁLIDO!!!<br>";
        return false;
    } else {
        echo "Nome Válido: ". $nome . "<br>";
        return true;
    }
}


function validar_email($email){
    if (preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
        echo "Endereço de e-mail válido!";
    } else {
        echo "Endereço de e-mail inválido!";
    }
}


?>