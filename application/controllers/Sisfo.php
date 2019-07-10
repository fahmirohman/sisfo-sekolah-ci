<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sisfo extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('siswa_m','siswa');
		$this->load->model('operator_m','operator');
		$this->load->model('guru_m','guru');

	}

	public function index()
	{

			$this->load->view('sisfo/login');
	}

	public function login()
	{

		if(!isset($_POST['tom_login'])){
			$username=$_POST['username'];
			$password=$_POST['password'];

			$account=$_POST['account'];
			if($account == 'siswa'){

				$query = $this->siswa->getSiswa($username)->row();
				//cek username ada
				if($query!=null){
					//cek password
					if(password_verify($password,$query->password)){

						$_SESSION['username_siswa'] = $username;
						$_SESSION['nisn_siswa'] = $query->nisn;
						$_SESSION['nama_siswa'] = $query->nama_lengkap;
						redirect('siswa/index');
						exit;
					}


				}else{

				redirect('sisfo/index');
				exit;
				}

			}else if($account == 'operator')
			{
				$query = $this->operator->getOperator($username)->row();
				//cek username ada
				if($query!=null){
					//cek password
					if(password_verify($password,$query->password)){

						$_SESSION['username_operator'] = $username;
						$_SESSION['nama_operator'] = $query->nama;
						$_SESSION['email_operator'] = $query->email;
						redirect('operator/index');
						exit;
					}


				}else{

					redirect('sisfo/index');
					exit;	
				}	
			}else if($account =='guru')
			{

				$query = $this->guru->getGuru($username)->row();
				//cek username ada
				if($query!=null){
					//cek password
					if(password_verify($password,$query->password)){

						$_SESSION['us3rguru'] = $username;
						$_SESSION['nama_guru'] = $query->nama_lengkap;
						$_SESSION['email_guru'] = $query->email;
						redirect('userguru');
						exit;
					}


				}else{

					redirect('sisfo/index');
					exit;	
				}	
			}
		}

	} 
	

}
	