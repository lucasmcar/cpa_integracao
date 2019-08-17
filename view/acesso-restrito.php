<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../assets/estilo.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title></title>
    </head>
    <body>
        <div class="container">
            
        <div class="logo-box text-center">
            <img src="../assets/03-final.png">
        </div>
        
        <div class="box-form m-box-form">
            <form method="post" action="../configuracao/valida-dados.php">
            <p>Acesso do:</p>
            <label for="idProfessor">
                <input type="radio" id="idProfessor"  name="rdCpa" value="Professor">
                Professor
            </label>
            
            <label for="idAluno">
                <input type="radio" id="idAluno"  name="rdCpa" value="Aluno">
                Aluno
            </label>
        <div class="label-float">
            <input type="text" name="txMatricula" onfocus="return mostraMensagem();" placeholder=" "/>
            <label>Nº de Matrícula</label>
            
        </div>
            <span id="msg"></span>
        <br/>
        <div class="label-float">
            <input type="password"  name="txSenha" placeholder=" "/>
            <label id="senhaSelecionada">Senha de usuário </label>
        </div>
        
        <button class="btn btn-primary-cpa" type="submit">Acessar</button>
            </form>
        </div>
        </div>
    </body>
    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="functions.js"></script>
</html>
