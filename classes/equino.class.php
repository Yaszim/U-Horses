<?php
    require_once("database.class.php");
    require_once("usuario.class.php");
    
class Equino extends Usuario{
    private $id;
    private $nomeEq;
    private $dataNascEq;
    private $raca;
    private $pelagem;
    private $peso;
    private $altura;
    private $generoEq;
    private $nomeTutor;
    private $img;
    
    public function __construct($id = 0, $nomeEq = "null", $dataNascEq = "null", $raca = "null", $pelagem = "null", $peso = "null", $altura = "null", $generoEq = "null", $nomeTutor = "null", $img = "null") {
        // Construtor da classe Equino
        $this->setId($id);
        $this->setNomeEq($nomeEq);
        $this->setDataNascEq($dataNascEq);
        $this->setRaca($raca);
        $this->setPelagem($pelagem);
        $this->setPeso($peso);
        $this->setAltura($altura);
        $this->setGeneroEq($generoEq);
        $this->setNomeTutor($nomeTutor);
        $this->setImg($img);
    }
    public function setId($novoId){
        if ($novoId < 0)
            throw new Exception("Erro: id inválido!");
        else
            $this->id = $novoId;
    }

    public function setNomeEq($nomeEq){
        if ($nomeEq == "")
            throw new Exception("Erro: Nome do equino inválido!");
        else
            $this->nomeEq = $nomeEq;
    }
    public function setDataNascEq($dataNascEq){
        if ($dataNascEq == "")
            throw new Exception("Erro: Data de nascimento inválida!");
        else
            $this->dataNascEq = $dataNascEq;
    }
    public function setRaca($raca){
        if ($raca == "")
            throw new Exception("Erro: Raça inválida!");
        else
            $this->raca = $raca;
    }
    public function setPelagem($pelagem){
        if ($pelagem == "")
            throw new Exception("Erro: Pelagem inválida!");
        else
            $this->pelagem = $pelagem;
    }
    public function setPeso($peso){
        if ($peso == "")
            throw new Exception("Erro: Peso inválido!");
        else
            $this->peso = $peso;
    }
    public function setAltura($altura){
        if ($altura == "")
            throw new Exception("Erro: Altura inválida!");
        else
            $this->altura = $altura;
    }
    public function setGeneroEq($generoEq){
        if ($generoEq == "")
            throw new Exception("Erro: Genero inválida!");
        else
            $this->generoEq = $generoEq;
    }
    public function setNomeTutor($nomeTutor){
        if ($nomeTutor == "")
            throw new Exception("Erro: Nome do tutor inválida!");
        else
            $this->nomeTutor = $nomeTutor;
    }
    public function setImg($img){
            $this->img = $img;
    }
     
    public function getId(){ return $this->id; }
    public function getNomeEq() { return $this->nomeEq;}
    public function getDataNascEq() { return $this->dataNascEq;}
    public function getRaca() { return $this->raca;}
    public function getPelagem() { return $this->pelagem;}
    public function getPeso() { return $this->peso;}
    public function getAltura() { return $this->altura;}
    public function getGeneroEq() { return $this->generoEq;}
    public function getNomeTutor() { return $this->nomeTutor;}
    public function getImg(){ return $this->img;}

    
    public function incluir(){
        $sql = 'INSERT INTO equino (nomeEq, dataNascEq, raca, pelagem, peso, altura, generoEq, nomeTutor, img)   
        VALUES (:nomeEq, :dataNascEq, :raca, :pelagem, :peso, :altura, :generoEq, :nomeTutor, :img)';
        $parametros = array(
            ':nomeEq' => $this->getNomeEq(),
            ':dataNascEq' => $this->getDataNascEq(),
            ':raca' => $this->getRaca(),
            ':pelagem' => $this->getPelagem(),
            ':peso' => $this->getPeso(),
            ':altura' => $this->getAltura(),
            ':generoEq' => $this->getGeneroEq(),
            ':nomeTutor' => $this->getNomeTutor(),
            ':img' => $this->getImg()
        );
        Database::executar($sql, $parametros);      
        $this->setId(Database::$lastId);
        return true;
    }
    
    public function excluir(){
        $conexao = Database::getInstance();
        $sql = 'DELETE FROM equino WHERE id = :id';
        $comando = $conexao->prepare($sql);
        $comando->bindValue(':id', $this->id);
        return $comando->execute();
    }  
    
    public function alterar(){
        $sql = 'UPDATE equino 
                    SET nomeEq = :nomeEq, dataNascEq = :dataNascEq, raca = :raca, pelagem = :pelagem, peso = :peso, altura = :alutra, generoEq = :generoEq, nomeTutor = :nomeTutor, id = :id, img = :img
                    WHERE id = :id';
        $parametros = array(':id'=>$this->getId(),
                            ':nomeEq'=>$this->getNomeEq(),
                            ':dataNascEq'=>$this->getDataNascEq(),
                            ':raca'=>$this->getRaca(),
                            ':pelagem'=>$this->getPelagem(),
                            ':peso'=>$this->getPeso(),
                            ':altura'=>$this->getAltura(),
                            ':generoEq'=>$this->getGeneroEq(),
                            ':nomeTutor'=>$this->getNomeTutor(),
                            ':img'=>$this->getImg()
                        );
        Database::executar($sql, $parametros);
        return true;
    }    
    public static function buscaCavaloPorId($id) {
        $sql = 'SELECT * FROM equino WHERE id = :id';
        $conexao = Database::getInstance();
        $comando = $conexao->prepare($sql);
        $comando->bindValue(':id', $id, PDO::PARAM_INT);
        return $comando->execute();
    }
    
    public static function listar($tipo = 0, $busca = "" ):array{
        $sql = "SELECT * FROM equino";        
        if ($tipo > 0) {
            switch ($tipo) {
                case 1:
                    $sql .= " WHERE id = :busca";
                    break;
                case 2:
                    $sql .= " WHERE nomeEq like :busca";
                    $busca = "%{$busca}%";
                    break;
                case 3:
                    $sql .= " WHERE raca like :busca";
                    $busca = "%{$busca}%";
                    break;
            }
        }     
        
        $parametros = array();
        if ($tipo > 0 )
            $parametros = array(':busca'=>$busca); 
        $comando = Database::executar($sql, $parametros); 
        $equinos = array();            
        while($registro = $comando->fetch(PDO::FETCH_ASSOC)){ 

            $equino = new Equino($registro['id'], $registro['nomeEq'], $registro['dataNascEq'], $registro['raca'], $registro['pelagem'], $registro['peso'], $registro['altura'], $registro['generoEq'], $registro['nomeTutor'] ,$registro['img']); 
            array_push($equinos, $equino);
        }
        return $equinos;
    }      
    
}
    