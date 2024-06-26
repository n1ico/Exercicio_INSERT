<?php
//classe conexão 
class Conexao {
//criação e atribução das variáveis privadas 
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "exemplo_aula_pw";
    private $conexao;
//método construtor que constroe a conexão do "conexao.ph´" com o banco de dados mysql
    public function __construct() {
        $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);
//uma condição caso não seja possível a conexão com o banco, exibir "Falha na conexão" e os erros ocorridos
        if ($this->conexao->connect_error) {
            die("Falha na conexão: " . $this->conexao->connect_error);
        }
    }
// um método get que retorna o sucesso da conexão 
    public function getConexao() {
        return $this->conexao;
    }
}

?>