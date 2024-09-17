<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>

<body>
    <?php include "../nav.php"; ?>
    <div class="mx-12 items-center lg:px-8 p-2 bg-[#F4E9DF] rounded-2x1 w-80% border-solid border-2 border-[#331107]">
        <div class="text-center items-center mt-6 mb-8 text-5xl font-bold leading-9 tracking-tight text-[#331107]">
            <h2>Perfil</h2>
        </div>
        <div class="flex grid grid-cols-3 grid-rows-7 mx-3 my-6 gap-x-8 gap-y-8">
            <div class="col-span-1 text-center items-center">
                <div class="row-span-3 flex justify-center">
                    <form action="" id="formulario" method="post" enctype="multipart/form-data">
                        <div class="flex flex-col">
                            <label for="imgPerfil" id="labelFotoPerfil" class="group/item">
                                <div class="rounded-full cursor-pointer">
                                    <span class="relative">
                                        <div class="absolute w-20 h-20">
                                            <div class="icon w-full h-full rounded-full flex justify-center items-center group-hover/item:bg-white/30">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" id="svgTransicao" class="w-12 h-12 fill-gray-200 invisible group-hover/item:visible">
                                                    <path d="M12 9a3.75 3.75 0 100 7.5A3.75 3.75 0 0012 9z" />
                                                    <path fill-rule="evenodd" d="M9.344 3.071a49.52 49.52 0 015.312 0c.967.052 1.83.585 2.332 1.39l.821 1.317c.24.383.645.643 1.11.71.386.054.77.113 1.152.177 1.432.239 2.429 1.493 2.429 2.909V18a3 3 0 01-3 3h-15a3 3 0 01-3-3V9.574c0-1.416.997-2.67 2.429-2.909.382-.064.766-.123 1.151-.178a1.56 1.56 0 001.11-.71l.822-1.315a2.942 2.942 0 012.332-1.39zM6.75 12.75a5.25 5.25 0 1110.5 0 5.25 5.25 0 01-10.5 0zm12-1.5a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </div>
                                        <img src="../img/perfil/<?= $_SESSION['fotoPerfil'] ?>" class="w-20 h-20 rounded-full z-0">
                                    </span>
                                </div>
                            </label>
                            <input type="file" name="imgPerfil" onchange="formulario.submit()" id="imgPerfil" accept=".png, .jpg, .jpeg" required class="hidden">
                            <input type="hidden" name="acao" id="acao" value="novafoto">
                        </div>
                    </form>
                </div>
                <div>
                    <p class='mt-4 text-red-950 text-1xl font-semibold'><?php echo $dados['nome'];?></p>
                    <p class='my-3 text-red-950 text-1xl font-semibold'><?php echo $dados['email'];?></p>
                    <div class="flex text-center items-center gap-x-2 justify-between mx-16">
                        <a href="../editar/editar_perfil.php"><button class="bg-[#AC7867] w-50 rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-red-950 shandow-sm hover:bg-[#56291C] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#896153]">ALTERAR DADOS</button></a>
                        <a href="../login/logout.php"><button name="acao" id="acao" value="Logout" type="submit" class="bg-[#AC7867] w-50 rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-red-950 shandow-sm hover:bg-[#56291C] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#896153]">DESLOGAR</button></a>
                    </div>
                </div>
            </div>
            <div class="col-span-2 text-center items-center">
                <div class="flex grid grid-cols-5 grid-rows-9 mx-8 lg:px-8 p-3 bg-[#E7CBB2] opacity-75 rounded-2x1 w-80% border-solid border-2 border-[#331107]">
                    <div class="col-span-5 row-span-2 my-2 lg:px-8 p-2 bg-[#E7CBB2] rounded-2x1 border-solid border-2 border-[#331107]">
                        <div class="flex my-2 justify-between">
                            <div class="flex">
                                <div>
                                    <img src="../img/quadrado1.jpg" class="h-20" alt="">
                                </div>
                                <div class="flex ml-4 justify-between">
                                    <div class="text-start items-start">
                                        <p class="text-red-950 text-1xl font-semibold leading-6">Nome do equino</p>
                                        <a href="../editar/editar_equino.php"><button type="submit" class="bg-[#AC7867] w-50 mt-5 rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-red-950 shandow-sm hover:bg-[#56291C] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#896153]">MAIS INFO</button></a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="justify-items-end text-end align-end items-end">
                                <a href="../editar/editar_cavalo.php"><button class="bg-[#AC7867] mr-2 w-50 rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-red-950 shandow-sm hover:bg-[#56291C] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#896153]">ALTERAR</button></a>
                                <button type="submit" class="bg-[#AC7867] w-50 mt-11 rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-red-950 shandow-sm hover:bg-[#56291C] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#896153]">EXCLUIR</button>
                            </div>
                        </div>
                        <!-- <div class="flex justify-between">
                            <button type="submit" class="bg-[#AC7867] w-50 my-2 rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-red-950 shandow-sm hover:bg-[#56291C] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#896153]">MAIS INFO</button>
                            <div class="flex">
                            </div>
                        </div> -->
                    </div>
                    <div class="col-span-5 row-span-2 px-6 lg:px-8 p-2 bg-[#E7CBB2] rounded-2x1 border-solid border-2 border-[#331107]">
                        <div class="flex my-2 justify-between">
                            <div class="flex">
                                <div>
                                    <img src="../img/quadrado2.jpg" class="h-20" alt="">
                                </div>
                                <div class="flex ml-4 justify-between">
                                    <div class="text-start items-start">
                                        <p class="text-red-950 text-1xl font-semibold leading-6">Nome do equino</p>
                                        <a href="../cadastro/cad_cavalo.php"><button class="bg-[#AC7867] w-50 mt-5 rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-red-950 shandow-sm hover:bg-[#56291C] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#896153]">MAIS INFO</button></a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="justify-items-end text-end align-end items-end">
                                <a href="../editar/editar_cavalo.php"><button class="bg-[#AC7867] mr-2 w-50 rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-red-950 shandow-sm hover:bg-[#56291C] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#896153]">ALTERAR</button></a>
                                <button type="submit" class="bg-[#AC7867] w-50 mt-11 rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-red-950 shandow-sm hover:bg-[#56291C] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#896153]">EXCLUIR</button>
                            </div>
                        </div>
                    </div>
                    <div class="justify-between flex mx-12">
                        <div class="relative fixed right-12">
                            <a href="../cadastro/cad_cavalo.php"><button type="submit" class=" bg-[#AC7867] w-50 my-12 mb-2  rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-red-950 shandow-sm hover:bg-[#56291C] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#896153]">CRIAR</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>