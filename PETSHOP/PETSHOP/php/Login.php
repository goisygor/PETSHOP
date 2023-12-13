<?php
session_start();
include('database.php');

if((empty($_POST['email'])) || (empty($_POST['senha']))) {
    header('Location: ../html/LoginCadastro.html');
    exit();
}

$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = " select email from cadastro where email = '{$email}' and senha = '{$senha}'";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);


if($row == 1) {
    $_SESSION['email'] = $email;
    //$_SESSION['conectado'] = true; // Adicione uma variável de sessão para indicar que o usuário está conectado
    header('Location: ../html/home.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: ../html/LoginCadastro.html');
    exit();
}
?>
