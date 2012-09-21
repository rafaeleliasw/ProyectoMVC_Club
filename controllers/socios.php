<?php

class Socios extends Controller {

	function __construct() {
		parent::__construct();
                $this->view->js = array('socios/js/default.js');
	}
	
	function index() {
		
		$this->view->render('socios/alta');
        }
        
        function add(){
            
            $this->model->add();
        }
	
}