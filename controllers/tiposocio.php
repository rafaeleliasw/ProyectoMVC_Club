<?php

class Deportes extends Controller {

	function __construct() {
		parent::__construct();
                $this->view->js = array('tipoSocio/js/default.js');
	}
	
	function index() {
		
		$this->view->render('tipoSocio/index');
	}
	
}