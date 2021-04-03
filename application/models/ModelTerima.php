<?php 

class ModelTerima extends CI_Model
{
	public function simpanData($data = null)
	{
		$this->db->insert('terima',$data);
	}

	public function cekData($where = null)
	{
		return $this->db->get_where('terima', $where);
	}

	public function getUserWhere($where = null)
	{
		return $this->db->get_where('terima', $where);
	}

	public function bukti($id)
	{
		$result = $this->db->where('id',$id)->get('terima');
		if($result->num_rows() > 0){
			return $result->result();
		} else{
			return false;
		}
	}
}