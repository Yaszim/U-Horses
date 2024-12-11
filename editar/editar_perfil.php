<!DOCTYPE html>
<html lang="en">
<?php
include_once('../usuario/usuario.php');

// Verifique se o ID foi passado

$id = isset($_GET['id']) ? $_GET['id'] : 0; 



?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Editar Perfil</title>
</head>
<body>
    <?php include "../nav.php"; ?>
    <div class="mx-10 items-center lg:px-8 p-2 bg-[#F4E9DF] rounded-2xl w-80% border-solid border-2 border-[#331107]">
        <div class="text-center items-center mt-4 mb-8 text-5xl font-bold leading-9 tracking-tight text-[#331107]">
            <h3>Editar seu Perfil</h3>
        </div>
        <form action="../usuario/usuario.php" method="post">
            <div class="grid grid-cols-3 grid-rows-2 mx-14 lg:px-6 p-12 bg-white rounded-2xl w-80% border-solid border-2 border-[#331107]">
                <input type="hidden" name="id" value="<?= isset($usuarioObj) ? $usuarioObj->getId():""; ?>">
                <div class="col-span-1 text-center items-center">
                    <div class="row-span-2">
                        <p class="mt-4 mb-1 font-bold leading-9 tracking-tight text-[#331107]">Alterar imagem de perfil</p>
                        <img class="inline-block w-15 rounded-full ring-2 ring-[#331107]" src="" alt="">
                    </div>
                </div>
                <div class="col-span-2 text-center items-center">
                    <div class="flex grid grid-cols-3 grid-rows-7 mx-8 lg:px-8 p-3 bg-white rounded-2xl w-80%">
                        <div class="flex ml-2 justify-between">
                            <div class="text-start items-start">
                                <label class="text-1xl font-semibold leading-6 text-[#331107]" for="usuario">Nome de Usuário</label>
                                <div class="mt-2.5">
                                    <input type="text" name="usuario" id="usuario" value="<?= isset($usuarioObj) ? $usuarioObj->getLogin()->getUsuario() : ""; ?>"class="block rounded-md border-0 px-3.5 py-1 lg:px-12 text-red-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                        <div class="flex ml-28 justify-between">
                            <div class="text-start items-start">
                                <p class="text-1xl font-semibold leading-6 text-[#331107]">Nome Completo</p>
                                <div class="mt-2.5">
                                    <input type="text" name="nome" id="nome" value="<?= isset($usuarioObj) ? $usuarioObj->getNome():""; ?>" class="block rounded-md border-0 px-3.5 py-1 lg:px-12 text-red-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                        <div class="flex col-span-2 text-center item-center">
                            <div class="flex ml-2 justify-between">
                                <div class="text-start items-start">
                                    <label for="email" class="text-1x1 font-semibold leading-6 text-[#331107]">E-mail</label>
                                    <div class="mt-2.5">
                                        <input type="text" name="email" id="email" value="<?= isset($usuarioObj) ? $usuarioObj->getEmail():""; ?>" class="block rounded-md border-0 px-3.5 py-1 lg:px-12 text-red-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                            </div>
                            <div class="flex ml-8 justify-between">
                                <div class="text-start items-start">
                                    <p class="text-1x1 font-semibold leading-6 text-[#331107]">Data de Nascimento</p>
                                    <div class="mt-2.5">
                                        <input type="date" name="dataNasc" id="dataNasc" value="<?= isset($usuarioObj) ? $usuarioObj->getDataNasc():""; ?>" class="block rounded-md border-0 px-3.5 py-1 lg:px-12 text-red-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex col-span-2 justify-between">
                            <div class="text-start items-start">
                                <label for="genero" class="text-1x1 font-semibold leading-6 text-red-950">Gênero</label>
                                <div class="mt-2.5">
                                    <select id="genero" name="genero" class="rounded-md border-0 bg-transparent px-3.5 py-1 lg:px-2 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm">
                                        <option value="Feminino" <?php if(isset($usuarioObj) && $usuarioObj->getGenero() == 'Feminino') echo 'selected'; ?>>Feminino</option>
                                        <option value="Masculino" <?php if(isset($usuarioObj) && $usuarioObj->getGenero() == 'Masculino') echo 'selected'; ?>>Masculino</option>
                                        <option value="Outro" <?php if(isset($usuarioObj) && $usuarioObj->getGenero() == 'Outro') echo 'selected'; ?>>Outro</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex col-span-3 justify-between">
                            <div class="mt-2.5">
                                <label for="senha" class="block text-sm font-semibold leading-6 text-red-950">Alterar Senha</label>
                                <div class="mt-1">
                                    <input type="password" name="senha" id="senha" value="" class="block h-10 rounded-md border-0 py-0 pl-4 pr-9 px-3.5 py-2 text-red-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                    
                        <div class="justify-items-end text-end align-end items-end">
                            <button type="submit" name="acao" id="acao" value="salvar" class="bg-[#E7CBB2] w-50 mt-11 rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-red-950 shadow-sm hover:bg-[#56291C]">ALTERAR</button>
                            <button type="submit" name="acao" id="acao" value="excluir" class="bg-[#E7CBB2] w-50 mt-11 rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-red-950 shadow-sm hover:bg-[#56291C]">EXCLUIR</button>
                            <button type="reset" class="bg-[#E7CBB2] w-50 mt-11 rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-red-950 shadow-sm hover:bg-[#56291C]">VOLTAR</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>