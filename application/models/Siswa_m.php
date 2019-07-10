<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_m extends CI_Model {

	public function getSiswa($id=null)
	{
		$this->db->select('*');
		$this->db->from('account_siswa');

		if($id != null){
		$this->db->where('username',$id);
		}
		$query=$this->db->get();
		//$query = $this->db->get('account_siswa');
		return $query;
	}

	public function getKatEkskul($id=null)
	{
		$this->db->select('*');
		$this->db->from('kategori_ekskul');
		if($id != null){
			$this->db->where('id_ekskul',$id);
		}
		$query=$this->db->get();
		return $query;
	}

	public function insertPemilihanEkskul($data)
	{
		
		$param = array(
			'id_ekskul' => $data['id_ekskul'],
			'nama_lengkap' => $data['nama_lengkap'],
			'nisn' => $data['nisn'],
			'pilihan_ke' => $data['pilihan_ke'],
			'tahun_pelajaran' => $data['tahun_pelajaran']
			);
		$hasil = $this->db->insert('pemilihan_ekskul',$param);
		return $hasil;

	}

	public function cekpemilihanekskul($id1,$id2)
	{

		$query = $this->db->query("SELECT * FROM pemilihan_ekskul WHERE nisn='$id1' AND pilihan_ke='$id2'")->num_rows();
		return $query;
		
	}

	public function getPemilihanEkskul($id1,$id2)
	{
		$this->db->select('*');
		$this->db->from('pemilihan_ekskul');
		$this->db->join('kategori_ekskul','kategori_ekskul.id_ekskul=pemilihan_ekskul.id_ekskul');
		$this->db->where('nisn',$id1);
		$this->db->where('tahun_pelajaran',$id2);
		$query = $this->db->get();
		return $query;
	}

	public function deleteData($tableName,$where)
	{
		$res = $this->db->delete($tableName,$where);
		return $res;
	}

	public function getAccountSiswa($nisn=null)
	{
		$this->db->select('*');
		$this->db->from('biodata_siswa');
		if($nisn != null){
			$this->db->where('nisn',$nisn);
		}
		$query=$this->db->get();
		return $query;
	}



}