<?php
    // processa.php
    if (isset($_REQUEST['nome'])) {
        echo "Olá, " . htmlspecialchars($_REQUEST['nome']);
    }

?>