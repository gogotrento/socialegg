<?php

    echo "<noscript
    ><html><head><title>401 Authorization Required</title></head>
    <body>
    <center><h1>401 Authorization Required</h1></center>
    <hr><center>Ative o JavaScript</center>
    </noscript>";

?>


<!DOCTYPE html>
    <html lang='en'>
    <center>
        <head>
        <script src='https://kit.fontawesome.com/dc9a30c3ce.js' crossorigin='anonymous'></script>
        <script src='https://code.jquery.com/jquery-3.6.0.js'></script>
        <script src='https://code.jquery.com/ui/1.13.2/jquery-ui.js'></script>
        <link rel='stylesheet' href='pop-up-adm.css'>
        <link rel='stylesheet' href='https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css'>
        <link rel='stylesheet' href='https://jqueryui.com/resources/demos/style.css'>
        <title>Login - ADMIN</title>
        <link rel='icon' href='.../images/egg-solid.svg'>
            <script>
                $( function() {
                $( '#dialog' ).dialog();
                } );
            </script>
        </head>
        <body>
            <div id='dialog' title='LOGIN'>
                <form class='login' method='post' action='' autocomplete='off'>
                    <p>Insira seu usuario e senha</p>
                    <input class='usuario' name='usuario' placeholder='insira seu usuario' type='text'>
                    <input class='senha' name='senha' placeholder='insira sua senha' type='password'>
                    <br><button type='submit'>Login</button><br>
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
                            
                            if($usuario  != "adm"){
                                echo "<b style='color:red'>Campo usuario Inválido!</b>";
                            
                            }
                            
                            if($senha != "helpdesk"){
                                echo "<b style='color:red'>Campo senha Inválido!</b>";
                            }
            
                            if(!isset($_SESSION)){
                                session_start();
                            }
            
                            $_SESSION['user'] = $usuario ;
                
                            header("Location: troca-senha.php");
                        }

                    ?>
                </form>
            </div>
        </body>
    </center>
    </html>
