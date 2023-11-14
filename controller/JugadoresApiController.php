<?php

use LDAP\Result;

require_once './model/JugadoresModel.php';
require_once './view/JugadoresView.php';
require_once 'view\CategoriasView.php';
require_once 'model\Categoriasmodel.php';
require_once 'view\apiView.php';
require_once 'controller\UsuarioController.php';

class JugadoresApiController{
    private $modelp;
    private $modelc;
    private $view;

    function __construct(){
        $this -> modelp = new JugadoresModel();
        $this -> modelc = new CategoriasModel();
        $this -> view = new ApiView();
    }

    function getAll(){
        $jugadores = $this->modelp->getJugadores();
        if($jugadores){
            $this->view->response($jugadores,200);
        }
        else{$this->view->response(null,404);}
        
    }

    function borrarJugador($params = null){
        $id = $params[":ID"];
        $this->view->response($this->modelp->deleteJugador($id), 200);
    }

    function mostrarJugador($params = null){
        $id = $params[":ID"];
        $jugador = $this->modelp->getJugador($id);
        if($jugador){
            $this->view->response($jugador, 200);
        }
        else{
            $this->view->response(null,404);
        }  
    }

    private function getBody(){
        $bodyString = file_get_contents("php://input");
        return json_decode($bodyString, true);
    }

    function actualizarJugador($params = null){
        $id = $params[":ID"];
        $body = $this->getBody();
        if (!isset($body["nombre"]) || !isset($body["nacionalidad"]) || !isset($body["id_categoria"]))
            $this->view->response($this->modelp->updateJugador($body->nombre, $body->nacionalidad, $body->id_categoria,$body->id), 200);
        else{
            $this->view->response(null,501);
        }

    }

    function agregarJugador(){
        $body = $this->getBody();
        if (!isset($body["nombre"]) || !isset($body["nacionalidad"]) || !isset($body["id_categoria"]))
            $this->view->response($this->modelp->addJugador($body["nombre"], $body["nacionalidad"], $body["id_categoria"]), 201);
        else{
            $this->view->response(null,501);
        }
    }
    function llamarJugador($id){
        $this->view->response($this->modelp->getJugador($id),200);
    }

    
    function showCategoriaPorOrden($id,$order){
        $categoria = $this -> modelc -> getCategoria($id);
        $jugadores = $this -> modelp -> getJugadorPorOrden($id,$order);
        $this->view->response(["jugadores" => $jugadores, "categoria" =>$categoria], 200);
    }
}