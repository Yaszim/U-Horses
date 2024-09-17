<header class="bg-white">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="index.php" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="../img/logo.png" alt="">
            </a>
        </div>
   
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="../cadastro/cadastro.php" class="text-sm font-semibold leading-6 text-orange-950">Cadastro</a>
            <a href="../login/login.php" class="text-sm font-semibold leading-6 text-orange-950">Login</a>
            <a href="#" class="text-sm font-semibold leading-6 text-orange-950"></a>
            <a href="#" class="text-sm font-semibold leading-6 text-orange-950"></a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="perfil.php" class="text-sm font-semibold leading-6 text-orange-950">Perfil</a>
        </div>
        <div class="relative ml-3">
            <div>
                <button type="button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">Open user menu</span>
                    <img class="h-8 w-8 rounded-full" src="../img/perfil/<?= $_SESSION['fotoPerfil'] ?>" alt="">
                </button>
            </div>
        </div>
    </nav>
</header>