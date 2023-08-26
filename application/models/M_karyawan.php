<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    
class M_karyawan extends CI_Model{
    
    public function show_data()
    {
        $this->db->select('*');
        $this->db->from('karyawan');
        $this->db->join('golongan','golongan.id_golongan = karyawan.golongan');
        $this->db->join('jabatan','jabatan.id_jabatan = karyawan.jabatan');
        $this->db->join('divisi','divisi.id_divisi = karyawan.divisi');
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
        return $this->db->get_where('karyawan', ['id_karyawan' => $id])->row_array();
    }
        
    public function delete_data($id_karyawan)
    {
        $this->db->where('id_karyawan', $id_karyawan);
        return $this->db->delete('karyawan');
    }

    public function detail_data($id_karyawan = NULL)
    {
        $query = $this->db->get_where('karyawan',array('id_karyawan'=> $id_karyawan))->row();
        return $query;
    }

   public function getKaryawan($id_perusahaan)
{
    return $this->db->query('SELECT * FROM karyawan_pribadi WHERE id_perusahaan = ?', array($id_perusahaan));
}

public function getKaryawan2($id_perusahaan)
{
    return $this->db->query('SELECT * FROM karyawan WHERE id_perusahaan = ?', array($id_perusahaan));
}

public function getDivisi($id_perusahaan)
{
    return $this->db->query('SELECT * FROM divisi WHERE id_perusahaan = ?', array($id_perusahaan));
}

public function getJabatan($id_perusahaan)
{
    return $this->db->query('SELECT * FROM jabatan WHERE id_perusahaan = ?', array($id_perusahaan));
}

public function getGolongan()
{
    return $this->db->query('SELECT id_golongan, golongan
FROM golongan
ORDER BY
    CAST(golongan AS UNSIGNED),
    RIGHT(golongan, 1);
');
}

public function getThl($id_perusahaan)
{
    return $this->db->query('SELECT * FROM thl WHERE id_perusahaan = ?', array($id_perusahaan));
}

public function getPribadi($id_perusahaan)
{
    return $this->db->query('SELECT * FROM karyawan_pribadi WHERE id_perusahaan = ?', array($id_perusahaan));
}

}

/* End of file M_Mpp.php */
        