
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Login e Registro - Clínica Bragança</title>
    <link rel="stylesheet" href="/estilos/estilos.css">
</head>
<body>

<div class="column4">
    <h1>Início de Sessão</h1>
    <form method="post" action="login1.php"> <!-- Action para o script de login -->
        <div class="form-group">
            <label for="login-email">Email</label>
            <input type="email" id="login-email" name="email" class="input123" placeholder="Insira o seu email" required>
        </div>
        <div class="form-group">
            <label for="login-password">Password</label>
            <input type="password" id="login-password" name="password" class="input123" placeholder="********" required>
        </div>
        <button type="submit" class="btn" style="background-color: aliceblue; color: black; margin-top: 10px">Login</button>
    </form>
</div>
<div class="column5">
    <h1>Registro</h1>
    <form method="post" action="register.php"> <!-- Action para o script de registro -->
        <div class="form-group">
            <label for="reg-nome">Nome Completo</label>
            <input type="text" id="reg-nome" name="nome" class="input123" placeholder="Insira o Nome Completo" required>
        </div>
        <div class="form-group">
            <label for="reg-email">Email</label>
            <input type="email" id="reg-email" name="email" class="input123" placeholder="Insira o seu email" required>
        </div>
        <div class="form-group">
            <label for="reg-telefone">Telefone</label>
            <input type="text" id="reg-telefone" name="telefone" class="input123" placeholder="Insira um número de telefone" required>
        </div>
        <div class="form-group">
            <label for="reg-nif">NIF</label>
            <input type="text" id="reg-nif" name="nif" class="input123" placeholder="Introduza o seu número de identificação fiscal">
        </div>
        <div class="form-group">
            <label for="reg-password">Password</label>
            <input type="password" id="reg-password" name="password" class="input123" placeholder="Insira uma password forte" required>
        </div>
        <div class="form-group">
            <label for="reg-morada">Morada</label>
            <input type="text" id="reg-morada" name="morada" class="input123" placeholder="Insira a sua morada" required>
        </div>
        <button type="submit" class="btn" style="background-color: aliceblue; color: black; margin-top: 10px">Registro</button>
        <button type="reset" class="btn" style="background-color: aliceblue; color: black; margin-top: 10px">Limpar</button>
    </form>
</div>
</body>
</html>
