<?php
namespace src\controllers;
use core\Controller;
use src\models\Usuario;

class UsuarioController extends Controller{
    public function add(){
        $this->render('add');
    }
    public function addAction(){
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        if($name && $email){
            $data = Usuario::select()->where('email', $email)->execute();
            if(count($data) === 0){
                Usuario::insert([
                    'nome' => $name, 
                    'email' => $email
                ])->execute();

                $this->redirect('/');
                exit;
            }
        }
        $this->redirect('/novo');
        exit;
    }

    public function edit($args){
        $usuario = Usuario::select()->find($args['id']);

        $this->render('edit', ['usuario' => $usuario]);
    }

    public function editAction(){
        $id = filter_input(INPUT_POST, 'id');
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        if($id && $name && $email){
            Usuario::update()->set('nome', $name)->set( 'email', $email)->where('id', $id)->execute();

            $this->redirect('/');
        }
        $this->redirect('/usuario/'.$id.'/editar');
    }

    public function delete($args){
        Usuario::delete()->where('id', $args['id'])->execute();
        $this->redirect('/');
    }
}