<?php

class ModelLamar extends CI_Model
{
	public function simpanData($data = null)
	{
		$this->db->insert('lamar', $data);
	}

	public function cekData($where = null)
	{
		return $this->db->get_where('lamar', $where);
	}

	public function getUserWhere($where = null)
	{
		return $this->db->get_where('lamar', $where);
	}

	public function dokumen($id)
	{
		$result = $this->db->where('id',$id)->get('lamar');
		if($result->num_rows() > 0){
			return $result->result();
		} else{
			return false;
		}
	}

	// join
	public function joinlamar()
	{
		$this->db->select('*');
		$this->db->form('karyawan');
		$this->db->join('lamar','lamar.id = karyawan.id');
		$this->db->where($where);
		return $this->db->get();
	}
}