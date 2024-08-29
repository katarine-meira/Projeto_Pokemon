<?php
require "tabuleiro.php";

if(isset($_POST["valor"])){ // recuperando os nomes dos jogadores
    $nomej1 = $_POST["nome1"];
    $nomej2 = $_POST["nome2"];
}
else{ // se não foi colocado nenhum nome via o "login", os nomes dos jogadores assumem os valores padrão abaixo:
    $nomej1 = "guiga";
    $nomej2 = "katiane";
}
$t1 = new Tabuleiro($nomej1, $nomej2);
// OBS: necessário seguir a ordem a seguir para o código funcionar
$t1->iniciarBatalha();
// echo "oi";
// var_dump($t1->j1->pokemonsVencedores[0]->getContador());
$t1->resumoBatalhaTabuleiro();
