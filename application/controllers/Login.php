<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function Login(){

        $usuario = $this->input->post("user");
        //user é o name do input da view
        $senha = $this->input->post("pass");
        //pass é o name do input da view
        if(empty($usuario)){
            echo "ErroUser";
            die();
        }
        if(empty($senha)){
            echo "ErroSenha";
            die();
        }
        echo "Sucesso";
    }
}
?>