<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    
class M_jabatan extends CI_Model{
    
	public function show_data()
    {
        $this->db->select('*');
        $this->db->from('jabatan', 'divisi');
        $this->db->join('divisi','divisi.id_divisi = jabatan.id_divisi');
		$this->db->join('perusahaan','perusahaan.id_perusahaan = divisi.id_perusahaan');
        $query = $this->db->get();
        return $query;
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
        return $this->db->get_where('jabatan', ['id_jabatan' => $id])->row_array();
    }
        
    public function delete_data($id_jabatan)
    {
        $this->db->where('id_jabatan', $id_jabatan);
        return $this->db->delete('jabatan');
    }

    public function detail_data($id_jabatan = NULL)
    {
        $query = $this->db->get_where('jabatan',array('id_jabatan'=> $id_jabatan))->row();
        return $query;
    }
}

/* End of file M_Mpp.php */
        