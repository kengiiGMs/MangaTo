<?php
include "../../conexao.php";
class produtoDAO{
    private $codProduto, $cadastrarDescricao, $cadastrarValor, $cadastrarFigura;

    public function getCodProduto(){
        return $this->codProduto;
    }
    public function setCodProduto($cd){
        $this->codProduto =$cd;
    }
    
    public function getDescricao(){
        return $this->cadastrarDescricao;
    }
    public function setDescricao($ds){
        $this->cadastrarDescricao =$ds;
    }

    public function getValor(){
        return $this->cadastrarValor;
    }
    public function setValor($val){
        $this->cadastrarValor =$val;
    }

    public function getFigura(){
        return $this->cadastrarFigura;
    }
    public function setFigura($f){
        $this->cadastrarFigura =$f;
    }


    public function cadastrarNvP(){
        $sql = 'insert into produto (codigo_produto, descricao, valor) values (?,?,?)';

        $banco = new conexao();
        $con = $banco->getConexao();
        $resultado = $con->prepare($sql);
        $resultado->bindValue(1, $this->codProduto);
        $resultado->bindValue(2, $this->cadastrarDescricao);
        $resultado->bindValue(3, $this->cadastrarValor);
        $final = $resultado->execute();

        if($final){
            echo "<script LANGUAGE= 'JavaScript'>
                window.alert('Cadastrado com sucesso');
                window.location.href='produto.php';
                </script>";
        }
    }
    public function deletarNvP(){
        $sql1 = 'delete from produto where codigo_produto = ?';
        $banco = new conexao();
        $con = $banco->getConexao();
        $resultado = $con->prepare($sql1);
        $resultado->bindValue(1, $this->getCodProduto()); 
        $final = $resultado->execute();
        if($final){
            echo "<script LANGUAGE='JavaScript'>
            window.alert('Produto deletado com sucesso');
            window.location.href='produto.php';
            </script>";
        }
    }
}


?>