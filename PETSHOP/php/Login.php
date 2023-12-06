<?php
session_start();
include('database.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT user FROM login WHERE user = '{$email}' AND pass = MD5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['email'] = $email;
    $_SESSION['conectado'] = true; // Adicione uma variável de sessão para indicar que o usuário está conectado
    header('Location: index.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: erro.php');
    exit();
}
?>
