<?php
    include("barragem.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="images/egg-solid.svg">
    <script src="https://kit.fontawesome.com/dc9a30c3ce.js" crossorigin="anonymous"></script>
    <title>Social Egg</title>
</head>
<body>
    <header>
        <div class="logo">
            <i class="fa-solid fa-egg"></i>
        </div>
        <div class="itens-menu">
            <ul class=menu-vertical>
                <li><i class="fa-solid fa-house"></i><a class="home">Pagina Inicial</a></li> 
                <li><i class="fa-solid fa-hashtag"></i><a class="explorar">Explorar</a></li>
                <li><i class="fa-solid fa-bell"></i><a class="noti">Notificações</a></li>
                <li><i class="fa-solid fa-envelope"></i><a class="msg">Mensagens</a></li>
                <li><i class="fa-solid fa-bookmark"></i><a class="itens">Itens Salvos</a></li>
                <li><i class="fa-regular fa-newspaper"></i><a class="lista">Lista</a></li>
                <li><i class="fa-solid fa-user"></i><a class="perfil">Perfil</a></li>
                <li><i class="fa-solid fa-circle-chevron-down"></i><a class="mais">Mais</a></li>
                <button type="submit" class="button-eggtar" style="width:12em; padding:15px; margin-top:20px; float:left;" onclick="pesquisar()">Eggtar</button>
            </ul>
        </div>
    </header>
    <section class="publicar-text">
        <div class="container">
            <div class="box">
                <div class="texto">
                    <input type="text" name="eggtar" id="eggtar" placeholder="Digite o que tem pra falar ai meu chapa">
                    <button type="submit" class="button-eggtar">Eggtar</button>
                </div>
            </div>
        </div>
    </section>
    <section class="pesquisar">
        <div class="container">
            <div class="box-2">
                <input type="text" placeholder="Buscar na socialegg">
                <button type="submit" class="lupa">
+                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
            <section class="follow">
                <div class="h1-follow">
                    <h1>Panelinha</h1><br>
                    <div class="box-follow">
                        <a class="perfil-pedro"><span class="perfis">Calvão</span></a>
                    </div>

                    <div class="box-follow">
                        <a class="perfil-caua"><img src="images/foto-dellasgrave.jfif" width="65px" height="60px" style="background-color:rgb(46, 45, 45);"><span class="perfis">Dellasgrave</span></a>
                    </div>

                    <div class="box-follow">
                        <a class="perfil-nany"><img src="images/foto-anao.jfif" width="65px" height="60px" style="background-color:rgb(46, 45, 45);"><span class="perfis">Inimiga do meio fio</span></a>
                    </div>
                    
                    <div class="box-follow">
                        <a class="perfil-janini"><img src="images/judite-foto.jfif" width="65px" height="60px" style="background-color:rgb(46, 45, 45);"><span class="perfis">Judite</span></a>
                    </div>

                    <div class="box-follow">
                        <a class="perfil-karine"><img src="images/foto-kabide.jfif" width="65px" height="60px" style="background-color:rgb(46, 45, 45);"><span class="perfis">Kabine</span></a>
                    </div>

                    <div class="box-follow">
                        <a class="perfil-gabriel"><img src="images/foto-gabriel.jfif" width="65px" height="60px" style="background-color:rgb(46, 45, 45);"><span class="perfis">Munição de <br>churrasqueira</span></a>
                    </div>

                    <div class="box-follow">
                        <a class="perfil-lucas"><img src="images/foto-lucas.jfif" width="65px" height="60px" style="background-color:rgb(46, 45, 45);"><span class="perfis">Negão</span></a>
                    </div>

                    <div class="box-follow">
                        <a class="perfil-joao"><img src="images/foto-joao.jpg" width="65px" height="60px" style="background-color:rgb(46, 45, 45);"><span class="perfis">Nike boy</span></a>
                    </div>

                    <div class="box-follow">
                        <a class="perfil-matheus
                        "><img src="images/foto-matheus.jpeg" width="65px" height="60px" style="background-color:rgb(46, 45, 45);"><span class="perfis">Soca fofo</span></a>
                    </div>
            </section>
        </div>
    </section>
</body>
</html>