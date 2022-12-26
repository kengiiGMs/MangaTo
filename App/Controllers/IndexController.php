<?php
namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action{

    public function index(){
        $this->view->login = isset($_GET['login']) ? $_GET['login'] : '';
        $this->render('index');
    }

    public function inscreverPerfil(){
        $this->view->usuario = array(
                'nome' =>  '',
                'email' => '',
                'senha' => '',
                'senhaConfirma' => '',
                
        );
        $this->view->erroCadastro = false;
        $this->view->erroEmail = false;
        
        $this->render('inscreverPerfil');

    }
    public function registrarPerfil(){
        $usuario = Container::getModel('Usuario');

        $usuario->__set('nome', $_POST['nomeRegistrarPerfil']);
        $usuario->__set('email', $_POST['emailRegistrarPerfil']);
        $usuario->__set('senha', $_POST['senhaRegistrarPerfil']);
        $usuario->__set('senhaConfirma', $_POST['senhaConfirmaRegistrarPerfil']);
        
        if($usuario->validarCadastro()){
            $usuario->__set('senha', md5($_POST['senhaRegistrarPerfil']));
            if (count($usuario-> getUsuarioPorEmail()) == 0){
                $usuario->salvar();
                $this->render('cadastroSucesso');

            }else{
                $this->view->usuario = array(
                    'nome' => $_POST['nomeRegistrarPerfil'],
                    'email' => $_POST['emailRegistrarPerfil'],
                    'senha' => $_POST['senhaRegistrarPerfil'],
                    'senhaConfirma' => $_POST['senhaConfirmaRegistrarPerfil'],
                );

                $this->view->erroEmail = true;
                $this->view->erroCadastro = false;
                
                $this->render('inscreverPerfil');
            }
        
        }else{
            $this->view->usuario = array(
                'nome' => $_POST['nomeRegistrarPerfil'],
                'email' => $_POST['emailRegistrarPerfil'],
                'senha' => $_POST['senhaRegistrarPerfil'],
                'senhaConfirma' => $_POST['senhaConfirmaRegistrarPerfil'],
            );

            $this->view->erroCadastro = true;
            $this->view->erroEmail = false;
        
            $this->render('inscreverPerfil');
        }
    }
}

?>