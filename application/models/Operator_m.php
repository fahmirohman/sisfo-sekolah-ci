<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator_m extends CI_Model {

	public function getOperator($id=null)
	{
		$this->db->select('*');
		$this->db->from('account_operator');

		if($id != null){
		$this->db->where('username',$id);
		}
		$query=$this->db->get();
		//$query = $this->db->get('account_siswa');
		return $query;
	}

	public function getBiodataSiswa($nisn=null)
	{
		$this->db->select('*');
		$this->db->from('biodata_siswa');

		if($nisn != null){
			$this->db->where('nisn',$nisn);
		}
		$query = $this->db->get();
		return $query;
	}	


}