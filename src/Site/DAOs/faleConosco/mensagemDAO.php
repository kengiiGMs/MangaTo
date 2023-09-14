<?php
include "../../conexao.php";
class mensagemDAO{
    private $assunto, $observacoes, $dataMensagem;

    public function getAssunto(){
        return $this->assunto;
    }
    public function setAssunto($as){
        $this->assunto =$as;
    }
    
    public function getObservacoes(){
        return $this->observacoes;
    }
    public function setObservacoes($obs){
        $this->observacoes =$obs;
    }

    public function getDataMensagem(){
        return $this->dataMensagem;
    }
    public function setDataMensagem($dat){
        $this->dataMensagem =$dat;
    }

    public function cadastrarNvM(){
        $sql = 'insert into mensagem (assunto, obs, dataMensagem) values (?,?,?)';

        $banco = new conexao();
        $con = $banco->getConexao();
        $resultado = $con->prepare($sql);
        $resultado->bindValue(1, $this->assunto);
        $resultado->bindValue(2, $this->observacoes);
        $resultado->bindValue(3, $this->dataMensagem);
        $final = $resultado->execute();

        if($final){
            echo "<script LANGUAGE= 'JavaScript'>
                window.alert('Cadastrado com sucesso');
                window.location.href='faleConosco.php';
                </script>";
        }
    }
}


?>