<?php

class TipoSocio_Model extends Model {

	function __construct() {
		parent::__construct();
	}
	
	function add() 
	{
		$text = $_POST['nombre'];
		
		$sth = $this->db->prepare('INSERT INTO data (text) VALUES (:text)');
		$sth->execute(array(':text' => $text));
		
		$data = array('text' => $text, 'id' => $this->db->lastInsertId());
		echo json_encode($data);
	}


}
