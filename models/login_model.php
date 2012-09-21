<?php

class Login_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function run() {
        $sth = $this->db->prepare("SELECT id, isAdmin FROM users WHERE 
				user = :login AND password = MD5(:password)");
        $sth->execute(array(
            ':login' => $_POST['login'],
            ':password' => $_POST['password']
        ));

        $data = $sth->fetch();

        $count = $sth->rowCount();
        if ($count > 0) {
            // login
            Session::init();
            Session::set('loggedIn', true);
            Session::set('admin', $data['isAdmin']);
            header('location: ../dashboard');
        } else {
            header('location: ../login');
        }
    }

}