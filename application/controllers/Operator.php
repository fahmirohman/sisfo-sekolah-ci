<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('operator_m','operator');

	}

	public function index()
	{
			if(!isset($_SESSION['username_operator']) && !isset($_SESSION['nama_operator']) && !isset($_SESSION['email_operator'])){
			redirect('sisfo');
		}

		$halaman =array( 
				'header'=> $this->header(),
				'navigator'=> $this->navigator(),
				'content'=> $this->content());

		$this->load->view('operator/index',$halaman);
	}
	public function header()
	{
		return $this->load->view('operator/header',array(),true);
	} 
	public function navigator()
	{
		return $this->load->view('operator/navigator',array(),true);
	}
	public function content()
	{
		return $this->load->view('operator/content',array(),true);
	}

	public function login()
	{

	} 
	

}
	