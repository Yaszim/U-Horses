<?php
/** Controle de Login */

require_once("../classes/login.class.php");
require_once("../classes/usuario.class.php");
require_once("../classes/equino.class.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : 0; 
    $senha = isset($_POST['senha']) ? $_POST['senha'] : 0; 

    try {
        // Efetuar login do usuário
        $usuarioLogado = Login::efetuarLogin($usuario, $senha);

        if ($usuarioLogado) {
            session_start();
            // Definir as informações do usuário na sessão
            $_SESSION['idusuario'] = $usuarioLogado->getId();
            $_SESSION['nome'] = $usuarioLogado->getNome();
            $_SESSION['email'] = $usuarioLogado->getEmail();

            // Buscar equino relacionado ao usuário logado
            $equinos = Equino::listar(1, $usuarioLogado->getId());

            if (!empty($equinos)) {
                $equino = $equinos[0]; // Caso o usuário tenha um equino, pegar o primeiro da lista
                $_SESSION['nomeEq'] = $equino->getNomeEq();
            } else {
                // Caso não haja equinos, garantir que não mostre nome de equino na sessão
                $_SESSION['nomeEq'] = "Nenhum equino registrado";
            }

            // Redirecionar para o menu principal
            header('location: ../menu/index.php');
        } else {
            echo "<script> alert('Usuário ou senha incorreto')</script>";
        }
    } catch (Exception $e) {
        // Tratamento de erro caso ocorra falha
        header('location: index.php?MSG=Erro: ' . $e->getMessage());
    }
}
