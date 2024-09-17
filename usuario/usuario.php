<?php
/** Controle de Pessoa */

require_once("../classes/usuario.class.php");
require_once("../classes/login.class.php");


// Esse trecho avalia se foi enviado um ID na requisição GET - nesse caso o sistema deve apresentar o formulário 
// preenchido com os dados do contato para edição
$id =  isset($_GET['id'])?$_GET['id']:0; // pegar busca
$msg =  isset($_GET['MSG'])?$_GET['MSG']:""; // pegar busca
if ($id > 0){
    $contato = Usuario::listar(1,$id)[0]; // cria a variável contato que será utilizada para preencher o formulário
                                         //       quando o usuário clicar para alterar um registro
}

// Inserir e alterar dados
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id =  isset($_POST['id'])?$_POST['id']:0; 
    $nome =  isset($_POST['nome'])?$_POST['nome']:0; 
    $email =  isset($_POST['email'])?$_POST['email']:0;
    $dataNasc =  isset($_POST['dataNasc'])?$_POST['dataNasc']:0;
    $genero =  isset($_POST['genero'])?$_POST['genero']:0;
    $usuario =  isset($_POST['usuario'])?$_POST['usuario']:0; 
    // dados do login
    $senha =  isset($_POST['senha'])?$_POST['senha']:0; 
    $acao =  isset($_POST['acao'])?$_POST['acao']:0; 

    try{
        // criar o objeto Pessoa que irá persistir os dados 
      
        $login = new Login($usuario,$senha);
        $usuario = new Usuario($id, $nome, $email, $dataNasc, $genero, $login);

        $resultado = "";
        if($acao == 'salvar'){
            if($id > 0)//alterando
                // chamar o método para alterar uma pessoa
                $resultado = $usuario->alterar();
            else // inserindo                        
                // chamar o método para incluir uma pessoa
                $resultado = $usuario->incluir();
        }elseif ($acao == 'excluir'){
            // chamar o método para exluir uma usuario
            $resultado = $usuario->excluir();
        }
        if ($resultado)
        header('location: ../login/index.php?MSG=Dados inseridos/Alterados com sucesso!');
        exit;

            header('location: index.php?MSG=Erro ao inserir/alterar registro');
    }catch(Exception $e){ // caso ocorra algum erro na validação das regras de negócio dispara uma exceção
        header('location: index.php?MSG=Erro: '.$e->getMessage()); // direciona para o incio com a mensagem de erro
    }
}elseif($_SERVER['REQUEST_METHOD'] == 'GET'){ // se a requisição é 
    //  Listagem e Pesquisa
    $busca =  isset($_GET['busca'])?$_GET['busca']:0; // pegar informação da busca
    $tipo =  isset($_GET['tipo'])?$_GET['tipo']:0; // pegar tipo de busca  
    // chama o método listar da classe Pessoa de forma estática (sem criar o objeto Pessoa) para preencher a variável lista 
       // que será usada para montar a tabela que lista todos os contatos
    $lista = Usuario::listar($tipo,$busca); 
}
