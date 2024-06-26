<?php 
// importa os arquivos da pasta "model" com prioridade no "pessoa.php" com o $root para ser lido em qualquer máquina 
require_once $_SERVER['DOCUMENT_ROOT'] . '/pw/model/pessoa.php';

//classe Pessoa Controler com a variável privada pessoa
class PessoaController{
     private $pessoa;
//método construtor que instância a variável pessoa no objeto Pessoa do arquivo Pessoa.php
     public function __construct(){
        $this-> pessoa =  new Pessoa();
//é uma condição conectada ao botão cadastrar para caso clicado seja acionado o inserir
       if ($GET['acao']=='inserir'){
        $this->inserir();
       } 
            
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
// o=as informações que serão setadas apartir do método inserir
        $this->pessoa->inserir();
      }
// a função que vai acessar os dados para que leia o banco e ponha os dados na tela
      public function listar(){
           return $this->pessoa->listar();
      }
    
}
//instância a classe PessoaController
new PessoaController();

?>