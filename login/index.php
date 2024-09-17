<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <script src="https://cdn.tailwindcss.com"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login</title>
  </head>
  <body class="bg-[#F4E9DF]">
    
      <div class="mx-10 flex items-center h-screen ">
          <div class="mx-auto max-w-6xl lg:px-6 shadow-2xl p-10 rounded-2xl bg-white">
              <dl class="grid grid-cols-1 gap-x-6 gap-y-10 text-center lg:grid-cols-3">
                  <div class="ml-6 flex flex-col gap-y-4 col-span-2">
                  <img src="../img/cvl.png" alt="" width="400">
                  </div>
                  <form class="pt-14 mr-6 space-y-6" action="login.php" method="POST">
                      <h2 class="block text-2xl font-bold leading-9 text-red-950">Login</h2>
                    <div class="text-start">
                      <label for="usuario" class="block text-sm font-medium leading-8 text-red-950">Usuário</label>
                      <div class="mt-2">
                        <input id="usuario" name="usuario" type="text" autocomplete="usuario" required class=" block w-full rounded-md border-0  py-1.5 text-red-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm sm:leading-6">
                      </div>
                    </div>

                    <div>
                      <div class="flex items-center justify-between">
                        <label for="senha" class="block text-sm font-medium leading-8 text-red-950">Senha</label>
                      </div>
                      <div class="mt-2">
                        <input id="senha" name="senha" type="password" autocomplete="current-password" required class=" block w-full rounded-md border-0 py-1.5 text-red-950 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-red-300 sm:text-sm sm:leading-6">
                      </div>
                    </div>

                    <div>
                      <a href=""><button type="submit" class=" bg-[#E7CBB2] flex w-full justify-center rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-red-950 shadow-sm hover:bg-[#AC7867] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Enviar</button></a>
                    </div>
                      <p class="mt-10 text-center text-sm text-gray-500">
                        Ainda não tem Cadastro?
                      <a href="../cadastro/cadastro.php" class="font-semibold leading-6 text-amber-950 hover:text-[#AC7867]">Faça seu Cadastro aqui</a>
                      </p>
                  </form>
                </dl>
            </div>
        </div>
    </body>
</html>