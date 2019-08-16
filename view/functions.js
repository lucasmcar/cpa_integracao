"use strict";


function mostraMensagem(){
var professor = document.getElementById('idProfessor');
var aluno = document.getElementById('idAluno');
var msg = document.getElementById('msg');

    if(professor.checked){
        
        msg.innerText = "Formato: p-xxxxxxxxx";
    }else if (aluno.checked){
        
        msg.innerText = "Formato: a-xxxxxxxxx";
    }
    
}



    

