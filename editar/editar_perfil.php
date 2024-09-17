<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Editar Perfil</title>
</head>
<body>
    <?php include "../menu/nav.php"; ?>
        <div class="mx-12 items-center lg:px-8 p-2 bg-[#F4E9DF] rounded-2x1 w-80% border-solid border-2 border-[#331107]">
            <div class="text-center items-center mt-6 mb-8 text-5xl font-bold leading-9 tracking-tight text-[#331107]">
                <h3>Editar seu Perfil</h3>
            </div>
            <div class="flex grid grid-cols-3 grid-rows-7 mx-16 lg:px-8 p-3 bg-white rounded-2x1 w-80% border-solid border-2 border-[#331107]">
                <div class="col-span-1 text-center items-center">
                    <div class="row-span-1">
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
                                    <input type="text" name="user" id="user" class="block rounded-md border-0 px-3.5 py-1 lg:px-12 text-red-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                        <div class="flex ml-28 justify-between">
                            <div class="text-start items-start">
                                <p class="text-1xl font-semibold leading-6 text-[#331107]">Nome Completo</p>
                                <div class="mt-2.5">
                                    <input type="text" name="user" id="user" class="block rounded-md border-0 px-3.5 py-1 lg:px-12 text-red-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 text-center item-center mt-2.5">
                            <div class="flex ml-2 justify-between">
                                <div class="text-start items-start">
                                    <label for="email" class="text-1x1 font-semibold leading-6 text-[#331107]">E-mail</label>
                                    <div class="mt-2.5">
                                        <input type="text" name="email" id="email" class="block rounded-md border-0 px-3.5 py-1 lg:px-12 text-red-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                            </div>
                            <div class="flex ml-2 justify-between">
                                <div class="text-start items-start">
                                    <label for="cpf" class="text-1x1 font-semibold leading-6 text-[#331107]">CPF</label>
                                    <div class="mt-2.5">
                                        <input type="text" name="cpf" id="cpf" class="block rounded-md border-0 px-3.5 py-1 lg:px-12 text-red-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                            </div>
                            <div class="flex ml-2 justify-between">
                                <div class="text-start items-start">
                                    <label for="genero" class="block text-sm font-semibold leading-6 text-red-950" >Gênero</label>
                                    <select id="genero" name="genero" class="h-10 rounded-md rounded-md border-0 bg-transparent py-0 pl-4 pr-9  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm">
                                        <option>Feminino</option>
                                        <option>Masculino</option>
                                        <option>Outro</option>
                                    </select>  
                                </div> 
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
    
</body>
</html>