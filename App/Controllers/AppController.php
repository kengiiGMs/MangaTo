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

        $usuario = Container::getModel('Usuario');
        $usuario->__set('id', $_SESSION['id']);
        $this->view->info_usuario = $usuario->getInfoUsuario();
        $this->view->total_comentarios = $usuario->getTotalComentarios();
        $this->view->total_seguindo = $usuario->getTotalSeguindo();
        $this->view->total_seguidores = $usuario-> getTotalSeguidores();

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

    public function removerComentario(){
        $this->validaAutenticacao();
        $comentario= Container::getModel('Comentario');
        $comentario->__set('id', $_GET['id']);
        $comentario->__set('id_usuario', $_SESSION['id']);
        $comentario->remover();
        header('Location: /timeline');

    }

    public function validaAutenticacao(){
        session_start();
        if(!isset($_SESSION['id']) || $_SESSION['id'] == '' || !isset($_SESSION['nome']) || $_SESSION['nome'] == ''){
            header('Location: /?login=erro');
        }else{
            
        }
    }

    public function quemSeguir(){
        $this->validaAutenticacao();
        $pesquisarPor = isset($_GET['pesquisarPor']) ? $_GET['pesquisarPor'] : '';

        $usuario = Container::getModel('Usuario');
        $usuario->__set('id', $_SESSION['id']);
        $this->view->info_usuario = $usuario->getInfoUsuario();
        $this->view->total_comentarios = $usuario->getTotalComentarios();
        $this->view->total_seguindo = $usuario->getTotalSeguindo();
        $this->view->total_seguidores = $usuario-> getTotalSeguidores();

        
        $usuarios = array();
        if($pesquisarPor != ''){
            
            $usuario = Container::getModel('Usuario');
            $usuario->__set('nome',$pesquisarPor);
            $usuario->__set('id', $_SESSION['id']);
            $usuarios = $usuario->getAll();

        }
        $this->view->usuarios = $usuarios;
        $this->render('quemSeguir');
    }

        public function acao(){
            $this->validaAutenticacao();
            $acao = isset($_GET['acao']) ? $_GET['acao'] : '';
            $id_usuario_seguindo = isset($_GET['id_usuario']) ? $_GET['id_usuario'] : '';
            $acaoUsuario = Container::getModel('AcaoUsuario');
            $acaoUsuario->__set('id', $_SESSION['id']);

            if($acao == 'seguir'){
                $acaoUsuario->seguirUsuario($id_usuario_seguindo);
            }else if ($acao == 'deixar'){
                $acaoUsuario->deixarSeguirUsuario($id_usuario_seguindo);
            }

            header('Location: /quemSeguir');
        }

}
    ?>