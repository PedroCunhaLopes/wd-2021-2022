<?php
global $conn;
session_start(); 
include 'db.php'; 

$email = $conn->real_escape_string($_POST['email']);
$senha = $_POST['password'];

$sql = "SELECT id, senha FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($senha, $user['senha'])) { 
        $_SESSION['user_id'] = $user['id']; 
        echo "<script>alert('Login bem-sucedido!'); window.location='index.php';</script>"; 
    } else {
        echo "<script>alert('Email ou senha incorreta!'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Email ou senha incorreta!'); window.history.back();</script>";
}

$stmt->close();
$conn->close();
?>
