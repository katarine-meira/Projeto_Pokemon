<?php
// require "cartaPokemon.php";
class Jogador{
    public $nome;
    public $cartas = array();
    public $partidasPerdidas = 0;
    public $pokemonsVencedores = array();

    public function __construct($nome){
        $this->nome = $nome;
    }

    public function removeCarta($carta){ // integer param
        unset($this->cartas[$carta]);
    }
    public function getNome(){
        return $this->nome;
    }
    public function getPartidasPerdidas(){
        return $this->partidasPerdidas;
    }
    public function realizarBatalha($j2){
        $this->cartas[0]->batalhar($this, $j2);
    }
    public function resumoBatalhaJogador($j2){
        if(count($this->pokemonsVencedores) == 0){
            $j2->pokemonsVencedores[0]->resumoBatalha($this, $j2);
        } else {
            $this->pokemonsVencedores[0]->resumoBatalha($this, $j2);
        }
    }
}