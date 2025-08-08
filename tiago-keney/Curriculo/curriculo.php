<?php

$dadosJson = file_get_contents("usuarios.json");
$usuarios = json_decode($dadosJson, true);

// Procura o usuário logado
$nomeUsuario = 'Usuário';
foreach ($usuarios as $usuario) {
    if ($usuario['usernumber'] === $usernumber) {
        $nomeUsuario = $usuario['username'];
        break;
    }
}
?>