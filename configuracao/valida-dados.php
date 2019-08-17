<?php

/*Pega os dados do formulário*/

$matricula = filter_input(INPUT_POST, 'txMatricula', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'txSenha', FILTER_SANITIZE_SPECIAL_CHARS);

$opcao = filter_input(INPUT_POST, 'rdCpa');

if (empty($opcao)){
    echo 'Por favor, selecionar uma opçao';
}else if($opcao == "Professor"){
    if(substr($matricula, 0, 2) != "P-"){
        echo "Matricula inválida";
    }else{
    header("location: ../view/acesso-professor");    
    }
    
}else if($opcao == "Aluno"){
   if(substr($matricula, 0, 2) != "A-"){
        echo "Matricula inválida";
    }else{
        header("location: ../view/acesso-aluno");    
    }
}
