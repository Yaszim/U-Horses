
// Funções JavaScript para abrir e fechar o menu flutuante
function openNav() {
 document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
 document.getElementById("mySidenav").style.width = "0";
}

// Fechar o menu flutuante ao clicar fora dele
document.addEventListener('DOMContentLoaded', function () {
 var sideNav = document.getElementById("mySidenav");
 var main = document.getElementById("main");
 main.addEventListener("click", closeNav);
 sideNav.addEventListener("click", function(event) {
    event.stopPropagation();
 });
});