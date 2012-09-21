<?php

class Contacto_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    function sendEmail() {
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];

        $mensaje = 'Este mensaje fue enviado por ' . $nombre . ', ' . $apellidos . ' \r\n';
        $mensaje .= 'Su Email es: ' . $email . ' \r\n';
        $mensaje .= 'Su Telefono es: ' . $telefono . ' \r\n';
        $mensaje .= 'Mensaje: ' . $mensaje . ' \r\n';

//        if (mail(email, 'Contacto desde la web', '$mensaje')):
        if (!empty($email)):
            $return = array('type' => 'success');
            echo json_encode($return);
        elseif (empty($email)):
            $return = array('type' => 'error');
            echo json_encode($return);
        else:
            $return = array('type' => 'warning');
            echo json_encode($return);

        endif;
    }

}
