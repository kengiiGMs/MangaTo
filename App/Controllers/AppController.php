<?php
namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

class AppController extends Action{


public function timeline(){
        $this->validaAutenticacao();
        $comentario = Container::getModel('Comentario');
        $comentario->__set('id_usuario', $_SESSION['id']);
        $comentarios = $comentario->getAll();

        $this->view->comentarios = $comentarios;

        $this->render('timeline');

}
public function comentario(){
        $this->validaAutenticacao();
        $comentario= Container::getModel('Comentario');
        $comentario->__set('comentario', $_POST['comentario']);
        $comentario->__set('id_usuario', $_SESSION['id']);
        $comentario->salvar();
        header('Location: /timeline');
    

}

public function validaAutenticacao(){
    session_start();
    if(!isset($_SESSION['id']) || $_SESSION['id'] == '' || !isset($_SESSION['nome']) || $_SESSION['nome'] == ''){
        header('Location: /?login=erro');
    }else{
        
    }
}

}
    ?>