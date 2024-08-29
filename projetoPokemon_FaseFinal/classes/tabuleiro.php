<?php


require "baralho.php";
require "jogador.php";
class Tabuleiro{
    public $baralho;
    public $j1; 
    public $j2;
    public $maoJ1; 
    public $maoJ2; 
    public function __construct($nome1, $nome2){ 

        $this->baralho = new Baralho;
        $this->baralho->criaBaralho();

        $this->j1 = new Jogador($nome1);
        $this->maoJ1 = $this->baralho->criaMao();
        $this->j1->cartas = $this->maoJ1;


        $this->j2 = new Jogador($nome2);
        $this->maoJ2 = $this->baralho->criaMao();
        $this->j2->cartas = $this->maoJ2;
    }
    public function getBaralho(){
        $this->baralho->mostraBaralho();
    }
    public function getmaoJ1(){
        foreach($this->j1->cartas as $indice => $objeto){
            echo "<br><br>carta " . $indice + 1 . ":<br>";
            echo "nome: " . $objeto->pokemon->nome;
            echo "<br>";
            echo "tipo: " . $objeto->pokemon->tipo;
            echo "<br>";
            echo "nivel:" . $objeto->pokemon->nivel;
            echo "<br>";
            echo "foto:" . $objeto->pokemon->foto;
        }
}
    public function getmaoJ2(){
        foreach($this->j2->cartas as $indice => $objeto){
            echo "<br><br>carta " . $indice + 1 . ":<br>";
            echo "nome: " . $objeto->pokemon->nome;
            echo "<br>";
            echo "tipo: " . $objeto->pokemon->tipo;
            echo "<br>";
            echo "nivel:" . $objeto->pokemon->nivel;
            echo "<br>";
            echo "foto:" . $objeto->pokemon->foto;
        }
    }
    public function iniciarBatalha(){
        $this->j1->realizarBatalha($this->j2);
    }
    public function resumoBatalhaTabuleiro(){
        $this->j1->resumoBatalhaJogador($this->j2);
    }
    
}
