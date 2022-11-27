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
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
            <section class="moments">
                <div class="h1-moments">
                    <h1>Assuntos do Momento</h1>
                    <span class="itens-assuntos">Corinthians</span><br>
                    <span class="itens-assuntos">Lula</span><br>
                    <span class="itens-assuntos">Novo twitter</span><br>
                    <span class="itens-assuntos">Elon Musk vai falir</span><br>
                </div>
            </section>
        </div>
    </section>
</body>
</html>