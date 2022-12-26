<?php

namespace App\Models;

use MF\Model\Model;

class Usuario extends Model{

    private $id;
    private $nome;
    private $email;
    private $senha;
    private $senhaConfirma;
    
    public function __get($atributo){
        return $this->$atributo;
    }
    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    public function validarCadastro(){
        $valido = true;

        if(strlen($this->__get('nome')) <3){
            $valido = false;
        }
        if(strlen($this->__get('email')) <3){
            $valido = false;
        }
        if(strlen($this->__get('senha')) <3){
            $valido = false;
        }
        if(strlen($this->__get('senha')) == strlen($this->__get('senhaConfirma')) ){
           
        }else{
            $valido = false;
        }

        return $valido;
    }

    public function salvar(){
        $query = "INSERT INTO usuarios(nome_usuario, email_usuario, senha_usuario) VALUES(:nome, :email, :senha)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':nome', $this->__get('nome'));
        $stmt->bindValue(':email', $this->__get('email'));
        $stmt->bindValue(':senha', $this->__get('senha'));
        $stmt->execute();

        return $this;
    }

    public function getUsuarioPorEmail(){
        $query = "SELECT nome_usuario, email_usuario FROM usuarios WHERE email_usuario = :email";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':email', $this->__get('email'));
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function autenticar(){
        $query = "SELECT id_usuario, nome_usuario, email_usuario FROM usuarios WHERE email_usuario = :email AND senha_usuario = :senha";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':email', $this->__get('email'));
        $stmt->bindValue(':senha', $this->__get('senha'));
        $stmt->execute();

        $usuario = $stmt->fetch(\PDO::FETCH_ASSOC);

        if($usuario['id_usuario'] != '' && $usuario['nome_usuario'] != ''){
            $this->__set('id', $usuario['id_usuario']);
            $this->__set('nome', $usuario['nome_usuario']);
            
        }

        return $this;

    }

}

?>