<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Model {
	
	public function user()
	{
		return $this->db->get('user');
	}

	public function pasien()
	{
		return $this->db->get('pasien');
	}

	public function checkup()
	{
		$this->db->order_by('pasien.id', 'ASC');
        return $this->db->from('pasien')
          ->join('checkup', 'checkup.id_pasien=pasien.id')
          ->get()
          ->result();
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function input_pasien($data,$table){
	$this->db->insert($table,$data);
	}

	public function hapus_pasien($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}

	public function edit_p($id){		
	$this->db->select('*');
    $this->db->from('pasien');
    $this->db->where('id', $id);
    return $this->db->get();
	}


	public function input_checkup($data,$table){
	$this->db->insert($table,$data);
	}

	public function getpasien()
    {
        $query = $this->db->query("SELECT COUNT(id) AS pasien FROM pasien");
        return $query;
    }
    public function getcheckup()
    {
        $query = $this->db->query("SELECT COUNT(id) AS checkup FROM checkup");
        return $query;
    }

    public function view_row($id){
		$this->db->order_by($id, 'ASC');
        return $this->db->from('pasien')
          ->join('checkup', 'checkup.id_pasien=pasien.id')
          ->where('checkup.id_pasien', $id)
          ->get()
          ->result();
	}
}