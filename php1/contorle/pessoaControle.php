<?php 

// trazendo o arquivo pessoa.php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/php1/model/pessoa.php';

// criando a classe controladora
class pessoaControle{
    private $pessoa;
    

    // método construtor pra atribuir o objeto pessoa à informação presente no bd
    public function __construct(){
        $this->pessoa = new Pessoa();  
        $this->inserir();  
    }

    // método pra inserir as informações de cada atributo da pessoa
    public function inserir(){
        // definindo as variáveis do pessoa.php
        $this->pessoa->setNome($_POST['nome']);
        $this->pessoa->setEndereco($_POST['endereco']);
        $this->pessoa->setBairro($_POST['bairro']);
        $this->pessoa->setCEP($_POST['cep']);
        $this->pessoa->setCidade($_POST['cidade']);
        $this->pessoa->setEstado($_POST['estado']);
        $this->pessoa->setTelefone($_POST['telefone']);
        $this->pessoa->setCelular($_POST['celular']);
        // fazendo o objeto pessoa receber o que foi definido acima
        $this->pessoa->inserir();
    }

    public function listar(){
        return $this->pessoa->listar();
    }

    public function buscarPorId($id){
        return $this->pessoa->buscarporId($id);
    }

    public function atualizar($id){
        $this->pessoa->setId($id);
        $this->pessoa->setNome($_POST[$nome]);
        $this->pessoa->setEndereco($_POST[$endereco]);
        $this->pessoa->setBairro($_POST[$bairro]);
        $this->pessoa->setCEP($_POST[$cep]);
        $this->pessoa->setCidade($_POST[$cidade]);
        $this->pessoa->setEstado($_POST[$estado]);
        $this->pessoa->setTelefone($_POST[$telefone]);
        $this->pessoa->setCelular($_POST[$celular]);

        $this->pessoa->atualizar($id);
}
}
// instanciando a classe controladora
new PessoaControle();

?>