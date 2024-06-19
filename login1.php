<?php
global $conn;
session_start();  // Inicie a sessão no início do arquivo
include 'db.php'; // Conexão com o banco de dados

$email = $conn->real_escape_string($_POST['email']);
$senha = $_POST['password']; // Considerar hashing para segurança!

$sql = "SELECT id, senha FROM usuarios WHERE email = '$email' AND senha = '$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $_SESSION['user_id'] = $user['id']; // Armazena o ID do usuário na sessão
    echo "<script>alert('Login bem-sucedido!'); window.location='index.php';</script>"; // Redireciona para a página de área pessoal
} else {
    echo "<script>alert('Email ou senha incorreta!'); window.history.back();</script>";
}

$conn->close();
?>