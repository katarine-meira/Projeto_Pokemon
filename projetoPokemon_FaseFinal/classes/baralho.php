
<?php 
require "cartaPokemon.php";

class Baralho {
   public $nivelPokemon = array(); 
   public $nomesPokemon; 
   public $fotoPokemon; 
   public $tipoPokemon; 
   public $vetorPokemons;
    public function __construct(){
        $this->nomesPokemon = array("pikachu", "bubassauro", "snorlax", "charmander", "squirtle", "caterpie",
        "butterfree", "pidgey", "rattata", "ekans", "sandshrew", "clefairy", "abra", "cubone", "mewtwo");
        
        $this->tipoPokemon = array("raios", "planta", "normal", "fogo", "água", "inseto",
        "inseto", "normal", "normal", "venenoso", "chão", "fada", "psiquico", "chão", "psiquico");

        for($i = 0; $i < count($this->nomesPokemon); $i++){
            $this->fotoPokemon[] = "../images/" . $this->nomesPokemon[$i] . ".svg";
            $this->nivelPokemon[] = rand(1, 20);
        }
    }
    public function criaBaralho(){
        foreach($this->nivelPokemon as $indice => $valor){
            $this->vetorPokemons[] = new cartaPokemon($this->nomesPokemon[$indice], $this->nivelPokemon[$indice], $this->tipoPokemon[$indice], $this->fotoPokemon[$indice]);
        }
        return $this->vetorPokemons;
    }
    public function mostraBaralho(){
        foreach($this->vetorPokemons as $indice){
            echo "<br>";
            echo "nome: " . $indice->pokemon->nome . ", tipo: " . $indice->pokemon->tipo . ", nivel: " .$indice->pokemon->nivel . ", foto: " . $indice->pokemon->foto;
            echo "<br>";
        }
    }

    public function criaMao(){
        $qtdMao = 6;
        $mao = array();
        shuffle($this->vetorPokemons);
        for($i = 0; $i < $qtdMao; $i++){
            $mao[] = $this->vetorPokemons[$i];
            unset($this->vetorPokemons[$i]);
        }
        return $mao;
    }
}