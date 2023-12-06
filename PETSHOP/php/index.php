<?php
session_start();

// Verificar se o usuário está conectado
if(isset($_SESSION['conectado']) && $_SESSION['conectado'] == true) {
    echo '<p>Você está conectado!</p>';
    // Remover a variável de sessão para que a mensagem não seja exibida novamente após um novo login
    unset($_SESSION['conectado']);
}
?>
