<?php

class TipoSocio_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    function Listtiposocio() {
        $sth = $this->db->prepare('SELECT * FROM tiposocio');
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $sth->execute();
        $data = $sth->fetchAll();
        return $data;
    }
    
    function getTipoSocio($id) {
        $sth = $this->db->prepare('SELECT * FROM tiposocio WHERE id = "' . $id . '"');
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $sth->execute();
        $data = $sth->fetchAll();
        return $data;
    }

    function add() {
        $descripcion = $_POST['descripcion'];

        $sth = $this->db->prepare('INSERT INTO tiposocio (descripcion) VALUES (:descripcion)');
        $sth->execute(array(':descripcion' => $descripcion));

        $data = array('descripcion' => $descripcion, 'id' => $this->db->lastInsertId());
        echo json_encode($data);
    }

    function editSave($idtiposocio) {
        $desc = $_POST['descripcion'];
        $sth = $this->db->prepare('UPDATE tiposocio 
                                   SET descripcion =  (:descripcion)
                                   WHERE id = (:id)');
        $sth->execute(array(':descripcion' => $desc, ':id' => $idtiposocio));
    }

    function delete($id) {
        $sth = $this->db->prepare('DELETE FROM tiposocio WHERE id = "' . $id . '"');
        $sth->execute();
    }

}
