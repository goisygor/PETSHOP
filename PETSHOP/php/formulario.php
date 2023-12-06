<?php
include 'database.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulario"; // Substitua pelo nome real do seu banco de dados

// Verificar se os dados foram recebidos por meio do método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        header("location: erro.html");
        exit();
    } else {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Usar declaração preparada para prevenir injeção de SQL
        $sql = "INSERT INTO cadastro (nome, email, senha) VALUES (?, ?, ?)";

        $stmt = $conn->prepare($sql);

        // Verificar se a preparação da consulta foi bem-sucedida
        if ($stmt) {
            // Vincular os parâmetros e executar a inserção
            $stmt->bind_param("sss", $nome, $email, $senha);

            if ($stmt->execute()) {
                header("location: sucesso.html");
                exit();  // Adicionado para garantir que nenhum código adicional seja executado
            } else {
                header("location: erro.html");
                exit();
            }

            // Fechar a declaração preparada
            $stmt->close();
        } else {
            header("location: erro.html");
            exit();
        }
    }

    // Fechar a conexão
    $conn->close();
} else {
    // Se os dados não foram recebidos por POST, redirecionar para a página de erro
    header("location: erro.html");
    exit();
}
?>
