<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru_m extends CI_Model{

	public function getGuru($username)
	{
		$this->db->select('*');
		$this->db->from('account_guru');
		$this->db->where('username',$username);
		$query = $this->db->get();
		return $query;
	}

	public function getBeritaPenulis($where)
	{
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->where('penulis',$where);
		$query = $this->db->get();
		return $query;
	}

	public function insertBerita($table,$data)
	{
		$hasil = $this->db->insert($table,$data);
		return $hasil;
	}




	
}