<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Editar Perfil</title>
</head>
<body>
    <?php include "../nav.php"; ?>
        <div class="mx-10 items-center lg:px-8 p-2 bg-[#F4E9DF] rounded-2x1 w-80% border-solid border-2 border-[#331107]">
            <div class="text-center items-center mt-4 mb-8 text-5xl font-bold leading-9 tracking-tight text-[#331107]">
                <h3>Editar seu Perfil</h3>
            </div>
            <div class="grid grid-cols-3 grid-rows--2 mx-14 lg:px-6 p-12 bg-white rounded-2x1 w-80% border-solid border-2 border-[#331107]">
                <div class="col-span-1 text-center items-center">
                    <div class="row-span-2">
                        <p class="mt-4 mb-1 font-bold leading-9 tracking-tight text-[#331107]">Alterar imagem de perfil</p>
                        <img class="inline-block w-15 rounded-full ring-2 ring-[#331107]" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </div>
                </div>
                <div class="col-span-2 text-center items-center">
                    <div class="flex grid grid-cols-3 grid-rows-7 mx-8 lg:px-8 p-3 bg-white rounded-2x1 w-80%">
                        <div class="flex ml-2 justify-between">
                            <div class="text-start items-start">
                                <p class="text-1xl font-semibold leading-6 text-[#331107]">Nome de Usuário</p>
                                <div class="mt-2.5">
                                    <input type="text" name="usuario" id="usuario" class="block rounded-md border-0 px-3.5 py-1 lg:px-12 text-red-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                        <div class="flex ml-28 justify-between">
                            <div class="text-start items-start">
                                <p class="text-1xl font-semibold leading-6 text-[#331107]">Nome Completo</p>
                                <div class="mt-2.5">
                                    <input type="text" name="nome" id="nome" class="block rounded-md border-0 px-3.5 py-1 lg:px-12 text-red-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                        <div class="flex col-span-2 text-center item-center">
                            <div class="flex ml-2 justify-between">
                                <div class="text-start items-start">
                                    <label for="email" class="text-1x1 font-semibold leading-6 text-[#331107]">E-mail</label>
                                    <div class="mt-2.5">
                                        <input type="text" name="email" id="email" class="block rounded-md border-0 px-3.5 py-1 lg:px-12 text-red-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                            </div>
                            <div class="flex ml-8 justify-between">
                                <div class="text-start items-start">
                                <p class="text-1x1 font-semibold leading-6 text-[#331107]">Data de Nascimento</p>
                                    <div class="mt-2.5">
                                        <input type="data" name="dataNasc" id="dataNasc" class="block rounded-md border-0 px-3.5 py-1 lg:px-12 text-red-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex col-span-2 justify-between">
                                <div class="text-start items-start">
                                        <label for="genero" class=" text-1x1 font-semibold leading-6 text-red-950" >Gênero</label>
                                        <div class="mt-2.5">
                                        <select id="genero" name="genero" class=" rounded-md rounded-md border-0 bg-transparent  px-3.5 py-1 lg:px-2  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm">
                                            <option>Feminino</option>
                                            <option>Masculino</option>
                                            <option>Outro</option>
                                        </select> 
                                        </div>
                                </div>
                            </div> 
                            <div class="justify-items-end text-end align-end items-end">
                                <button type="submit" class="bg-[#E7CBB2] mr-2 w-50 rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-red-950 shandow-sm hover:bg-[#56291C] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">ALTERAR</button>
                                <button type="submit" class="bg-[#E7CBB2] w-50 mt-11 rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-red-950 shandow-sm hover:bg-[#56291C] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">VOLTAR</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    
</body>
</html>