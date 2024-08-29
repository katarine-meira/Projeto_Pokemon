<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CartaPokemon</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/pokemon-solid" rel="stylesheet">
    <link href="https://www.dafontfree.net/embed/cG9rZW1vbi1ob2xsb3ctbm9ybWFsJmRhdGEvMS9wLzQxMS9kYWhvdC5Qb2tlbW9uIEhvbGxvdy50dGY" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.cdnfonts.com/css/games" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Press Start 2P' rel='stylesheet'>
</head>
<body class ="fundo2"><?php

?>
    <header class= "">
            <div class="row container-fluid">
                <div class="col">
                    <img class ="fonte" src="../pokemon/img/fonte2.png">
                </div>
            </div>
    </header>
    <div class="abas">
        <nav>
            <a class="link aba" href="#aba1">pvp 1</a>
            <a class="link aba" href="#aba2">pvp 2</a>
            <a class="link aba" href="#aba3">pvp 3</a>
            <a class="link aba" href="#aba4">pvp 4</a>
            <a class="link aba" href="#aba5">pvp 5</a>
            <a class="link aba" href="#aba6">pvp 6</a>
            <a class="link aba" href="#aba7">resumo</a>
        </nav>
<?php
require "pokemon.php";
class cartaPokemon
{

    public $pokemon;
    public $contadorCartas = 0;
    public $contadorId = 1;

    public function __construct($n, $ni, $t, $f)
    {
        $this->pokemon = new Pokemon($n, $ni, $t, $f);
    }
    public function exibirCarta()
    {
        return $this->pokemon;
    }
    public function batalhar($j1, $j2)
    {
        $partidaFinalizada = false; // variavel feita pra controlar o laço do while
        while ($partidaFinalizada == false) {  // enquanto partidaFinalizada for false (a partida ainda n acabou) o laço continua
                ?>
                
                <div id= "aba<?php echo $this->contadorId;?>" class = "cad3">
                <?php
                echo "<h1 class='font text-center'>Batalha " . $this->contadorCartas + 1 . " </h1>
                        <div class='row'>
                            <div class='col text-center'>
                                <h3 class='jogador'>". $j1->nome ."</h3>
                            </div>
                            <div class='col text-center'>
                                <h3 class='jogador'>". $j2->nome ."</h3>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col margin'>
                                <img class='inverter fotos' src='".$j1->cartas[$this->contadorCartas]->pokemon->foto."'><br>
                                <div class='atributos'>
                                    <div class='row'>
                                        <div class='col'>
                                            <h3 class='nome'>".$j1->cartas[$this->contadorCartas]->pokemon->nome ."</h3>
                                            <h3 class='tipo'>".$j1->cartas[$this->contadorCartas]->pokemon->tipo ."</h3>
                                        </div>
                                        <div class='col'>
                                            <div class='nivel text-center'>
                                                <h3> LV<br>" . $j1->cartas[$this->contadorCartas]->pokemon->nivel ."</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='col centerVs'>
                                <h1 class='vs'>VS</h1>
                            </div>
                            <div class='col margin2'>
                                <img class='fotos2' src='".$j2->cartas[$this->contadorCartas]->pokemon->foto."'><br>
                                <div class='atributos2'>
                                    <div class='row'>
                                        <div class='col'>
                                            <div class='nivel2 text-center'>
                                                <h3 > LV<br>" . $j2->cartas[$this->contadorCartas]->pokemon->nivel ."</h4>
                                            </div>
                                        </div>
                                        <div class='col'>
                                            <h3 class='nome2'>".$j2->cartas[$this->contadorCartas]->pokemon->nome ."</h3>
                                            <h3 class='tipo2'>".$j2->cartas[$this->contadorCartas]->pokemon->tipo ."</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>";
                //entra aqui se o jogador 1 ganhou o embate
                if ($j1->cartas[$this->contadorCartas]->pokemon->nivel > $j2->cartas[$this->contadorCartas]->pokemon->nivel) {
                    $j1->pokemonsVencedores[] = $j1->cartas[$this->contadorCartas];
                    $j2->partidasPerdidas++;
                    echo "<br><h3 class='title text-center'>".$j1->cartas[$this->contadorCartas]->pokemon->nome . " LV " . $j1->cartas[$this->contadorCartas]->pokemon->nivel . " de " . $j1->nome .
                    " ganhou!</h3>";

                    $j1->removeCarta($this->contadorCartas);
                    $j2->removeCarta($this->contadorCartas);
                    ?>
                    </div>
                    <?php

                } //entra aqui se o embate deu empate
                elseif ($j1->cartas[$this->contadorCartas]->pokemon->nivel == $j2->cartas[$this->contadorCartas]->pokemon->nivel) {
                    echo "<br><h3 class='title text-center'>empate!</h3>";
                    $j1->removeCarta($this->contadorCartas);
                    $j2->removeCarta($this->contadorCartas);
                    ?>
                    </div>
                    <?php
                } //entra aqui se o jogador 2 ganhou o embate
                else {
                    $j2->pokemonsVencedores[] = $j2->cartas[$this->contadorCartas];
                    $j1->partidasPerdidas++;
                    echo "<br><h3 class='title text-center'>".$j2->cartas[$this->contadorCartas]->pokemon->nome . " LV " . $j2->cartas[$this->contadorCartas]->pokemon->nivel . " de " . $j2->nome .
                        " ganhou!</h3>";
                    $j1->removeCarta($this->contadorCartas);
                    $j2->removeCarta($this->contadorCartas);
                    ?>
                    </div>
                    <?php
                }
                // essa variavel serve para mudar cada embate, a medida que o while vai rodando
                // basicamente a lógica dos embates se baseia nesse contador: o laço é iniciado, fazendo o embate da
                // primeira carta de cada jogador, ao final do laço (aqui) esse contador se auto incrementa, fazendo
                // com que o próximo laço execute o embate da segunda carta de cada jogador, e assim por diante, até o laço acabar
                $this->contadorCartas++;
                $this->contadorId++;
                
                // esse if verifica se quaisquer uma das condições de finalização da batalha é verdadeira
                if (count($j1->pokemonsVencedores) >= 4 || count($j2->pokemonsVencedores) >= 4 || count($j1->cartas) == 0) {
                    $partidaFinalizada = true; // se ele define aqui como true, o laço acaba pq a condição do while vira falsa
                }
        }

    }


