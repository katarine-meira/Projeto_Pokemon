<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/pokemon-solid" rel="stylesheet">
    <link href="https://www.dafontfree.net/embed/cG9rZW1vbi1ob2xsb3ctbm9ybWFsJmRhdGEvMS9wLzQxMS9kYWhvdC5Qb2tlbW9uIEhvbGxvdy50dGY" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.cdnfonts.com/css/games" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Press Start 2P' rel='stylesheet'>
</head>

<body class="fundo">
    <header class= "">
            <div class="row container-fluid">
                <div class="col">
                    <img class ="fonte" src="pokemon/img/fonte2.png">
                </div>
            </div>
    </header>
    <div class="">
        <div class = "cad2">
            <h3 class = "title text-center">Crie seus treinadores</h3><br>
            <form method="post" action="classes/testes.php">
                <div class="alinha">
                    <input type="text" class="caixa3 text-center title2" name="nome1" placeholder="Jogador 1"  required><br>
                    <input type="text" class="caixa3 text-center title2" name="nome2" placeholder="Jogador 2" required ><br>
                    <div class="text-center">
                        <button class="butao formi title3" type="submit" name="valor">batalhar</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- <form method="get">
            <lable>Jogador 1</lable>
            <input type="text" name="num" placeholder="Digite aqui">
            <input type="submit" name="enviar" value="enviar">
        </form>      -->
    </div>
</body>
</html>