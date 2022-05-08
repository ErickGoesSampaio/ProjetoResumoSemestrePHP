<?php

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $usr1 = 'admin';
    $pass1 = 'admin';

    $usr2 = 'Erick';
    $pass2 = 'erick123';

    // Apenas para gerir o código para visualizar as váriaveis

    if (($usuario == $usr1) && ($senha == $pass1) || ($usuario == $usr2) && ($senha == $pass2) ){

        echo"<script language='javascript' type='text/javascript'>
        alert('Logado com sucesso!');
        window.location.href='../index2.php';</script>";
        
        }else {
        
            echo"<script language='javascript' type='text/javascript'>
            alert('Usuario e/ou senha incorretos');
            window.location.href='../login.html';</script>";
        
        }
        


