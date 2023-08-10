<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    
class M_perusahaan extends CI_Model{
    
    public function show_data()
    {
        return $this->db->query('SELECT * FROM perusahaan');
    }

    public function get_data($table){
        return $this->db->get($table);
    }
    
    public function insert_data($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($id)
    {
        return $this->db->get_where('perusahaan', ['id_perusahaan' => $id])->row_array();
    }
        
    public function delete_data($id_perusahaan)
    {
        $this->db->where('id_perusahaan', $id_perusahaan);
        return $this->db->delete('perusahaan');
    }

    public function detail_data($id_perusahaan = NULL)
    {
        $query = $this->db->get_where('perusahaan',array('id_perusahaan'=> $id_perusahaan))->row();
        return $query;
    }

	// public function get_divisi_by_perusahaan($id_perusahaan)
	// {
    //     return $this->db->where('id_perusahaan', $id_perusahaan)->get('divisi')->result();
    // }

	public function get_divisi_by_perusahaan($id)
    {
        return $this->db->get_where('divisi', ['id_perusahaan' => $id])->result();
    }

	public function getDataPerusahaan()
    {
        return $this->db->get('perusahaan')->result_array();
    }

    public function getDataDivisi($idperusahaan)
    {
        return $this->db->get_where('divisi', ['id_perusahaan' => $idperusahaan])->result();
    }

	public function getDataJabatan($idjabatan)
    {
        return $this->db->get_where('jabatan', ['id_divisi' => $idjabatan])->result();
    }
}

/* End of file M_Mpp.php */
        