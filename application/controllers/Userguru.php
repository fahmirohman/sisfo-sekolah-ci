<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userguru extends CI_Controller {


	public function __construct(){
		parent::__construct();


		if(!isset($_SESSION['us3rguru']) AND !isset($_SESSION['nama_guru'])){
			redirect('sisfo/index');
			exit;
		}
		$this->load->model('guru_m','guru');
	}
	public function index()
	{

		$halaman =array( 
				'header'=> $this->header(),
				'navigator'=> $this->navigator(),
				'content'=> $this->content());
		$this->load->view('userguru/index',$halaman);

	}

	public function header()
	{
		return $this->load->view('userguru/header',array(),true);
	} 
	public function navigator()
	{
		return $this->load->view('userguru/navigator',array(),true);
	}
	public function content()
	{
		return $this->load->view('userguru/content',array(),true);
	}

	public function myAccount()
	{
		$username = $_SESSION['us3rguru'];
		$where = " WHERE t1.username ='$username'";
		$data = $this->modelsaya->getGuru2($where)[0];
		$halaman = array(
			'header'=>$this->header(),
			'navigator'=>$this->navigator(),
			'content'=>$this->load->view('userguru/myaccount',array('data'=>$data),true));
		$this->load->view('userguru/index',$halaman);
	}
	public function tambahBerita($var1="")
	{
		$username = $_SESSION['us3rguru'];
		
		$penulis =$_SESSION['nama_guru'];
		$data = $this->guru->getBeritaPenulis($penulis)->result_array();

		$halaman = array(
			'header'=>$this->header(),
			'navigator'=>$this->navigator(),
			'content'=>$this->load->view('userguru/tambahberita',array('data'=>$data),true));
		$tahun = date("Y");
		$bulan = date("m");
		$tgl = date("d");
		$jam = date("H");
		$menit = date("i");
		$dtk = date("s");
		$tanggal = "$tahun-$bulan-$tgl $jam:$menit:$dtk";
		
	
		if($var1=="tambah"){
			$halaman = array(
			'header'=>$this->header(),
			'navigator'=>$this->navigator(),
			'content'=>$this->load->view('userguru/isitambahberita',array(),true));
		}

		if(isset($_POST['insertBerita'])){
			//upload gambar
			$namafile = $_FILES['foto']['name'];
			$ukuranfile = $_FILES['foto']['size'];
			$error = $_FILES['foto']['error'];
			$tmpname = $_FILES['foto']['tmp_name'];
			//cek apakah sudah mengupload gambar
			
			if($error === 4){
				echo "<script> alert('anda belum mengupload gambar !!'); </script>";
				redirect('userguru/tambahBerita');
			}

			//cek apakah yang di adalah gambar
			$ekstensiGambarValid=['jpg','jpeg','png'];
			$ekstensiGambar = explode('.',$namafile);
			$ekstensiGambar = strtolower(end($ekstensiGambar));
			if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
				echo "<script> alert('yang anda upload bukan gambar !!'); </script>";
				redirect('userguru/tambahBerita');
			}

			// cek jika ukuran terlalu besar
			if($ukuranfile > 1000000){
				echo "<script> alert('ukuran gambra yang anda upload terlalu besar !!'); </script>";
				redirect('userguru/tambahBerita');
			}


			// generate nama gambar baru
			$namaFileBaru = uniqid();
			$namaFileBaru .= ".";
			$namaFileBaru .=$ekstensiGambar;

			move_uploaded_file($tmpname,"assets/images/fotoberita/".$namaFileBaru);


			$res = $this->guru->insertBerita(
				'berita',
				array("id_kategori"=>$_POST['ketegori_berita'],
					"judul"=>$_POST['judul'],
					"isi"=>$_POST['isi'],
					"foto"=>"$namaFileBaru",
					"penulis"=>"$penulis",
					"tgl_posting"=>"$tanggal"
					)
				);

			if($res>0){
				$this->session->set_Flashdata('insertberita','Updata Berita Sukses !!!');

			}else{
				$this->session->set_Flashdata('insertberita','Update Berita Gagal !!!');
			}
			redirect('userguru/tambahBerita');
		}



		$this->load->view('userguru/index',$halaman);


	}
	public function tambahInformasiAlumni()
	{
		echo "tambah informasi alumni";
	}


}
	
