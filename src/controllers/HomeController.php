<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class HomeController extends Controller {

    public function index() {
        $usuarios = Usuario::select()->get();
        $this->render('home', ['usuarios' => $usuarios]);
    }
}