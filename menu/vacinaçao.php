<?php 

include_once('../usuario/usuario.php');
include_once('../usuario/equino.php');

function calcularIdade($dataNasc) {
    $nascimento = new DateTime($dataNasc);
    $hoje = new DateTime();
    return $hoje->diff($nascimento)->y; // Retorna a diferença em anos
}

// Função para obter as vacinas de acordo com a idade do cavalo
function obterCalendarioVacinal($idade) {
    $calendario = [];

    if ($idade == 0) {
        $calendario = [
            "1ª Dose com 4 meses de idade",
            "2ª Dose 30 dias após a 1ª Dose",
            "Reforço Anual",
            "Subcutânea ou Intramuscular (ler a bula)"
        ];
    } elseif ($idade >= 1) {
        $calendario = [
            "Reforço Anual",
            "Subcutânea ou Intramuscular (ler a bula)"
        ];
    }

    return $calendario;
}

// Verifica se as doses foram aplicadas
$dosesAplicadas = isset($_POST['doses_aplicadas']) ? $_POST['doses_aplicadas'] : [];
$proximaDose = '';

if (in_array('primeira', $dosesAplicadas)) {
    $proximaDose = "Próxima dose: 2ª Dose em 30 dias.";
} elseif (in_array('segunda', $dosesAplicadas)) {
    $proximaDose = "Próxima dose: Reforço Anual.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Calendário Vacinal</title>
</head>

<body class="">
    <?php include "../nav.php"; ?>
    <?php
        $id = isset($_GET['id']) ? $_GET['id'] : 0; 
        $idadeCavalo = 0; // Inicialização da variável

        if ($id > 0) {
            $equinos = Equino::listar(1, $id);
            if (!empty($equinos)) { // Verifica se a lista não está vazia
                $equino = $equinos[0];
                $idadeCavalo = calcularIdade($equino->getDataNascEq());
            } else {
                // Tratamento se o equino não for encontrado
                echo "<p class='text-red-500 text-center'>Equino não encontrado.</p>";
            }
        }                                        
    ?>

    <div class="mt-8">
        <form action="../menu/perfilcvl.php" method="post" class="inline" enctype="multipart/form-data">
            <h1 class="text-3xl font-bold text-[#331107] text-center">Calendário Vacinal do Cavalo</h1>
            <h2 class="text-lg text-center">Idade do Cavalo: <?php echo $idadeCavalo; ?> anos</h2>
            <table class="min-w-full border-collapse border border-[#331107] mt-4">
                <thead>
                    <tr>
                        <th class="border border-[#331107] p-2">Vacinas Recomendadas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $vacinas = obterCalendarioVacinal($idadeCavalo);
                    foreach ($vacinas as $vacina): ?>
                        <tr>
                            <td class="border border-[#331107] p-2"><?php echo $vacina; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="mt-8">
            <h2 class="text-2xl font-bold text-[#331107] text-center">Aplicação de Vacinas</h2>
            <form method="post" class="mt-4">
                <div class="flex flex-col items-center">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="doses_aplicadas[]" value="primeira" class="form-checkbox text-[#331107]">
                        <span class="ml-2">1ª Dose Aplicada</span>
                    </label>
                    <label class="inline-flex items-center mt-2">
                        <input type="checkbox" name="doses_aplicadas[]" value="segunda" class="form-checkbox text-[#331107]">
                        <span class="ml-2">2ª Dose Aplicada</span>
                    </label>
                    <button type="submit" class="mt-4 bg-[#C49A8E] text-black rounded-md px-4 py-2 hover:bg-[#A8776D]">Confirmar</button>
                </div>
            </form>

            <?php if ($proximaDose): ?>
                <div class="mt-4 p-4 border border-[#331107] bg-[#E7CBB2] text-center">
                    <strong><?php echo $proximaDose; ?></strong>
                </div>
            <?php endif; ?>
        </div>
    </body>
</html>