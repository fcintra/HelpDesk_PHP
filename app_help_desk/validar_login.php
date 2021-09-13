<?php

    session_start();

    //variavel que verifica se a autenticação foi realizada
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    $perfis = [1 => 'Administrativo', 2 => 'Usuário'];

    // Usuário do sistema

    $usuarios_app = array(
        array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil_id' => 1, 'nome' => 'Adm'),
        array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => '123456', 'perfil_id' => 1, 'nome' => 'User'),
        array('id' => 3, 'email' => 'jose@teste.com.br', 'senha' => '123456', 'perfil_id' => 2, 'nome' => 'Jose'),
        array('id' => 4, 'email' => 'maria@teste.com.br', 'senha' => '123456', 'perfil_id' => 2, 'nome' => 'Maria'),
    );
    




    foreach($usuarios_app as $user){
        
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
           $usuario_id = $user['id'];
           $usuario_perfil_id = $user['perfil_id'];
           $usuario_perfil_nome = $user['nome'];
        }

    }  

    if($usuario_autenticado){
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        $_SESSION['nome'] = $usuario_perfil_nome;
        header('Location: home.php');
        
        
     } else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
     }
        

?>