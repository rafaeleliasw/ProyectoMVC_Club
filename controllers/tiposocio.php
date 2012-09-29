<?php

class TipoSocio extends Controller {

    function __construct() {

        parent::__construct();
        $this->view->js = array('tipoSocio/js/default.js');
    }

    function index() {

        $this->view->Listtiposocio = $this->model->Listtiposocio();
        $this->view->render('tipoSocio/index');
    }

    function nuevo() {

        $this->view->render('tipoSocio/add');
    }

    function add() {

        $this->model->add();
    }

    function edit($id) {
        
        $this->view->tiposocio = $this->model->getTipoSocio($id);
        
        $this->view->render('tipoSocio/edit');
    }

    function editSave($id) {
    
    $idtiposocio = $id;
    $this->model->editSave($idtiposocio);
    header('location: ' . URL . 'tiposocio');
    }

    function delete($id) {

    $this->model->delete($id);
    header('location: ' . URL . 'tiposocio');
}

}