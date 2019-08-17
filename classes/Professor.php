<?php


 
class Professor {
    
    private $nome;
    private $matricula;
    private $senha;
    
    function __construct() {
        
    }
    
    function getNome() {
        return $this->nome;
    }

    function getMatricula() {
        return $this->matricula;
    }

    function getSenha() {
        return $this->senha;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }



    
}
