<?php
global $conn;
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include 'db.php';
$userDataAvailable = false;

if (isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];
    $sql = "SELECT nome, email, telefone, nif, morada FROM usuarios WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $userDataAvailable = true;
    }
    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Área Pessoal - Clínica Bragança</title>
    <link rel="stylesheet" href="/estilos/estilos.css">
</head>
<body>
<div class="column8">
    <div class="personal-info">
        <h2>Informações Pessoais</h2>
        <?php if ($userDataAvailable): ?>
            <p><strong>Nome:</strong> <?php echo htmlspecialchars($user['nome']); ?></p>
            <p><strong>Contacto:</strong> <?php echo htmlspecialchars($user['telefone']); ?> / <?php echo htmlspecialchars($user['email']); ?></p>
            <p><strong>NIF/Utente:</strong> <?php echo htmlspecialchars($user['nif']); ?></p>
            <p><strong>Morada:</strong> <?php echo htmlspecialchars($user['morada']); ?></p>
            <button onclick="location.href='logout.php'" class="btn" style="background-color: aliceblue">Logout</button>
        <?php else: ?>
            <p>Nenhuma informação disponível. <a href="login.php">Faça login</a> para ver os detalhes.</p>
        <?php endif; ?>
    </div>
</div>
</body>
</html>
