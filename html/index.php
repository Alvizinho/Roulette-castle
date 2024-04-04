<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Home</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/index.css'>
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />
<body>
    <nav>
        <a href="">
            <img src="../img/logo.png" alt="">
        </a>
        <div>
            <a href="">Entrar</a>
            <a href="">cadastre-se</a>
        </div>
    </nav>
    <div class="container">
        <div id="sidebar">
            <a href=""><span class="material-symbols-outlined">house</span><div>HOME</div></a>
            <a href=""><span class="material-symbols-outlined">help</span><div>quem somos</div></a>
            <a href=""><span class="material-symbols-outlined">call</span><div>fale conosco</div></a>
            <a href=""><span class="material-symbols-outlined">monetization_on</span><div>sacar dinheiro</div></a>
            <a href=""><div></div></a>
            <a href=""><div></div></a>
            <a href=""><div></div></a>
            <a href=""><div></div></a>
            <a href=""><div></div></a>
            <a href=""><div></div></a>
            <a href=""><span class="material-symbols-outlined">account_circle</span><div>meu perfil</div></a>
        </div>
        <div id="trigger">
        </div>
        <div class="left-body" id="leftbody">
            <img src="../img/image 6.png" alt="">
            <?php
                include '../Casino/Codigos/Categoria.php';
            ?>
        </div>
    </div>
    <script src='../js/script.js'></script>
</body>
</html>