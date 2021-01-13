<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;

class HomeController extends Controller {

	private $loggedUsuario;

	public function __construct() {
		$this->$loggedUsuario = LoginHandler::checkLogin();

        if($this->$loggedUsuario === false) {
            $this->redirect('/login');
        }
	}

    public function index() {
        $this->render('home', ['usuarios' => 'Felipe']);
    }

}