<?php

require_once "src/Classes/Produto.php";

$prodd1 = new Produto;
$prod1->titulo = "Coca-cola";
$prod1->descricao = "Refrigerante 350ml";
$prod1->preco = 3.50;
$prod1->desconto = 0.10;

//$prod1 -> definaCodigoBarras("78949000000000");
$prod1 -> definaCodigoBarras("78949000000000");

var_dump($prod1);