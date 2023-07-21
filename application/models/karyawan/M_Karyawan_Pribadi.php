<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    
class M_Karyawan_Pribadi extends CI_Model{
    
public function show_data()
{
    return $this->db->query('SELECT * FROM karyawan_pribadi');
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

public function delete_data($where1, $table1, $where2, $table2)
{
    $this->db->where($where1);
    $this->db->delete($table1);

    $this->db->where($where2);
    $this->db->delete($table2);
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
        
