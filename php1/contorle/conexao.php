<?php

// criando a classe Conexao que lida com o banco de dados
class Conexao {
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "exemplo_aula_pw";
    private $conexao;

// criando o método construtor que define os atributos à conexão do bd
    public function __construct() {
        $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);


        // definindo uma mensagem de erro no caso da conexão falhar
        if ($this->conexao->connect_error) {
            die("Falha na conexão: " . $this->conexao->connect_error);
        }
    }

    // retornando o estado da conexão com um método principal
    public function getConexao() {
        return $this->conexao;
    }
}

?>