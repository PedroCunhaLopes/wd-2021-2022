<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include 'navbar.php'; 
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Clínica Bragança</title>
    <link rel="stylesheet" href="/estilos/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <?php

    if (isset($_GET['r'])) {
        $page = $_GET['r'] . '.php';
        if (file_exists($page)) {
            include $page;
        } else {
            echo "<p>Página não encontrada.</p>"; 
        }
    } else {
        echo "<h1>Bem-vindo à Clínica Bragança</h1>";
        echo "<p>Escolha uma opção no menu para começar.</p>";
    }
    ?>
</div>
</body>
</html>
