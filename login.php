<?php
    session_start();
    $_SESSION['nome'] = "Maria Oliveira";
    $_SESSION['logado'] = true;

    echo "Sessão iniciada!";
?>