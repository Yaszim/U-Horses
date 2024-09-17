<?php 
session_start(); 
if (!isset($_SESSION['idusuario'])) {
    header('location: ../login/index.php?MSG=Por favor, faça login para acessar.');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Y&Horses</title>
</head>
<body>
    <?php 
      include "../nav.php";
    ?>
    <div class="h-12">
        <img src="../img/fundo2.jpg"  alt="">
    </div>
    <div class="bg-[#331107]  opacity-75 py-8 lg:gap-4" style="background-image: url()">
      <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-4 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
        <div>
          <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Y&HORSES</h2>
          <p class="mt-4 font-bold text-white">Aqui nós vamos te ajudar a cuidar do seu equino!</p>
        </div>
        <div class="grid gap-8 sm:gap-8 lg:gap-8 px-12 ml-12 ">
          <img src="../img/branco.png" alt="" class="p-4 py-12" width="300">
        </div>
      </div>
    </div>

  <div class="bg-white p-24">
    <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-6 px-4 py-16 sm:px-6 sm:py-16 lg:max-w-7xl lg:grid-cols-2 lg:px-4">
      <div class="grid gap-6 sm:gap-6 lg:gap-8">
        <p class=" font-bold mt-4 text-orange-950 tracking-tight">Vamos aprender a cuidar corretamente dos nossos queridos equinos, e criar
        laços cada vez mais fortes com esses animais</p> 
        <p class=" font-bold mt-4 text-orange-950 tracking-tight">
        Aprender mais sobre a vida equina, sobre suas raças, 
        tipos de pelagem e curiosiades.</p>
      </div>
        <div class="grid gap-8 sm:gap-8 lg:gap-8 rounded-lg">
          <img src="../img/cvl.jpg" alt="" class="border-solid border-2 border-yellow-900 overflow-hidden mx-auto max-w-2xl lg:max-w-none rounded-lg " width="300">
        </div>
    </div>
  </div>

<div class="bg-[#F4E9DF]">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
      <h2 class="text-2xl font-bold text-orange-950">Aprenda sobre</h2>

      <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
        <div class="group relative">
          <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
            <img src="https://i.pinimg.com/564x/a1/72/c7/a172c789fdf25bf828c0fda19f6f9054.jpg" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="h-full w-full object-cover object-center">
          </div>
          <p class="text-base font-semibold text-orange-950">Hipismo</p>
        </div>
        <div class="group relative">
          <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
          <img src="https://i.pinimg.com/564x/84/6d/5c/846d5ca520a6ef862d36a6179d879453.jpg" alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="h-full w-full object-cover object-center">
        </div> 
          <p class="text-base font-semibold text-orange-950">Equoterapia</p>
        </div>
        <div class="group relative">
          <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
            <img src="https://i.pinimg.com/564x/d2/82/2d/d2822d7c181be3f6b013e3704e044562.jpg" alt="Collection of four insulated travel bottles on wooden shelf." class="h-full w-full object-cover object-center">
          </div>
          <p class="text-base font-semibold text-orange-950">Equitação</p>
        </div>
      </div>
    </div>
  </div>
</div>




</body>
</html>