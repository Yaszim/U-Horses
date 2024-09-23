<?php
require_once("../classes/database.class.php");
class Login{
    /**
     * var string
     */
    private $usuario;
    /**
     * var string
     */
    private $senha;

    /**
     * param string $usuario
     * param string $senha
     * return void
     */
    public function __construct($usuario = null, $senha = null){
        $this->setUsuario($usuario);
        $this->setSenha($senha);
    }

    public function setUsuario($novoUsuario) {
        if (empty($novoUsuario)) {
            throw new Exception("Erro: Usuário inválido!");
        } else {
            $this->usuario = $novoUsuario;
        }
    }
    public function setSenha($novaSenha) {
        if (empty($novaSenha)) {
            throw new Exception("Erro: Senha inválida!");
        } else {
            $this->senha = $novaSenha; 
        }
    }

    public function getUsuario(){ return $this->usuario;}
    public function getSenha(){ return $this->senha;}

    /**
     * @param string $usuario
     * @param string $senha
     */
    public static function efetuarLogin($usuario, $senha){
        $conexao = Database::getInstance();
        $sql = 'SELECT * FROM usuario
                 WHERE usuario = :usuario
                   AND senha = :senha';
        $comando = $conexao->prepare($sql); 
        $comando->bindValue(':usuario',$usuario);
        $comando->bindValue(':senha',sha1($senha));
        if ($comando->execute()){
            while($registro = $comando->fetch()){ 
                $login = new Login($registro['usuario'],$registro['senha'] );
                $usuario = new Usuario($registro['id'], $registro['nome'], $registro['email'], $registro['dataNasc'], $registro['genero'], $login);
                return $usuario;
            }
        }
        return false;
    }
}