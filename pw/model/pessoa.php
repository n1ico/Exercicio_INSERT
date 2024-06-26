<?php
// importa os arquivos da pasta "Controller" com prioridade no "conexao.php" 
require_once '../controller/conexao.php';
// classe Pessoa e variáveis privadas 
class Pessoa{
    private $id;
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
    private $telefone;
    private $celular;
    private $conexao;

// get e sets das variáveis privadas com retorno das informações coletadas    

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id=$id;
    }


    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome=$nome;
    }


    public function getEndereco(){
        return $this->endereco;
    }
    public function setEndereco($endereco){
        $this->endereco=$endereco;
    }


    public function getBairro(){
        return $this->bairro;
    }
    public function setBairro($bairro){
        $this->bairro=$bairro;
    }


    public function getCep(){
        return $this->cep;
    }
    public function setCep($cep){
        $this->cep=$cep;
    }


    public function getCidade(){
        return $this->cidade;
    }
    public function setCidade($cidade){
        $this->cidade=$cidade;
    }


    public function getEstado(){
        return $this->estado;
    }
    public function setEstado($estado){
        $this->estado=$estado;
    }


    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone=$telefone;
    }


    public function getCelular(){
        return $this->celular;
    }
    public function setCelular($celular){
        $this->celular=$celular;
    }

    public function __construct(){
        $this->conexao = new Conexao;
    }
// método inserir 
    public function inserir(){
//insere os gets nos atributos da entidade cliente
        $sql = "INSERT INTO cliente(`nome`, `endereco`, `bairro`, `cidade`, `cep`, `estado`, `telefone`, `celular` ) VALUES(?,?,?,?,?,?,?,?)";
        $stmt = $this->conexao->getConexao()->prepare($sql);
        $stmt->bind_param('ssssssss', $this->nome, $this->nome, $this->bairro, $this->cidade, $this->cep, $this->estado, $this->telefone, $this->celular);
        return $stmt->execute();
    }

    public function listar(){
     $sql = "SELECT * FROM pessoa";
     $stmt = $this->conexao->getConexao()->prepare($sql);
     $stmt->execute();
     $result = $stmt>get_result();
     $pessoas = [];
     while($pessoa = $result->fetch_assoc()){
        $pessoas[] = $pessoas;
     }   
      return $pessoas;
    }
}

  


?>