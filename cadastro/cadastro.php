<?php  
include_once('../usuario/usuario.php'); 
?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Cadastro</title>
    </head>
    <body class="bg-[#F4E9DF]">
    <div class="isolate mx-24 flex items-center shadow-2xl rounded-2xl bg-white h-screen sm:py-38 lg:px-8">
        <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
        
        </div>
        <div class="mx-auto text-center ml-6 flex flex-col gap-y-4 col-span-2 ">
            <img src="../img/cadas.png" alt="" width="560"> 
        </div>
        <div>
            <div class="text-center my-3 mb-4 col-span-2">
                <h1 class="block text-4xl font-bold leading-9 text-red-950">Cadastro</h1>
            </div>
            <form action="../usuario/usuario.php" method="POST" class="mx-auto max-w-xl sm:mt-8">
                <div class="grid grid-cols-1 gap-x-8 gap-y-5 sm:grid-cols-2">
                    <div>
                        <label for="nome" class="block text-sm font-semibold leading-6 text-red-950">Nome Completo</label>
                        <div class="mt-1">
                            <input type="text" name="nome" id="nome" value="" class="block w-full rounded-md border-0 px-3.5 py-2 text-red-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="usuario" class="block text-sm font-semibold leading-6 text-red-950">Usuário</label>
                        <div class="mt-1">
                            <input type="text" name="usuario" id="usuario" value=""  class="block w-full rounded-md border-0 px-3.5 py-2 text-red-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm font-semibold leading-6 text-red-950">Email</label>
                            <div class="mt-1">
                            <input type="email" name="email" id="email" value=""  class="block w-full rounded-md border-0 px-3.5 py-2 text-red-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="flex col-span-2 gap-x-8">
                        <div class="sm:col-span-1 w-full">
                            <label for="dataNasc" class="block text-sm font-semibold leading-6 text-red-950">Data de Nascimento</label>
                            <div class="mt-1 w-full">
                                <input type="date" name="dataNasc" id="dataNasc" value="" class="block h-10 w-full rounded-md border-0 py-0 pl-4 pr-9 px-3.5 py-2 text-red-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-1 w-full">
                            <label for="genero" class="block text-sm font-semibold leading-6 text-red-950" >Gênero</label>
                            <select id="genero" name="genero" class="mt-1 h-10 w-full rounded-md rounded-md border-0 bg-transparent py-0 pl-4 pr-9  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm">
                                <option>Feminino</option>
                                <option>Masculino</option>
                                <option>Outro</option>
                            </select>   
                        </div> 
                    </div>  

                
                        <div class="flex col-span-2 gap-x-8">
                            <div class="sm:col-span-1">
                                <label for="senha" class="block text-sm font-semibold leading-6 text-red-950">Senha</label>
                                <div class="mt-1">
                                    <input type="password" name="senha" id="senha" value="" class="block h-10 rounded-md border-0 py-0 pl-4 pr-9 px-3.5 py-2 text-red-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-1">
                                <label for="senha2" class="block text-sm font-semibold leading-6 text-red-950">Confirmar Senha</label>
                                <div class="mt-1">
                                    <input type="password" name="senha2" id="senha2" value="" class="block h-10 rounded-md border-0 py-0 pl-4 pr-9 px-3.5 py-2 text-red-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                    
                    <div class="sm:col-span-2 mt-2">
                        <button type="submit" name="acao" id="acao" value="salvar" class=" bg-[#E7CBB2] flex w-full justify-center rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-red-950 shadow-sm hover:bg-[#AC7867] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Cadastrar-se</button>
                    </div>
                    <div class="col-span-2">
                      <p class="text-center text-sm text-gray-500">
                          Já tem Cadastro?
                        <a href="../login/login.php" class="font-semibold leading-6 text-amber-950 hover:text-[#AC7867]">Faça seu Login aqui</a>
                      </p>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>