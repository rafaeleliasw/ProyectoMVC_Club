<?php

class Noticias extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	function index() {
		
		$this->view->render('noticias/index');
	}
	
	function details() {
		$this->view->render('noticias/index');
	}
	
}