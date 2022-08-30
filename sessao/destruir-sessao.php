<?php

session_start();
/**
 * A função session_destroy(), destroi a sessão 
 * e remove todos os dados da sessão.
 */
session_destroy();
echo "Sessão finalizada com sucesso!</br>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";