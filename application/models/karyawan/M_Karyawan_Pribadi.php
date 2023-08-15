<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    
class M_Karyawan_Pribadi extends CI_Model{
    
public function show_data()
{
    $query = $this->db->select('kp.*, p.perusahaan')
                      ->from('karyawan_pribadi kp')
                      ->join('perusahaan p', 'kp.id_perusahaan = p.id_perusahaan', 'left')
                      ->get();

    return $query;
}


public function get_data_by_last()
{
    return $this->db->select('id_karyawan_pribadi, nama')
                    ->from('karyawan_pribadi')
                    ->order_by('id_karyawan_pribadi', 'DESC')
                    ->limit(1)
                    ->get()
                    ->result();
}

public function get_pribadi_ca()
{
return $this->db->query('SELECT * FROM karyawan_pribadi WHERE id_perusahaan = 1');
}

public function get_pribadi_la()
{
return $this->db->query('SELECT * FROM karyawan_pribadi WHERE id_perusahaan = 2');
}

public function get_pribadi_plasmabatakan()
{
return $this->db->query('SELECT * FROM karyawan_pribadi WHERE id_perusahaan = 3');
}

public function get_pribadi_plasmkbl()
{
return $this->db->query('SELECT * FROM karyawan_pribadi WHERE id_perusahaan = 4');
}

public function get_pribadi_pks()
{
return $this->db->query('SELECT * FROM karyawan_pribadi WHERE id_perusahaan = 5');
}


public function count_data()
{
    return $this->db->count_all('karyawan_pribadi'); // Gantikan 'nama_tabel' dengan nama tabel yang sesuai
}
public function get_data($limit, $offset)
{
    // Gunakan method limit() dan offset() dari CodeIgniter Query Builder
    $this->db->limit($limit, $offset);
    return $this->db->get('karyawan_pribadi');
}


public function insert_data($table, $data)
{
    $this->db->insert($table, $data);
}
public function update_data($table, $data, $where)
{
    $this->db->update($table, $data, $where);
}
    
// public function delete_data($where,$table)
// {
//     $this->db->where($where);
//     $this->db->delete($table);
// }

 public function delete_data($id)
    {
        $this->db->where('id_karyawan_pribadi', $id);
        $this->db->delete('karyawan_pribadi');  
        return $this->db->affected_rows();
    }

public function detail_data($id_karyawan_pribadi)
{
    $query = $this->db->query("SELECT *
FROM karyawan_pribadi
JOIN keluarga ON karyawan_pribadi.keluarga_id = keluarga.id_keluarga
WHERE id_karyawan_pribadi='$id_karyawan_pribadi'")->row();
    return $query;
}

//   public function detail_data($id_akun)
//     {
//         $query = $this->db->query("SELECT * FROM tb_akun JOIN tb_ruangan on tb_akun.id_ruangan=tb_ruangan.id_ruangan
//                 JOIN tb_level on tb_akun.id_level=tb_level.id_level WHERE id_akun='$id_akun'")->row();
//         // $query = $this->db->get_where('tb_akun', array('id_akun' => $id_akun))->row();
//         return $query;
//     }

}

/* End of file M_karyawan.php */
        
