<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>home</title>
</head>
<body>
<body>
<div class="backimg-container">
    <img class="backimg" src="/imagens/foto2.jpg" alt="Background Image">
    <div class="footer-info">
        <p>Bragança 5300-002</p>
        <p>Rua Almameda da Santa Apolonia</p>
        <p>912345678</p>
        <p>clinicabraganca.braganca@hotmail.com</p>
        <a class="ajuda" href="index.php?r=ajuda">Ajuda</a>
    </div>
</div>
    <?php
    $file=dirname(path:__FILE__)."/home.php";
    if (isset($_GET["r"])){
        $file=dirname(path:__FILE__)."/notfound.php";
        $option=$_GET["r"];
        $page="$option.php";
        $f=dirname(path:__FILE__)."/$page";
        if(file_exists($f)){
            $file=$f;
        }
    }
    require_once $file;
    ?>
</body>
</html>

