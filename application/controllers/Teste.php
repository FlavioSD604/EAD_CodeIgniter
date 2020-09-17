<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teste extends CI_Controller {

	public function index()
	{
        $num = 10;
        $num2 = 20;

        $soma = $num + $num2;

		echo '<h1>Boa Noite' . $soma.'</h1>';
    }
    public function login()
	{
        $num = 50;
        $num2 = 20;

        $soma = $num + $num2;

		echo '<h1>Boa Noite' . $soma.'</h1>';
	}
}
