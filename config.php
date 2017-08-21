<?php


$endereco = $_SERVER['REQUEST_URI'];
$nome_pagina = strrchr($endereco, "/");

switch ($nome_pagina) {
    case "/":
    case "/index":
    case "/home":
    case "/sobre-empresa":
    case "/servico":
    case "/produto":
    case "/contato":
        if ($nome_pagina == "/") {
            $nome_pagina = "/home";
        }
        break;

    case "/enviar":
       $nome_pagina = "/contato";
        break;
    default:
        $nome_pagina = "/home";
        break;
}