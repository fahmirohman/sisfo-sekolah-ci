<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('siswa_m','siswa');
	}

	public function index()
	{
		if(!isset($_SESSION['username_siswa']) && !isset($_SESSION['nisn_siswa']) && !isset($_SESSION['nama_siswa'])){
			redirect('sisfo');
		}

		$halaman =array( 
				'header'=> $this->header(),
				'navigator'=> $this->navigator(),
				'content'=> $this->content());

		$this->load->view('siswa/index',$halaman);

	}

	public function header()
	{
		return $this->load->view('siswa/header',array(),true);
	} 
	public function navigator()
	{
		return $this->load->view('siswa/navigator',array(),true);
	}
	public function content()
	{
		return $this->load->view('siswa/content',array(),true);
	}


	public function ekskul($id=null)
	{
		if(!isset($_SESSION['username_siswa']) && !isset($_SESSION['nisn_siswa']) && !isset($_SESSION['nama_siswa'])){
			redirect('sisfo');
		}
		
		$tp = date("Y");
		$PemilihanEkskul = $this->siswa->getPemilihanEkskul($_SESSION['nisn_siswa'],$tp)->result();
	


		$conten = $this->load->view('siswa/ekskul',array('data'=>$PemilihanEkskul),true);
		
		//tambah ekskul
		if($id=="tambahekskul"){

				if(isset($_POST['daftar'])){
					$cek = $this->siswa->cekpemilihanekskul($_POST['nisn'],$_POST['pilihan_ke']);

					if($cek>=1){
						$this->session->set_Flashdata('pesanpemilihaneks','pilihan ekskul ke '.$_POST['pilihan_ke'].' sudah di pilih !!');
						redirect('siswa/ekskul');
					}

					$inputan = $this->input->post(null,TRUE);
					$hasil = $this->siswa->insertPemilihanEkskul($inputan);
					if($hasil==true){
						$this->session->set_Flashdata('pesanpemilihaneks','Ekskul Berhasil Didaftarkan');
						redirect('siswa/ekskul');
					}
				}

		$datakateks  = $this->siswa->getKatEkskul()->result();
	

		$conten = $this->load->view('siswa/tambahekskul',array('dkatekskul'=>$datakateks),true);		
		}
		

		$halaman =array( 
				'header'=> $this->header(),
				'navigator'=> $this->navigator(),
				'content'=> $conten);

		$this->load->view('siswa/index',$halaman);

	}

	public function delekskul($id)
	{
		$res = $this->siswa->deleteData('pemilihan_ekskul',array('id_pemilihan_ekskul'=>$id));
		if($res>=1){
			$this->session->set_Flashdata('pesanpemilihaneks','Ekskul Berhasil di Hapus !!');
			redirect('siswa/ekskul');
		}else{
			$this->session->set_Flashdata('pesanpemilihaneks','Ekskul Gagal di Hapus !!');
			redirect('siswa/ekskul');
		}
	}
	public function tambahInformasiAlumni()
	{
		echo "tambah informasi alumni";
	}

	public function myaccount()
	{
		$data = $this->siswa->getAccountSiswa($_SESSION['nisn_siswa'])->row();

		$halaman = array(
			'header'=>$this->header(),
			'navigator'=>$this->navigator(),
			'content'=>$this->load->view('siswa/myaaccount2',array('data'=>$data),true)
			);
		$this->load->view('siswa/index',$halaman);
	}
	public function spp($cetak=null)
	{
		$halaman = array(
			'header'=>$this->header(),
			'navigator'=>$this->navigator(),
			'content'=>$this->load->view('siswa/spp',array(),true)
			);
		$this->load->view('siswa/index',$halaman);
	}




}
	
