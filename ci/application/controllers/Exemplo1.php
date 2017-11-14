<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exemplo1 extends CI_Controller {

	function __construct(){
	    parent::__construct();
	}
	
	public function index()	{
		echo 'Executado método index do controller';
	}
	
	public function login()	{
		echo 'Executado método login do controller e passando o parâmetro';
		echo $this->uri->segment(3);
	}
	
}
