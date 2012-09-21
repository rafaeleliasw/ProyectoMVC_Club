<?php

class Deportes extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	function index() {
		
		$this->view->render('deportes/index');
	}
	
	function details() {
		$this->view->render('deportes/index');
	}
	
}