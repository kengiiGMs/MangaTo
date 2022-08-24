<?php
$codProduto = filter_input(INPUT_GET,'codProduto');
$cadastrarDescricao = filter_input(INPUT_GET,'cadastrarDescricao');
$cadastrarValor = filter_input(INPUT_GET,'cadastrarValor');
/* $cadastrarFigura = filter_input(INPUT_GET,'cadastrarFigura'); */
$botao =  filter_input(INPUT_GET,'botao');

include 'produtoDAO.php';
$novoProduto = new produtoDAO();

$novoProduto->setCodProduto($codProduto);
$novoProduto->setDescricao($cadastrarDescricao);
$novoProduto->setValor($cadastrarValor);

if($botao=='cadastrar'){
        $novoProduto->cadastrarNvP();
    }else if($botao=='deletar'){
        $novoProduto->deletarNvP();
    }

?>