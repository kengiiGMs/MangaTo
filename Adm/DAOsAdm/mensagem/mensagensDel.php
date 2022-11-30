<?php

 if(!empty($_GET['codigo_mensagem'])){
        include_once('../../conexao.php');

        $cod= $_GET['codigo_mensagem'];
        $sqlSelect = "SELECT * FROM mensagem WHERE codigo_mensagem=$cod";
        $banco = new conexao();
        $con = $banco->getConexao();
        $result = $con->query($sqlSelect);
    
        if($result->rowCount() > 0){
            $sqlDelete = "DELETE FROM mensagem WHERE codigo_mensagem=$cod";
            $resultDelete = $con->query($sqlDelete);
        }
    } header('location: mensagens.php');

?>