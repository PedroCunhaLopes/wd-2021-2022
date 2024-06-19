<?php
include 'db.php'; // Certifique-se de que o arquivo db.php contém as credenciais corretas e a conexão com o banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $conn->real_escape_string($_POST['nome']);
    $email = $conn->real_escape_string($_POST['email']);
    $telefone = $conn->real_escape_string($_POST['telefone']);
    $nif = $conn->real_escape_string($_POST['nif']);
    $senha = $_POST['password']; // Considerar usar password_hash() aqui para segurança
    $morada = $conn->real_escape_string($_POST['morada']); // Capturando a morada

    // Query para inserir os dados na base de dados
    $sql = "INSERT INTO usuarios (nome, email, telefone, nif, senha, morada) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        echo "<script>alert('Erro ao preparar a declaração: " . $conn->error . "'); window.history.back();</script>";
        exit;
    }

    $stmt->bind_param("ssssss", $nome, $email, $telefone, $nif, $senha, $morada);

    if ($stmt->execute()) {
        echo "<script>alert('Registro realizado com sucesso!'); window.location='login.php';</script>"; // Ajuste o redirecionamento conforme necessário
    } else {
        echo "<script>alert('Erro ao registrar: " . $stmt->error . "'); window.history.back();</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
