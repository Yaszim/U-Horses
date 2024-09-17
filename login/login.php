<?php
/** Controle de Pessoa */

require_once("../classes/login.class.php");
require_once("../classes/usuario.class.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = isset($_POST['usuario'])?$_POST['usuario']:0; 
    $senha = isset($_POST['senha'])?$_POST['senha']:0; 

    try{
        // criar o objeto Pessoa que irá persistir os dados 
        $aluno = Login::efetuarLogin($usuario,$senha);
        if ($aluno){
            session_start();
            $_SESSION['idusuario'] = $aluno->getId();
            $_SESSION['nome'] = $aluno->getNome();
            header('location: ../menu/index.php');

        }
        
        else{
            echo "<script> alert('Usuário ou senha incorreto')</script>";
        }
    }catch(Exception $e){ // caso ocorra algum erro na validação das regras de negócio dispara uma exceção
        header('location: index.php?MSG=Erro: '.$e->getMessage()); // direciona para o incio com a mensagem de erro
    }
}