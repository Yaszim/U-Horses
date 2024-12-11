<?php

// Inclui as classes necessárias
require_once("../classes/database.class.php");
require_once("../classes/login.class.php");
require_once("../classes/equino.class.php");

class Usuario
{
    // Atributos privados da classe
    private $id;
    private $nome;
    private $email;
    private $dataNasc;
    private $genero;
    private $login;


    // Construtor da classe
    public function __construct($id = 0, $nome = "null", $email = "null", $dataNasc = "null", $genero = "null", Login $login)
    {
        $this->setId($id);
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setDataNasc($dataNasc);
        $this->setGenero($genero);
        $this->setLogin(new Login($login->getUsuario(), $login->getSenha()));
    }

    // Métodos setters e getters
    public function setLogin(Login $login)
    {
        $this->login = $login;
    }

    public function setId($novoId)
    {
        if ($novoId < 0)
            throw new Exception("Erro: id inválido!");
        else
            $this->id = $novoId;
    }

    public function setNome($novoNome)
    {
        if ($novoNome == "")
            throw new Exception("Erro: nome inválido!");
        else
            $this->nome = $novoNome;
    }

    public function setEmail($novoEmail)
    {
        if ($novoEmail == "")
            throw new Exception("Erro: E-mail inválido!");
        else
            $this->email = $novoEmail;
    }
    public function setDataNasc($novoDataNasc)
    {
        if ($novoDataNasc == "")
            throw new Exception("Erro: Data de nascimento inválido!");
        else
            $this->dataNasc = $novoDataNasc;
    }
    public function setGenero($novoGenero)
    {
        if ($novoGenero == "")
            throw new Exception("Erro: Genero inválido!");
        else
            $this->genero = $novoGenero;
    }
    public function getLogin(){ return $this->login; }
    public function getId(){ return $this->id; }
    public function getNome() { return $this->nome;}
    public function getEmail() { return $this->email;}
    public function getDataNasc() { return $this->dataNasc;}
    public function getGenero() { return $this->genero;}



    // Método para incluir aluno e usuário no banco de dados
    public function incluir()
{
    $conexao = Database::getInstance();
    $sql = 'INSERT INTO usuario (nome, email, dataNasc, genero, usuario, senha)
            VALUES (:nome, :email, :dataNasc, :genero, :usuario, :senha)';
    $parametros = array(':id'=>$this->getId(),
                            ':nome'=> $this->getNome(),
                            ':email'=> $this->getEmail(),
                            ':dataNasc'=> $this->getDataNasc(),
                            ':genero'=> $this->getGenero(),
                            ':usuario'=> $this->login->getUsuario(),
                            ':senha'=> password_hash($this->login->getSenha(), PASSWORD_DEFAULT), PDO::PARAM_STR,
    );

    Database::executar($sql, $parametros);      
    $this->setId(Database::$lastId);
    return true;
}

    public function autenticar()
    {
        try {
            $conexao = Database::getInstance();
            $sql = 'SELECT * FROM usuario WHERE usuario = :usuario';
            $comando = $conexao->prepare($sql);
            $comando->bindValue(':usuario', $this->login->getUsuario(), PDO::PARAM_STR);
            $comando->execute();
            $user = $comando->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                if (password_verify($this->login->getSenha(), $user['senha'])) {
                    return $user['id'];
                } else {
                    throw new Exception("Senha incorreta!");
                }
            } else {
                throw new Exception("Usuário não encontrado!");
            }
        } catch (PDOException $e) {
            error_log($e->getMessage());
            throw new Exception("Erro ao autenticar usuário!");
        }
    }

    // Método para excluir aluno
    public function excluir(){
        $conexao = Database::getInstance();
        $sql = 'DELETE FROM equino WHERE id = :id';
        $comando = $conexao->prepare($sql);
        $comando->bindValue(':id', $this->id);
        return $comando->execute();
    }  
    // Método para alterar aluno
    public function alterar()
    {
        $sql = 'UPDATE usuario
                SET nome = :nome, email = :email, dataNasc = :dataNasc, genero = :genero, usuario = :usuario, senha = :senha
                WHERE id = :id';
        $parametros = array(':id'=>$this->getId(),
                            ':nome'=> $this->getNome(),
                            ':email'=> $this->getEmail(),
                            ':dataNasc'=> $this->getDataNasc(),
                            ':genero'=> $this->getGenero(),
                            ':usuario'=> $this->login->getUsuario(),
                            ':senha'=> password_hash($this->login->getSenha(), PASSWORD_DEFAULT), PDO::PARAM_STR,
        );
        Database::executar($sql, $parametros);
        return true;
    }
    // Método estático para listar alunos
    public static function listar($tipo = 0, $busca = "" ):array{
        $sql = "SELECT * FROM usuario";
        if ($tipo > 0) {
            switch ($tipo) {
                case 1:
                    $sql .= " WHERE id = :busca";
                    break;
                case 2:
                    $sql .= " WHERE nome like :busca";
                    $busca = "%{$busca}%";
                    break;
                case 3:
                    $sql .= " WHERE email like :busca";
                    $busca = "%{$busca}%";
                    break;
            }
        }
        $parametros = array();
        if ($tipo > 0 )
            $parametros = array(':busca'=>$busca); 
        $comando = Database::executar($sql, $parametros); 
        $usuarios = array();            
        while($registro = $comando->fetch(PDO::FETCH_ASSOC)){ 
            $login = new Login($registro['usuario'], $registro['senha']);
            $usuario = new Usuario($registro['id'], $registro['nome'], $registro['email'], $registro['dataNasc'], $registro['genero'], $login);
            array_push($usuarios, $usuario);
        }
        return $usuarios;
    }
}

?>