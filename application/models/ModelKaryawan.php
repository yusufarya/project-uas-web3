<?php 

class ModelKaryawan extends CI_Model
{
	public function simpanData($data = null)
	{
		$this->db->insert('karyawan',$data);
	}

	public function cekData($where = null)
	{
		return $this->db->get_where('karyawan', $where);
	}

	public function getUserWhere($where = null)
	{
		return $this->db->get_where('karyawan', $where);
	}
	
	public function updateData($data, $where)
	{
		$this->db->update('karyawan',$data, $where);
	}

	public function detail_pelamar($id)
	{
		$result = $this->db->where('id',$id)->get('karyawan');
		if($result->num_rows() > 0){
			return $result->result();
		} else{
			return false;
		}
	}

	public function total($field, $where)
	{
		$this->db->select_sum($field);
		if(!empty($where) && count($where) > 0){
			$this->db->where($where);
		}
		$this->db->from('karyawan');
		return $this->db->get()->row($field);
	}

	public function joinkaryawan()
	{
		$this->db->select('*');
		$this->db->form('karyawan');
		$this->db->join('lamar','lamar.id = karyawan.id');
		$this->db->where($where);
		return $this->db->get();
	}
}