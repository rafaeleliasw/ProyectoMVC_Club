<?php

class Contacto extends Controller {

	function __construct() {
		parent::__construct();
                $this->view->js = array('contacto/js/default.js');
	}
	
	function index() {
		
		$this->view->render('contacto/index');
	}
	
	function sendEmail() {
		$this->model->sendEmail();
	}
	
}