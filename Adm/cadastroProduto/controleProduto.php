<?php
$codProduto = filter_input(INPUT_POST,'codProduto');
$cadastrarDescricao = filter_input(INPUT_POST,'cadastrarDescricao');
$cadastrarValor = filter_input(INPUT_POST,'cadastrarValor');
$botao =  filter_input(INPUT_POST,'botao');

include 'produtoDAO.php';
$novoProduto = new produtoDAO();

$novoProduto->setCodProduto($codProduto);
$novoProduto->setDescricao($cadastrarDescricao);
$novoProduto->setValor($cadastrarValor);

    if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
        session_start();
    }

    if(isset($_FILES['arquivo'])){
        $Atual = $_FILES['arquivo']['name'];
        $Temp = $_FILES['arquivo']['tmp_name'];
        $Dest = '../img/'.$Atual;
        $_SESSION['arquivoAtual']  = $Atual;
        $_SESSION['arquivoTemp'] =  $Temp;
        $_SESSION['destino'] = $Dest;
    }



if($botao=='cadastrar'){
        $novoProduto->cadastrarNvP(); 
    }else if($botao=='deletar'){
        $novoProduto->deletarNvP();
    }

?>