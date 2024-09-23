<?php
session_start(); // Inicia a sessão
session_destroy(); // Destroi todas as sessões
header('location: index.php?MSG=Você foi desconectado com sucesso.');
exit;
