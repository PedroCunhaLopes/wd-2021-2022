<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<div class="header-container">
    <div class="logo-container">
        <a href="index.php">
            <img src="/imagens/logo_clinica.png" alt="Logo Clínica Bragança" style="height: 100px;">
        </a>
        <h1>Clínica Bragança</h1>
    </div>
    <nav class="navbar-toggler bg-light">
        <ul class="nav justify-content-center">
            <li><a class="nav-link" href="index.php?r=home">Página Inicial</a></li>
            <li><a class="nav-link" href="index.php?r=servicos">Serviços</a></li>
            <li><a class="nav-link" href="index.php?r=sobre">Sobre Nos</a></li>
            <li><a class="nav-link" href="index.php?r=contactos">Contatos</a></li>
            <?php if (isset($_SESSION['user_id'])): ?>
                <li><a class="nav-link" href="index.php?r=area">Área Pessoal</a></li>
            <?php else: ?>
                <li><a class="nav-link" href="index.php?r=login">Login/Registo</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</div>
