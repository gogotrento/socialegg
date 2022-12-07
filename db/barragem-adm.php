<?php

if(!isset($_SESSION)){
    session_start();
    
}

if(!isset($_SESSION['user'])){
    header("Location: db/pop-up-adm.php");
}

?>