    public function resumoBatalha($j1, $j2){ // após o término, essa função verfica quem ganhou
        ?>
        <div id= "aba7" class = "cad3">
        <?php
            if (count($j1->pokemonsVencedores) >= 4) { // entra aqui se o jogador 1 ganhou 4 ou mais partidas
                echo "<h1 class='font text-center'>Resumo das batalhas</h1><br>
                        <div class='faixa text-center'>
                            <h3>".$j1->nome." ganhou de ".$j2->nome."</h3>
                            <h2>Com os seguintes pokemons:</h2>
                        </div><br>";
                        echo "<div class='row'>";
                                foreach ($j1->pokemonsVencedores as $carta) {
                                echo "  <div class='col test'>
                                            <div class='row vencedores'> 
                                                <div class='col'>
                                                    <img class='tamFoto' src=" . $carta->pokemon->foto ."><br>
                                                </div>
                                                <div class='col'>
                                                    <h3 class='nomeResumo'>".$carta->pokemon->nome."</h3>
                                                    <h3 class='tipoResumo'>". $carta->pokemon->tipo."</h3>
                                                </div>
                                                <div class='col text-center'>
                                                    <h3 class='tamNivel'>LV<br>".$carta->pokemon->nivel."</h3>
                                                </div>
                                            </div><br>
                                        </div>";
                                }
                                echo "</div>";
            }
            elseif (count($j1->cartas) == 0) { // entra aqui se a partida acabou porque as cartas acabaram

                // se as cartas acabaram, significa que nenhum jogador ganhou efetivamente
                // as condições a seguir verficam qual jogador ganhou mais partidas, ou se ambos ganharam a mesma quantidade

                if (count($j1->pokemonsVencedores) > count($j2->pokemonsVencedores)) { 
                    // entra aqui se o jogador 1 ganhou mais partidas que o jogador 2
                    echo "<h1 class='font text-center'>Resumo das batalhas</h1><br>
                            <div class='faixa text-center'>
                                <h3>".$j1->nome." ganhou de ".$j2->nome."</h3>
                                <h2>Com os seguintes pokemons:</h2>
                            </div><br>";
                            echo "<div class='row'>";
                                    foreach ($j1->pokemonsVencedores as $carta) {
                                    echo "  <div class='col test'>
                                                <div class='row vencedores'> 
                                                    <div class='col'>
                                                        <img class='tamFoto' src=" . $carta->pokemon->foto ."><br>
                                                    </div>
                                                    <div class='col'>
                                                        <h3 class='nomeResumo'>".$carta->pokemon->nome."</h3>
                                                        <h3 class='tipoResumo'>". $carta->pokemon->tipo."</h3>
                                                    </div>
                                                    <div class='col text-center'>
                                                        <h3 class='tamNivel'>LV<br>".$carta->pokemon->nivel."</h3>
                                                    </div>
                                                </div><br>
                                            </div>";
                                    }
                                    echo "</div>";
                }
                elseif (count($j1->pokemonsVencedores) == count($j2->pokemonsVencedores)) {
                    // entra aqui se os dois jogadores ganharam a mesma quantidade de partidas
                    echo "<h1 class='font text-center'>Resumo das batalhas</h1><br>
                            <div class='faixa text-center'>
                                <h3>ambos os jogadores ganharam a mesma quantidade de embates, houve um empate!</h3>
                            </div>
                            <div class='row'>
                        ";
                }
                else { // entra aqui se o jogador 2 ganhou mais partidas que o jogador 1
                    echo "<h1 class='font text-center'>Resumo das batalhas</h1><br>
                            <div class='faixa text-center'>
                                <h3>".$j2->nome." ganhou de ".$j1->nome."</h3>
                                <h2>Com os seguintes pokemons:</h2>
                            </div><br>";
                            echo "<div class='row'>";
                                    foreach ($j2->pokemonsVencedores as $carta) {
                                    echo "  <div class='col test'>
                                                <div class='row vencedores'> 
                                                    <div class='col'>
                                                        <img class='tamFoto' src=" . $carta->pokemon->foto ."><br>
                                                    </div>
                                                    <div class='col'>
                                                        <h3 class='nomeResumo'>".$carta->pokemon->nome."</h3>
                                                        <h3 class='tipoResumo'>". $carta->pokemon->tipo."</h3>
                                                    </div>
                                                    <div class='col text-center'>
                                                        <h3 class='tamNivel'>LV<br>".$carta->pokemon->nivel."</h3>
                                                    </div>
                                                </div><br>
                                            </div>";
                                    }
                                    echo "</div>";
                }
            }
            else { // entra aqui se o jogador 2 ganhou 4 ou mais partidas
                echo "<h1 class='font text-center'>Resumo das batalhas</h1><br>
                            <div class='faixa text-center'>
                                <h3>".$j2->nome." ganhou de ".$j1->nome."</h3>
                                <h2>Com os seguintes pokemons:</h2>
                            </div><br>";
                            echo "<div class='row'>";
                                    foreach ($j2->pokemonsVencedores as $carta) {
                                    echo "  <div class='col test'>
                                                <div class='row vencedores'> 
                                                    <div class='col'>
                                                        <img class='tamFoto' src=". $carta->pokemon->foto ."><br>
                                                    </div>
                                                    <div class='col'>
                                                        <h3 class='nomeResumo'>".$carta->pokemon->nome."</h3>
                                                        <h3 class='tipoResumo'>". $carta->pokemon->tipo."</h3>
                                                    </div>
                                                    <div class='col text-center'>
                                                        <h3 class='tamNivel'>LV<br>".$carta->pokemon->nivel."</h3>
                                                    </div>
                                                </div><br>
                                            </div>";
                                    }
                                    echo "</div>";
            }
        ?>
        </div>
        <?php
    }
}

?>

<script>
    window.addEventListener('load',()=>{
        document.querySelectorAll('.abas nav a').forEach((a)=>{
            a.addEventListener('click',()=>{
                let f=a.parentNode.querySelector('a.focus')
                if(f)f.classList.remove('focus')
                a.classList.add('focus')
            })
        })
        if(location.hash){
            document.querySelector('a[href="'+location.hash+'"]').classList.add('focus')
        }
    })
</script>
</body>
</html>
