<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['cadastro'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

        // Preparar a declaração SQL
        $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nome, $email, $senha);

        // Executar a declaração
        $stmt->execute();

        // Fechar a declaração e a conexão
        $stmt->close();
        $conn->close();
    }
}
?>
