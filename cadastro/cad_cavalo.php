
<!DOCTYPE html>
<html lang="en">
<?php  
include_once('../usuario/equino.php'); 
include_once('../usuario/usuario.php');
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Cadastro Equino</title>
</head>
<body>
    <?php include "../nav.php"; ?>
    <div class="mx-8 items-center lg:px-4 bg-[#F4E9DF] rounded-2x1 w-80% border-solid border-2 border-[#331107]">
        <div class="text-center items-center mt-6 mb-8 text-5xl font-bold leading-9 tracking-tight text-[#331107]">
            <h3>Cadastre seu equino</h3>
        </div>
        <form action="../usuario/equino.php" method="POST" enctype="multipart/form-data">
        <div class="flex grid grid-cols-3 grid-rows-1 mx-16 lg:px-8 p-3 bg-white rounded-2x1 w-80% border-solid border-2 border-[#331107]">
            <div class="col-span-1 text-center items-center">
                <div class="row-span-1">
                    <label for="img" class="mt-4 mb-1 font-bold leading-9 tracking-tight text-[#331107]">Adicionar Imagem do cavalo:</label>
                    <input type="file" name="img" id="img" class="border rounded p-2 w-full mb-2">
                </div>
            </div>
            <div class="col-span-2 text-center items-center ">
                <div class="flex grid grid-cols-3 grid-rows-1 mx-8 lg:px-8 p-3 bg-white rounded-2x1 w-80%">
                    <div class="flex ml-2 justify-between">
                        <div class="text-start items-start">
                            <p class="text-1xl font-semibold leading-6 text-[#331107]">Nome do equino</p>
                            <div class="mt-2.5">
                                <input type="text" name="nomeEq" id="nomeEq" class=" flex rounded-md border-0 px-3.5 py-1 lg:px-12 text-red-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>
                    <div class="flex ml-28 justify-between">
                        <div class="text-start items-start">
                            <p class="block text-sm font-semibold leading-6 text-red-950">Data de nascimento</p>
                            <div class="mt-2.5">
                                <input type="date" name="dataNascEq" id="dataNascEq" class="flex rounded-md border-0 px-3.5 py-1 lg:px-12 text-red-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex grid grid-cols-3 grid-rows-1 mx-8 lg:px-8 p-3 bg-white rounded-2x1 w-80%">
                    <div class="flex ml-2 justify-between">
                        <div class="text-start items-start">
                            <p class="text-1xl font-semibold leading-6 text-[#331107]">Raça</p>
                            <div class=" flex mt-2.5">
                                <input type="text" name="raca" id="raca" class="block rounded-md border-0 px-3.5 py-1 lg:px-12 text-red-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>
                    <div class="flex ml-28 justify-between">
                        <div class="text-start items-start">
                            <p class="text-1xl font-semibold leading-6 text-[#331107]">Pelagem</p>
                            <div class="mt-2.5">
                                <input type="text" name="pelagem" id="pelagem" class="block rounded-md border-0 px-3.5 py-1 lg:px-12 text-red-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex grid grid-cols-3 grid-rows-1 mx-8 lg:px-8 p-3 bg-white rounded-2x1 w-80%">
                    <div class="flex ml-2 justify-between">
                        <div class="text-start items-start">
                            <p class="text-1xl font-semibold leading-6 text-[#331107]">Peso</p>
                            <div class="mt-2.5">
                                <input type="text" name="peso" id="peso" class="block rounded-md border-0 px-3.5 py-1 lg:px-12 text-red-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>
                    <div class="flex ml-28 justify-between">
                        <div class="text-start items-start">
                            <p class="text-1xl font-semibold leading-6 text-[#331107]">Altura</p>
                            <div class="mt-2.5">
                                <input type="text" name="altura" id="altura" class="block rounded-md border-0 px-3.5 py-1 lg:px-12 text-red-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex grid grid-cols-3 grid-rows-1 mx-8 lg:px-8 p-3 bg-white rounded-2x1 w-80%">
                    <div class="flex ml-2 justify-between">
                        <div class="text-start items-start">
                            <label for="generoEq" class="block text-sm font-semibold leading-6 text-red-950" >Gênero</label>
                            <select id="generoEq" name="generoEq" class="h-10 rounded-md rounded-md border-0 bg-transparent py-0 pl-4 pr-9  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm">
                                <option>Égua</option>
                                <option>Garanhão</option>
                                <option>Castrado</option>
                            </select>  
                        </div> 
                    </div>
                    <div class="flex ml-28 justify-between">
                        <div class="text-start items-start">
                            <p class="text-1xl font-semibold leading-6 text-[#331107]">Nome do tutor</p>
                            <div class="mt-2.5">
                                <input type="text" name="nomeTutor" id="nomeTutor" class="block rounded-md border-0 px-3.5 py-1 lg:px-12 text-red-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="justify-items-end text-end align-end items-end">
                    <a href="../menu/perfil.php"><button type="submit"  name="acao" id="acao" value="salvar" class="bg-[#E7CBB2] mr-2 w-50 rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-red-950 shandow-sm hover:bg-[#56291C] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">CADASTRAR</button></a>
                 
                </div>
            </form>
            </div>
        </div>
        

    </div>
</body>
</html>