<?php

/**
 * Quando eu for começar a trabalhar com sessão, eu devo
 * invocar a função session_start().
 */
session_start();
$_SESSION["nome"] = "Gabriel Rodrigues dos Santos";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";