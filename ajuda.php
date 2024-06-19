<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>ajuda</title>
</head>
<body>
<div>
    <h1 class="coluna1">Perguntas Frequentes</h1>
</div>

<?php include 'navbar.php'; ?>

<div class="row">
    <div class="col content menu1">
        <?php
        if(isset($_POST['Subject'])){
        ?>
        <div class="alert alert-success" role="alert">
            <strong>Data submitted</strong>
            <ul>
                <?php
                $subject = $_POST['Subject'];
                echo "<li>Nome: {$subject['nome']}</li>";
                echo "<li>Ano: {$subject['assunto']}</li>";
                echo "<li>Contacto: {$subject['contacto']}</li>";
                echo "<li>Pergunta: {$subject['pergunta']}</li>";
                ?>
            </ul>
        </div>
        <?php
        }
        ?>
        <form method="post">
            <div class="form-group">
                <label for="subject-nome">Nome</label>
                <input type="text" class="form-control" name="Subject[nome]" id="subject-nome" placeholder="Insira o Nome Completo" maxlength="45" required>
            </div>
            <div class="form-group">
                <label for="subject-assunto">Assunto</label>
                <input type="text" class="form-control" name="Subject[assunto]" id="subject-assunto" placeholder="Insira um Assunto" maxlength="45" required>
            </div>
            <div class="form-group">
                <label for="subject-contacto">Contacto</label>
                <input type="text" class="form-control" name="Subject[contacto]" id="subject-contacto" placeholder="Insira um Contacto" maxlength="9" required>
            </div>
            <div class="form-group pergunta">
                <label for="subject-pergunta">Pergunta</label>
                <input type="text" class="form-control espaço" name="Subject[pergunta]" id="subject-pergunta" placeholder="Insira a pergunta" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>
    <img class="direimg" src="/imagens/foto3.jpg">
</div>
</body>
</html>
