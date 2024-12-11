<?php
require_once("database.class.php");
require_once("equino.class.php");

// ID do cavalo, pode ser passado por GET ou POST
 // Exemplo estático, substitua pela lógica de obtenção do ID
 $id =  isset($_GET['id'])?$_GET['id']:0; 
// Buscar dados do cavalo
$equino = Equino::buscaCavaloPorId($id);
if (!$equino) {
    die("Cavalo não encontrado.");
}

// Calculando a idade do cavalo
$dataNascEq = $equinos->getDataNascEq();
$idadeCavalo = calcularIdade($dataNascEq);

// Função para calcular a idade do cavalo
function calcularIdade($dataNasc) {
    $nascimento = new DateTime($dataNasc);
    $hoje = new DateTime();
    return $hoje->diff($nascimento)->y;
}

// Obter vacinas atribuídas e pendentes
list($vacinasAtribuidas, $vacinasPendentes) = obterVacinas($idadeCavalo);

function obterVacinas($idade) {
    $vacinasAtribuidas = [];
    $vacinasPendentes = [];

    // Vacinas atribuídas com base na idade
    if ($idade >= 3) {
        $vacinasAtribuidas[] = ["nome" => "RAIVA", "data" => "08/12/2023"];
    }

    // Vacinas pendentes
    if ($idade < 1) {
        $vacinasPendentes[] = ["nome" => "TETANO", "data" => "08/12/2023"];
    } elseif ($idade == 1) {
        $vacinasPendentes[] = ["nome" => "LEPTOSPIROSE", "data" => "08/12/2023"];
    } elseif ($idade == 2) {
        $vacinasPendentes[] = ["nome" => "HERPESVIRUS", "data" => "08/12/2023"];
    }

    return [$vacinasAtribuidas, $vacinasPendentes];
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário Vacinal Equino</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            display: flex;
            justify-content: space-between;
        }
        .box {
            width: 45%;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        .vacina {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 10px 0;
        }
        .botao {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
        }
        .botao:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Calendário Vacinal do Cavalo</h1>
    <div class="container">
        <div class="box">
            <h2>Vacinas Atribuídas</h2>
            <?php foreach ($vacinasAtribuidas as $vacina): ?>
                <div class="vacina">
                    <span><?php echo $vacina["nome"]; ?></span>
                    <span><?php echo $vacina["data"]; ?></span>
                    <button class="botao">ABRIR</button>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="box">
            <h2>Vacinas Pendentes</h2>
            <?php foreach ($vacinasPendentes as $vacina): ?>
                <div class="vacina">
                    <span><?php echo $vacina["nome"]; ?></span>
                    <span><?php echo $vacina["data"]; ?></span>
                    <button class="botao">ABRIR</button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>