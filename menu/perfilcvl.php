<?php
session_start();
include_once('../usuario/usuario.php');
include_once('../usuario/equino.php');

// Função para calcular a idade do cavalo
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
    <title>Perfil do Cavalo</title>
</head>

<body class="">
    <?php include "../nav.php"; ?>
    <?php
        $id = isset($_GET['id']) ? $_GET['id'] : 0; 
        
        if ($id > 0) {
            $equinos = Equino::listar(1, $id)[0];  
        }                                        
    ?>
    <div class="max-w-2x2 mx-auto p-4 bg-white rounded-lg shadow-lg border-2 border-[#331107]">
        <div class="text-center mb-8">
            <h1 class="text-5xl font-bold text-[#331107]">Perfil do Meu Cavalo</h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
            <form action="../usuario/equino.php" method="post" class="inline" enctype="multipart/form-data">
                <div class="bg-[#E7CBB2] p-5 rounded-lg border-2 border-[#331107] mt-3">
                    <h2 class="text-lg font-semibold text-center"><?= isset($equinos) ? $equinos->getNomeEq() : ""; ?></h2>
                    <p class="font-semibold"><strong>ID:</strong> <?= isset($equinos) ? $equinos->getId() : ""; ?></p>
                    <p class="font-semibold"><strong>Data de Nascimento:</strong> <?= isset($equinos) ? $equinos->getDataNascEq() : ""; ?></p>
                    <p class="font-semibold"><strong>Pelagem:</strong> <?= isset($equinos) ? $equinos->getPelagem() : ""; ?></p>
                    <p class="font-semibold"><strong>Raça:</strong> <?= isset($equinos) ? $equinos->getRaca() : ""; ?></p>
                    <p class="font-semibold"><strong>Peso:</strong> <?= isset($equinos) ? $equinos->getPeso() : ""; ?></p>
                    <p class="font-semibold"><strong>Altura:</strong> <?= isset($equinos) ? $equinos->getAltura() : ""; ?></p>
                    <p class="font-semibold"><strong>Gênero:</strong> <?= isset($equinos) ? $equinos->getGeneroEq() : ""; ?></p>
                    <p class="font-semibold"><strong>Nome do Tutor:</strong> <?= isset($equinos) ? $equinos->getNomeTutor() : ""; ?></p>
                    <div class="flex justify-between mt-4">
                        <a href="../editar/editar_equino.php?id=<?= $equinos->getId() ?>" class="bg-[#C49A8E] text-black rounded p-2 hover:bg-[#A8776D]">Editar</a>
                        <input type="hidden" name="id" value="<?= $equinos->getId() ?>">
                        <button type="submit" name="acao" id="acao" value="excluir" class="bg-[#C49A8E] text-black rounded p-2 hover:bg-[#A8776D]">Excluir</button>
                    </div>
                </div>
            </form>
            <div class="flex justify-center md:justify-end mt-3">
                <img src="<?= isset($equinos) ? $equinos->getImg() : ''; ?>" alt="Imagem do Cavalo" class="w-auto h-auto rounded-lg border-2 border-[#331107]">
            </div>
        </div>
        <div class="flex justify-between mt-4">
            <a href="index.php" class="bg-[#C49A8E] rounded-md px-4 py-2 text-black hover:bg-[#A8776D] font-bold">Voltar ao Menu</a>
            <a href="vacinaçao.php" class="bg-[#C49A8E] rounded-md px-4 py-2 text-black hover:bg-[#A8776D] font-bold">Calendário Vacinal</a>
        </div>
    </div>
</body>
</html>