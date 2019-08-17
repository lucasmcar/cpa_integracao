<?php

class Alunos {
    
    private $matricula;
    private $senha;
    private $curso;
    
  
    function getMatricula() {
        return $this->matricula;
    }

    function getSenha() {
        return $this->senha;
    }

    function getCurso() {
        return $this->curso;
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }



    
}
