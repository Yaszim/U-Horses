<?php
/** Controle de Cavalo */

require_once("../classes/equino.class.php"); 
require_once("../classes/usuario.class.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $id =  isset($_POST['id']) ? $_POST['id'] : 0; 
    $nomeEq =  isset($_POST['nomeEq']) ? $_POST['nomeEq'] : ""; 
    $dataNascEq =  isset($_POST['dataNascEq']) ? $_POST['dataNascEq'] : "";
    $raca =  isset($_POST['raca']) ? $_POST['raca'] : "";
    $pelagem =  isset($_POST['pelagem']) ? $_POST['pelagem'] : "";
    $peso =  isset($_POST['peso']) ? $_POST['peso'] : 0;
    $altura =  isset($_POST['altura']) ? $_POST['altura'] : 0;
    $generoEq =  isset($_POST['generoEq']) ? $_POST['generoEq'] : "";
    $nomeTutor =  isset($_POST['nomeTutor']) ? $_POST['nomeTutor'] : "";
    $id_usuario =  isset($_POST['id_usuario']) ? $_POST['id_usuario'] : "";
    $acao = isset($_POST['acao']) ? $_POST['acao'] : "";
    $arquivo = isset($_FILES['img']) ? $_FILES['img'] : "";
    $destino = "./". IMG ."/".$arquivo['name'];
    var_dump($_FILES);

    try{
        $usuario = Usuario::listar(1,['id_usuario'])[0];
        $equino = new Equino($id, $nomeEq, $dataNascEq,$raca, $pelagem, $peso, $altura,$generoEq, $nomeTutor, $destino);

        $resultado = "";
        if($acao == 'salvar'){
            if($id > 0)
                $resultado = $equino->alterar();
            else 
                $resultado = $equino->incluir();
        } elseif ($acao == 'excluir') {
            echo "chegou";
            exit;
            $resultado = $equino->excluir();
        }
        $_SESSION['MSG'] = "Dados inseridos/Alterados com sucesso!";
        move_uploaded_file($arquivo['tmp_name'],$destino);

    }catch(Exception $e){ 
        $_SESSION['MSG'] = $e->getMessage();

    }finally{
         header('location: ../menu/perfilcvl.php?id='.$equino->getId());
    }
}elseif($_SERVER['REQUEST_METHOD'] == 'GET'){ 
    $id =  isset($_GET['id'])?$_GET['id']:0; 
    $msg = (isset($_SESSION['MSG'])?$_SESSION['MSG']:"");
    if ($msg != ""){
        echo "<h2>{$msg}</h2>";
        unset($_SESSION['MSG']);
    }


     if ($id > 0) {
         $equinos = Equino::listar(1,$id)[0]; 
         
     }
     $busca =  isset($_GET['busca'])?$_GET['busca']:0;
     $tipo =  isset($_GET['tipo'])?$_GET['tipo']:0;   
     $lista = Equino::listar($tipo,$busca); 
     
}
?>
