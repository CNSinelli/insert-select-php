<?php 

    // definindo o objeto pessoa com os atributos
class Pessoa{
    // criando os atributos
    private $id;
    private $nome;
    private $endereço;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
    private $telefone;
    private $celular;

    // métodos get e set pra cada atributo até a linha 77
    public function getId(){
        return $this->id;
    } 
    public function setId(){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome(){
        $this->nome = $nome;
    }

    public function getEndereco(){
        return $this->endereço;
    }
    public function setEndereco(){
        $this->endereço = $endereço;
    }

    public function getBairro(){
        return $this->bairro;
    }
    public function setBairro(){
        $this->bairro = $bairro;
    }

    public function getCEP(){
        return $this->cep;
    }
    public function setCEP(){
        $this->cep = $cep;
    }

    public function getCidade(){
        return $this->cidade;
    }
    public function setCidade(){
        $this->cidade = $cidade;
    }

    public function getEstado(){
        return $this->estado;
    }
    public function setEstado(){
        $this->estado = $estado;
    }
    
    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone(){
        $this->telefone = $telefone;
    }
    public function getCelular(){
        return $this->celular;
    }
    public function setCelular(){
        $this->celular = $celular;
    }

public function __construct(){
    $this->conexao = new Conexao;
}

//  faz os get enviar as informações pro banco
public function inserir(){
    $sql = "INSERT INTO cliente(`nome`, `endereco`, `bairro`, `cidade`, `cep`, `estado`, `telefone`, `celular` ) VALUES(?,?,?,?,?,?,?,?)";
    $stmt = $this->conexao->getConexao()->prepare($sql);
    $stmt->bind_param('ssssssss', $this->nome, $this->nome, $this->bairro, $this->cidade, $this->cep, $this->estado, $this->telefone, $this->celular);
    return $stmt->execute();
    }
}

?>