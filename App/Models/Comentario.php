<?php
namespace App\Models;

use MF\Model\Model;

class Comentario extends Model{
    private $id;
    private $id_usuario;
    private $comentario;
    private $data;

    public function __get($atributo){
    return $this->$atributo;
    }
    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    public function salvar(){
        $query = "INSERT INTO comentarios(comentario,id_usuario) VALUES (:comentario, :id_usuario)" ;
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':comentario', $this->__get('comentario'));
        $stmt->bindValue(':id_usuario', $this->__get('id_usuario'));
        $stmt->execute();


        return $this;
    }

    public function getAll(){
        $query = "SELECT c.id, c.id_usuario, u.nome ,c.comentario, DATE_FORMAT(c.data_comentario, '%d/%m/%Y %H:%i') as data FROM comentarios as c 
        LEFT JOIN usuarios as u on(c.id_usuario = u.id)WHERE c.id_usuario = :id_usuario ORDER BY c.data_comentario DESC";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id_usuario', $this->__get('id_usuario'));
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}

?>