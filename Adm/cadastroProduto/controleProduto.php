<?php
$codProduto = filter_input(INPUT_GET,'codProduto');
$cadastrarDescricao = filter_input(INPUT_GET,'cadastrarDescricao');
$cadastrarValor = filter_input(INPUT_GET,'cadastrarValor');
$cadastrarFigura = $_FILES['cadastrarFigura'] ['name'];
$cadastrarTemp = $_FILES['cadastrarFigura'] ['tmp_name'];
$destino = '../img/'.$cadastrarFigura;
$botao =  filter_input(INPUT_GET,'botao');

include 'produtoDAO.php';
$novoProduto = new produtoDAO();

$novoProduto->setCodProduto($codProduto);
$novoProduto->setDescricao($cadastrarDescricao);
$novoProduto->setValor($cadastrarValor);
$novoProduto->setFigura($cadastrarFigura);
$novoProduto->setTemp($cadastrarTemp);
$novoProduto->setDest($destino);



if($botao=='cadastrar'){
        $novoProduto->cadastrarNvP();
    }else if($botao=='deletar'){
        $novoProduto->deletarNvP();
    }

?>