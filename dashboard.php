<?php
    session_start();
    if (isset($_SESSION['logado']) && $_SESSION['logado']) {
        echo "Bem-vinda,    " . $_SESSION['nome'];
    } else {
        header ("Location: login.php");
        exit();
    }
?>