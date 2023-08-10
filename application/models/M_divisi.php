<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    
class M_divisi extends CI_Model{
    
    public function show_data()
    {
        $this->db->select('*');
        $this->db->from('divisi');
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
        return $this->db->get_where('divisi', ['id_divisi' => $id])->row_array();
    }
        
    public function delete_data($id_divisi)
    {
        $this->db->where('id_divisi', $id_divisi);
        return $this->db->delete('divisi');
    }

    public function detail_data($id_divisi = NULL)
    {
        $query = $this->db->get_where('divisi',array('id_divisi'=> $id_divisi))->row();
        return $query;
    }
}

/* End of file M_Mpp.php */
        