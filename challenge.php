<?php

function formulario($metodo){

    echo "<form action=respostaGet.php method={$metodo}>";
     
    echo '<br><label>Nome: </label>';
    echo '<input type=text name="nome">';

    echo '<br><label>Email: </label>';
    echo '<input type=text name="email">';

    echo '<br><label>Senha: </label>';
    echo '<input type=text name="senha">';

    echo '<br><input type=submit name="Enviar">';
    echo '</form>';

  
}


formulario("get");



?>

<!-- if($metodo == "get" || $metodo == "GET" ) {

echo "<form action=respostaGet.php method={$metodo}>";

     
     echo "<br><label>".ucfirst($c).": </label>";
     echo "<input type=text name={$c}>";

 }

 echo "<br><input type=submit name=Enviar>";
 echo "</form>";

}else if($metodo == "post" || $metodo == "POST"){

 echo "<form action=respostaPost.php method={$metodo}>";

 foreach($campos as $c){
     
     echo "<br><label>".ucfirst($c).": </label>";
     echo "<input type=text name={$c}>";

 }

 echo "<br><input type=submit name=Enviar>";
 echo "</form>";
}else{
return "erro 404 =O";
} -->