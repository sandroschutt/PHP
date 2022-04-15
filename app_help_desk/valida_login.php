<?php
//verifica autenticação do usuário
$usuarioAutenticado = false;

//usuarios do sistema
$usuarios_app = array(
    array('email' => 'adm@teste.com', 'senha' => '12345'),
    array('email' => 'usr@teste.com', 'senha' => 'abcde')
);

foreach ($usuarios_app as $user){
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuarioAutenticado = true;
    }
}

if($usuarioAutenticado == true){
    $_SESSION['autenticado'] = 'SIM';
    echo 'Usuário autenticado.';
} else{
    $_SESSION['autenticado'] = 'NÃO';
    header('Location: index.php?login=erro'); //encaminha usuario para determinada localização
}
?>