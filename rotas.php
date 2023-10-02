<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($uri_parse)
{
    case '/':
        include 'View/modules/Home/Home.php';
    break;

    case '/produto/venda':
        include 'View/modules/VendaProduto/FormVendaProduto.php';
    break;

    case '/produto/cadastro':
        include 'View/modules/CadastroProduto/FormCadastroProduto.php';
    break;
}