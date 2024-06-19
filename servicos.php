<?php
session_start();
//include 'navbar.php'; // Inclui a barra de navegação
include 'db.php'; // Certifique-se de que o arquivo db.php está incluído
?>
<!DOCTYPE html>
<html lang="pt">
<head >
    <meta charset="UTF-8">
    <title>Especialidades Médicas - Clínica Bragança</title>
    <link rel="stylesheet" href="/estilos/estilos.css">
</head>
<body>
<div>
    <div class="column1">
        <h2>Clínica Geral</h2>
        <?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin']): ?>
            <button onclick="editList('clinicaGeral')">Editar</button>
        <?php endif; ?>
        <ul id="clinicaGeral">
            <li>Proctologia</li>
            <li>Hepatologia</li>
            <!-- outros itens -->
        </ul>
    </div>
    <div class="column2">
        <h2>Exames Especiais</h2>
        <?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin']): ?>
            <button onclick="editList('examesEspeciais')">Editar</button>
        <?php endif; ?>
        <ul id="examesEspeciais">
            <li>Teste Covid (PCR)</li>
            <li>Ecografia Obstétrica 3D/4D</li>
            <!-- outros itens -->
        </ul>
    </div>
</div>
<script>
    function editList(listId) {
        // Implementação de uma função para editar a lista
        // Pode incluir funcionalidades de adicionar/remover itens ou alterar texto diretamente na página
    }
</script>
</body>
</html>
