<?php

session_start();
if (isset($_SESSION["nome"])) {
    echo "Nome que está vindo da sessão: " . $_SESSION["nome"] . "</br>";
}
echo "<a href='destruir-sessao.php'>Destruir sessão</a>";