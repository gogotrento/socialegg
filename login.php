<?php
    include("db/conexao.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="login.css">
        <script src="label.js"></script>
        <link rel="icon" href="images/egg-solid.svg">
        <script src="https://kit.fontawesome.com/dc9a30c3ce.js" crossorigin="anonymous"></script>
        <title>Social Egg - Login</title>
    </head>

    <body>
        <center>
            <div class="main-login">
                <div class="logo">
                    <i class="fa-solid fa-egg"></i>
                </div>

                <form class="login" method="post" action="" autocomplete="off">
                    <h1 id="h1">Login</h1>

                        <div id="input-usuario" onclick="a()" onmouseover="a()" onmouseover="remove()">
                            <label for="usuario" id="label-usuario">Usuário</label><br>
                            <input type="text" name="usuario" id="usuario" autocomplete="off">
                        </div>

                        <div id="input-senha" onclick="b()" onmouseover="b()" onmouseout="b2()"onmouseover="remove()">
                            <label for="senha" id="label-senha">Senha</label><br>
                            <input type="password" name="senha" id="senha" autocomplete="off">
                        </div>
                    <a href="https://api.whatsapp.com/send?phone=5548984654412&text=oii%20Matheus%20esqueci%20minha%20senha%20troca%20pra%20mim%3F">Esqueceu a senha?</a><br>
                    <button id="button-entrar" type="submit">Entrar</button>
                    <br>
                    
            <?php
                if(isset($_POST['usuario']) && isset($_POST['senha'])){

                    $usuario = $_POST['usuario'];
                    $senha = $_POST['senha'];
            
            
                    if ($usuario=="" || $usuario==null || strlen($usuario) == 0){
                        echo"<b style='color:red'>Campo usuário Inválido!</b>";
                       
                    }
            
                    if ($senha=="" || $senha==null || strlen($senha) == 0){
                        echo "<b style='color:red'>Campo senha Inválido!</b>";
                       
                    }
                    
                    if(strlen($senha) > 8){
                        echo "<b style='color:red'>A senha precisa conter de 6 a 8 dígitos!</b>";
                       
                    }
                    
                    if(strlen($senha) < 6){
                        echo "<b style='color:red'>A senha precisa conter de 6 a 8 dígitos!</b>";
                       
                    }
                    
                    $usuario = $mysqli->real_escape_string($_POST['usuario']);
                    $senha = $mysqli->real_escape_string($_POST['senha']);
            
                    $sql_code = "SELECT * FROM login WHERE usuario = '$usuario' AND senha = '$senha'";
                    $sql_query = $mysqli->query($sql_code) or die("Falha no sistema: " . $mysqli->error);
                    
                    $qntd = $sql_query-> num_rows;
                    
                    if($qntd == 1){
                        
                        $usuario = $sql_query->fetch_assoc();
            
                        if(!isset($_SESSION)){
                            session_start();
                        }
            
                        $_SESSION['user'] = $usuario['usuario'];
                        $_SESSION['name'] = $usuario['nome'];
            
                        header("Location: index.php");
                        
                        
                    } else {
                        echo "<b style='color:red'>Usuário ou senha inválidos!</b>";
                    }

                }
        ?>
                </form>
            </div>
            
        </center>
    </body>
    
</html>