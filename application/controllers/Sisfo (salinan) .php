<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sisfo extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('operator_m','operator');

	}

	public function index()
	{

			$this->load->view('sisfo/login');
	}

	public function login()
	{

	} 
	

}
	