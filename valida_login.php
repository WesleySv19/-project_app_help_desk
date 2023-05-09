<?php 
    session_start();

    $authenticatedUser = false;
    $user_id = null;
    $user_profile_id = null;

    $profiles = array(1 => 'administrative', 2 => 'user');

        $users_app = array(
            array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => 123, 'profile_id' => 1),
            array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => 123, 'profile_id' => 1),
            array('id' => 3, 'email' => 'jose@teste.com.br', 'senha' => 123, 'profile_id' => 2),
            array('id' => 4, 'email' => 'maria@teste.com.br', 'senha' => 123, 'profile_id' => 2)
        );

        foreach($users_app as $user) {

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
                $authenticatedUser = true;
                $user_id = $user['id'];  
                $user_profile_id = $user['profile_id'];  
        }

    }

        
        if($authenticatedUser) {
            header('location: home.php');
             $_SESSION['authenticated'] = 'SIM';
             $_SESSION['id'] = $user_id;
             $_SESSION['profile_id'] = $user_profile_id;
        } else {
             $_SESSION['authenticated'] = 'NÃO';
            header('location: index.php?login=erro');
    }

        
?>