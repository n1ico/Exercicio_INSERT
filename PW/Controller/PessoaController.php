<?php 
// importa os arquivos da pasta "Model" com prioridade no "Pessoa.php" 
require_once '../Model/Pessoa.php';

//classe Pessoa Controler com a variável privada pessoa
class PessoaController{
     private $pessoa;
//método construtor que instância a variável pessoa no objeto Pessoa do arquivo Pessoa.php
     public function __construct(){
        $this-> pessoa =  new Pessoa();
//constroe a função inserir conectado com o inserir do Pessoa.php
        $this->inserir();     
      }
//função inserir settando as variáveis do Pessoa.php
     public function inserir(){
   
        $this->pessoa->setNome($_POST['nome']);
        $this->pessoa->setEndereco($_POST['endereco']);
        $this->pessoa->setBairro($_POST['bairro']);
        $this->pessoa->setCep($_POST['cep']);
        $this->pessoa->setCidade($_POST['cidade']);
        $this->pessoa->setEstado($_POST['estado']);
        $this->pessoa->setTelefone($_POST['telefone']);
        $this->pessoa->setCelular($_POST['celular']);
        $this->pessoa->inserir();
      }
    
}
new PessoaController();

?>