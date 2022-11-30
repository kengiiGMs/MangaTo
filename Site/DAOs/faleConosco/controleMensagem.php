<?php
$assunto = filter_input(INPUT_GET,'assunto');
$observacoes = filter_input(INPUT_GET,'observacoes');
$dataMensagem = filter_input(INPUT_GET,'dataMensagem');
$botao =  filter_input(INPUT_GET,'botao');

include 'mensagemDAO.php';
$novaMensagem = new mensagemDAO();

$novaMensagem->setAssunto($assunto);
$novaMensagem->setObservacoes($observacoes);
$novaMensagem->setDataMensagem($dataMensagem);


if($botao=='cadastrar'){
        $novaMensagem->cadastrarNvM();
    }else if($botao=='deletar'){
        $novaMensagem->DeletarNvM();
    }

?>