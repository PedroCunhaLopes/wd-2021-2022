<?php
global $conn;
include 'db.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $conn->real_escape_string($_POST['nome']);
    $email = $conn->real_escape_string($_POST['email']);
    $assunto = $conn->real_escape_string($_POST['assunto']);
    $mensagem = $conn->real_escape_string($_POST['mensagem']);


    $sql = "INSERT INTO contactos (nome, email, assunto, mensagem) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        echo "<script>alert('Erro ao preparar a declaração: " . $conn->error . "');</script>";
    } else {
        $stmt->bind_param("ssss", $nome, $email, $assunto, $mensagem);
        if ($stmt->execute()) {
            echo "<script>alert('Mensagem enviada com sucesso!');</script>";
        } else {
            echo "<script>alert('Erro ao enviar mensagem: " . $stmt->error . "');</script>";
        }
        $stmt->close();
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Contactos - Clínica Bragança</title>
    <link rel="stylesheet" href="/estilos/estilos.css">
</head>
<body>

<div class="column4">
    <h2>Contactos</h2>
    <p>Bragança: 273313337</p>
    <p>Viseu: 232981325</p>
    <p>Cabeceiras: 253662133</p>
</div>

<div class="column5">
    <h2>Entre em Contato</h2>
    <form method="post">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="input123" id="nome" name="nome" placeholder="Insira seu nome completo" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="input123" id="email" name="email" placeholder="Insira seu email" required>
        </div>
        <div class="form-group">
            <label for="assunto">Assunto</label>
            <input type="text" class="input123" id="assunto" name="assunto" placeholder="Insira o assunto do contato" required>
        </div>
        <div class="form-group">
            <label for="mensagem">Mensagem</label>
            <textarea class="input123" id="mensagem" name="mensagem" placeholder="Insira a mensagem" required></textarea>
        </div>
        <button type="submit" class="btn" style="background-color: aliceblue">Enviar</button>
        <button type="reset" class="btn" style="background-color: aliceblue">Limpar</button>
    </form>
</div>

<img class="img1234" src="/imagens/mapa.png">
</body>
</html>
