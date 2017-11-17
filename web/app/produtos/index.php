<?php

require __DIR__ . '/../../bootstrap.php';
include __DIR__ . '/../../classes/Db/Produtos.php';

//var_dump($_REQUEST);exit;

$produtos = [];

try {

    $produto = new Produtos($conn);
    $produtos = $produto->buscar();

    if ($_REQUEST['cadastrar']) {
        $produto->criar($_REQUEST['nome'], $_REQUEST['tipo'], $_REQUEST['valor'], $_REQUEST['imposto']);
    }

} catch (Exception $e) {
    echo $e->getMessage();
} catch (Throwable $t) {
    echo $t->getMessage();
}


echo twig_render('produtos/index.html.twig', [
    'produtos' => $produtos
]);