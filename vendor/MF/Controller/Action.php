<?php
namespace MF\Controller;

abstract class Action {
    protected $view;
    
    public function __construct(){
        $this->view = new \stdClass();
    }
    protected function render($view, $layout = 'layout'){
        $this->view->page = $view;
        if(file_exists("../App/Views/".$layout.".phtml")){
            require_once "../App/Views/".$layout.".phtml";
        }else{
            $this->content();
        }
    }
    protected function content(){
        $classeAtual = get_class($this);

        $classeAtual = str_replace('App\\Controllers\\', '', $classeAtual);

        $classeAtual = strtolower(str_replace('Controller', '', $classeAtual));

        require_once "../App/Views/".$classeAtual."/".$this->view->page.".phtml";
    }
    protected function title(){
        $tituloAtual = $_SERVER['REQUEST_URI'];
        
        $titulos = [
            '/' => 'MangaTo | Home',
            '/inscreverPerfil' => 'MangaTo | Inscrever-se',
            '/registrarPerfil' => 'MangaTo | Registrando Perfil',
            '/autenticar' => 'MangaTo | Efetuando Login',
            '/timeline' => 'MangaTo | TimeLine',
            '/sair' => 'MangaTo | Deslogando...',
            '/comentario' => 'MangaTo | Comentando...',
            '/acao'=> 'MangaTo | Carregando...',
            '/removerComentario' => 'MangaTo | Removendo o Comentario...',
            '/quemSeguir' => 'MangaTo | Quem Seguir?',
        ];

        return $titulos[$tituloAtual];
    }


}



?>