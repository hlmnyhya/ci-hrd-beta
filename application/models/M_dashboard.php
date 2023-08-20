<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    
class M_dashboard extends CI_Model{

    // SUPERADMIN
    public function getJumlahKaryawan()
    {
        return $this->db->count_all_results('karyawan_pribadi');
    }

    public function getJumlahMutasi()
    {
        return $this->db->count_all_results('riwayat');
    }
    
    public function getJumlahPelamar()
    {
        return $this->db->count_all_results('pelamar');
    }

    public function getJumlahKaryawanPerJenisKelamin()
    {
        // Mendapatkan jumlah data karyawan dengan jenis kelamin laki-laki
        $this->db->where('jenis_kelamin', 'laki-laki');
        $lakiLakiCount = $this->db->count_all_results('karyawan_pribadi');

        // Mendapatkan jumlah data karyawan dengan jenis kelamin perempuan
        $this->db->where('jenis_kelamin', 'perempuan');
        $perempuanCount = $this->db->count_all_results('karyawan_pribadi');

        return [
            'laki-laki' => $lakiLakiCount,
            'perempuan' => $perempuanCount
        ];
    }

    public function getJumlahKaryawanUsia1825()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 18);
        $this->db->where('usia <=', 25);
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanUsia2635()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 26);
        $this->db->where('usia <=', 35);
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanUsia3646()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 36);
        $this->db->where('usia <=', 46);
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanUsia4756()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 47);
        $this->db->where('usia <=', 56);
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanUsia56()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 56);
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanPerPendidikan()
    {
        // $this->db->select('pendidikan, COUNT(*) as total_karyawan');
        // $this->db->from('karyawan_pribadi');
        $this->db->where('pendidikan', 'S2');
        $s2Count = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where('pendidikan', 'S1');
        $s1Count = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where_in('pendidikan', ['D1', 'D2', 'D3']);
        $dCount = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where_in('pendidikan', ['SMA', 'SMK', 'MA']);
        $smaCount = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where_in('pendidikan', ['SMP', 'MTS']);
        $smpCount = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where('pendidikan', 'SD');
        $sdCount = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where('pendidikan', 'TIDAK SEKOLAH');
        $tidakSekolahCount = $this->db->count_all_results('karyawan_pribadi');

        return [
            'S2' => $s2Count,
            'S1' => $s1Count,
            'D1/D2/D3' => $dCount,
            'SMA/SMK/MA' => $smaCount,
            'SMP/MTS' => $smpCount,
            'SD' => $sdCount,
            'TIDAK SEKOLAH' => $tidakSekolahCount
        ];
    }

    // CANDI ARTHA
  public function getJumlahKaryawanCA()
{
    $id_perusahaan = '1';
    $this->db->where('id_perusahaan', $id_perusahaan);
    return $this->db->count_all_results('karyawan_pribadi');
}

    public function getJumlahMutasiCA()
    {
         $id_perusahaan = '1';
    $this->db->where('id_perusahaan', $id_perusahaan);
        return $this->db->count_all_results('riwayat');
    }
    
    public function getJumlahPelamarCA()
    {
         $id_perusahaan = '1';
    $this->db->where('id_perusahaan', $id_perusahaan);
        return $this->db->count_all_results('pelamar');
    }

    public function getJumlahKaryawanPerJenisKelaminCA()
    {
        // Mendapatkan jumlah data karyawan dengan jenis kelamin laki-laki
         $id_perusahaan = '1';
    $this->db->where('id_perusahaan', $id_perusahaan);
        $this->db->where('jenis_kelamin', 'laki-laki');
        $lakiLakiCount = $this->db->count_all_results('karyawan_pribadi');

        // Mendapatkan jumlah data karyawan dengan jenis kelamin perempuan
        $this->db->where('jenis_kelamin', 'perempuan');
            $this->db->where('id_perusahaan', $id_perusahaan);
        $perempuanCount = $this->db->count_all_results('karyawan_pribadi');

        return [
            'laki-laki' => $lakiLakiCount,
            'perempuan' => $perempuanCount
        ];
    }

    public function getJumlahKaryawanUsia1825CA()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 18);
        $this->db->where('usia <=', 25);
        $this->db->where('id_perusahaan', '1');
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanUsia2635CA()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 26);
        $this->db->where('usia <=', 35);
        $this->db->where('id_perusahaan', '1');
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanUsia3646CA()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 36);
        $this->db->where('usia <=', 46);
        $this->db->where('id_perusahaan', '1');
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanUsia4756CA()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 47);
        $this->db->where('usia <=', 56);
        $this->db->where('id_perusahaan', '1');
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanUsia56CA()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 56);
        $this->db->where('id_perusahaan', '1');
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanPerPendidikanCA()
    {
        // $this->db->select('pendidikan, COUNT(*) as total_karyawan');
        // $this->db->from('karyawan_pribadi');
        $this->db->where('pendidikan', 'S2');
        $this->db->where('id_perusahaan', '1');
        $s2Count = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where('pendidikan', 'S1');
        $this->db->where('id_perusahaan', '1');
        $s1Count = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where_in('pendidikan', ['D1', 'D2', 'D3']);
        $this->db->where('id_perusahaan', '1');
        $dCount = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where_in('pendidikan', ['SMA', 'SMK', 'MA']);
        $this->db->where('id_perusahaan', '1');
        $smaCount = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where_in('pendidikan', ['SMP', 'MTS']);
        $this->db->where('id_perusahaan', '1');
        $smpCount = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where('pendidikan', 'SD');
        $this->db->where('id_perusahaan', '1');
        $sdCount = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where('pendidikan', 'TIDAK SEKOLAH');
        $this->db->where('id_perusahaan', '1');
        $tidakSekolahCount = $this->db->count_all_results('karyawan_pribadi');

        return [
            'S2' => $s2Count,
            'S1' => $s1Count,
            'D1/D2/D3' => $dCount,
            'SMA/SMK/MA' => $smaCount,
            'SMP/MTS' => $smpCount,
            'SD' => $sdCount,
            'TIDAK SEKOLAH' => $tidakSekolahCount
        ];
    }
    // LUNIK ANUGERAH
  public function getJumlahKaryawanLA()
{
    $id_perusahaan = '2';
    $this->db->where('id_perusahaan', $id_perusahaan);
    return $this->db->count_all_results('karyawan_pribadi');
}

    public function getJumlahMutasiLA()
    {
         $id_perusahaan = '2';
    $this->db->where('id_perusahaan', $id_perusahaan);
        return $this->db->count_all_results('riwayat');
    }
    
    public function getJumlahPelamarLA()
    {
         $id_perusahaan = '2';
    $this->db->where('id_perusahaan', $id_perusahaan);
        return $this->db->count_all_results('pelamar');
    }

    public function getJumlahKaryawanPerJenisKelaminLA()
    {
        // Mendapatkan jumlah data karyawan dengan jenis kelamin laki-laki
         $id_perusahaan = '2';
    $this->db->where('id_perusahaan', $id_perusahaan);
        $this->db->where('jenis_kelamin', 'laki-laki');
        $lakiLakiCount = $this->db->count_all_results('karyawan_pribadi');

        // Mendapatkan jumlah data karyawan dengan jenis kelamin perempuan
        $this->db->where('jenis_kelamin', 'perempuan');
            $this->db->where('id_perusahaan', $id_perusahaan);
        $perempuanCount = $this->db->count_all_results('karyawan_pribadi');

        return [
            'laki-laki' => $lakiLakiCount,
            'perempuan' => $perempuanCount
        ];
    }

    public function getJumlahKaryawanUsia1825LA()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 18);
        $this->db->where('usia <=', 25);
        $this->db->where('id_perusahaan', '2');
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanUsia2635LA()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 26);
        $this->db->where('usia <=', 35);
        $this->db->where('id_perusahaan', '2');
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanUsia3646LA()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 36);
        $this->db->where('usia <=', 46);
        $this->db->where('id_perusahaan', '2');
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanUsia4756LA()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 47);
        $this->db->where('usia <=', 56);
        $this->db->where('id_perusahaan', '2');
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanUsia56LA()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 56);
        $this->db->where('id_perusahaan', '2');
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanPerPendidikanLA()
    {
        // $this->db->select('pendidikan, COUNT(*) as total_karyawan');
        // $this->db->from('karyawan_pribadi');
        $this->db->where('pendidikan', 'S2');
        $this->db->where('id_perusahaan', '2');
        $s2Count = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where('pendidikan', 'S1');
        $this->db->where('id_perusahaan', '2');
        $s1Count = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where_in('pendidikan', ['D1', 'D2', 'D3']);
        $this->db->where('id_perusahaan', '2');
        $dCount = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where_in('pendidikan', ['SMA', 'SMK', 'MA']);
        $this->db->where('id_perusahaan', '2');
        $smaCount = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where_in('pendidikan', ['SMP', 'MTS']);
        $this->db->where('id_perusahaan', '2');
        $smpCount = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where('pendidikan', 'SD');
        $this->db->where('id_perusahaan', '2');
        $sdCount = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where('pendidikan', 'TIDAK SEKOLAH');
        $this->db->where('id_perusahaan', '2');
        $tidakSekolahCount = $this->db->count_all_results('karyawan_pribadi');

        return [
            'S2' => $s2Count,
            'S1' => $s1Count,
            'D1/D2/D3' => $dCount,
            'SMA/SMK/MA' => $smaCount,
            'SMP/MTS' => $smpCount,
            'SD' => $sdCount,
            'TIDAK SEKOLAH' => $tidakSekolahCount
        ];
    }

    // PLASMA BATAKAN
  public function getJumlahKaryawanPlasmaBatakan()
{
    $id_perusahaan = '3';
    $this->db->where('id_perusahaan', $id_perusahaan);
    return $this->db->count_all_results('karyawan_pribadi');
}

    public function getJumlahMutasiPlasmaBatakan()
    {
         $id_perusahaan = '3';
    $this->db->where('id_perusahaan', $id_perusahaan);
        return $this->db->count_all_results('riwayat');
    }
    
    public function getJumlahPelamarPlasmaBatakan()
    {
         $id_perusahaan = '3';
    $this->db->where('id_perusahaan', $id_perusahaan);
        return $this->db->count_all_results('pelamar');
    }

    public function getJumlahKaryawanPerJenisKelaminPlasmaBatakan()
    {
        // Mendapatkan jumlah data karyawan dengan jenis kelamin laki-laki
         $id_perusahaan = '3';
    $this->db->where('id_perusahaan', $id_perusahaan);
        $this->db->where('jenis_kelamin', 'laki-laki');
        $lakiLakiCount = $this->db->count_all_results('karyawan_pribadi');

        // Mendapatkan jumlah data karyawan dengan jenis kelamin perempuan
        $this->db->where('jenis_kelamin', 'perempuan');
            $this->db->where('id_perusahaan', $id_perusahaan);
        $perempuanCount = $this->db->count_all_results('karyawan_pribadi');

        return [
            'laki-laki' => $lakiLakiCount,
            'perempuan' => $perempuanCount
        ];
    }

    public function getJumlahKaryawanUsia1825PlasmaBatakan()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 18);
        $this->db->where('usia <=', 25);
        $this->db->where('id_perusahaan', '3');
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanUsia2635PlasmaBatakan()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 26);
        $this->db->where('usia <=', 35);
        $this->db->where('id_perusahaan', '3');
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanUsia3646PlasmaBatakan()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 36);
        $this->db->where('usia <=', 46);
        $this->db->where('id_perusahaan', '3');
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanUsia4756PlasmaBatakan()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 47);
        $this->db->where('usia <=', 56);
        $this->db->where('id_perusahaan', '3');
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanUsia56PlasmaBatakan()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 56);
        $this->db->where('id_perusahaan', '3');
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanPerPendidikanPlasmaBatakan()
    {
        // $this->db->select('pendidikan, COUNT(*) as total_karyawan');
        // $this->db->from('karyawan_pribadi');
        $this->db->where('pendidikan', 'S2');
        $this->db->where('id_perusahaan', '3');
        $s2Count = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where('pendidikan', 'S1');
        $this->db->where('id_perusahaan', '3');
        $s1Count = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where_in('pendidikan', ['D1', 'D2', 'D3']);
        $this->db->where('id_perusahaan', '3');
        $dCount = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where_in('pendidikan', ['SMA', 'SMK', 'MA']);
        $this->db->where('id_perusahaan', '3');
        $smaCount = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where_in('pendidikan', ['SMP', 'MTS']);
        $this->db->where('id_perusahaan', '3');
        $smpCount = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where('pendidikan', 'SD');
        $this->db->where('id_perusahaan', '3');
        $sdCount = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where('pendidikan', 'TIDAK SEKOLAH');
        $this->db->where('id_perusahaan', '3');
        $tidakSekolahCount = $this->db->count_all_results('karyawan_pribadi');

        return [
            'S2' => $s2Count,
            'S1' => $s1Count,
            'D1/D2/D3' => $dCount,
            'SMA/SMK/MA' => $smaCount,
            'SMP/MTS' => $smpCount,
            'SD' => $sdCount,
            'TIDAK SEKOLAH' => $tidakSekolahCount
        ];
    }

    // PLASMA SMKBL
  public function getJumlahKaryawanPlasmaSMKBL()
{
    $id_perusahaan = '4';
    $this->db->where('id_perusahaan', $id_perusahaan);
    return $this->db->count_all_results('karyawan_pribadi');
}

    public function getJumlahMutasiPlasmaSMKBL()
    {
         $id_perusahaan = '4';
    $this->db->where('id_perusahaan', $id_perusahaan);
        return $this->db->count_all_results('riwayat');
    }
    
    public function getJumlahPelamarPlasmaSMKBL()
    {
         $id_perusahaan = '4';
    $this->db->where('id_perusahaan', $id_perusahaan);
        return $this->db->count_all_results('pelamar');
    }

    public function getJumlahKaryawanPerJenisKelaminPlasmaSMKBL()
    {
        // Mendapatkan jumlah data karyawan dengan jenis kelamin laki-laki
         $id_perusahaan = '4';
    $this->db->where('id_perusahaan', $id_perusahaan);
        $this->db->where('jenis_kelamin', 'laki-laki');
        $lakiLakiCount = $this->db->count_all_results('karyawan_pribadi');

        // Mendapatkan jumlah data karyawan dengan jenis kelamin perempuan
        $this->db->where('jenis_kelamin', 'perempuan');
            $this->db->where('id_perusahaan', $id_perusahaan);
        $perempuanCount = $this->db->count_all_results('karyawan_pribadi');

        return [
            'laki-laki' => $lakiLakiCount,
            'perempuan' => $perempuanCount
        ];
    }

    public function getJumlahKaryawanUsia1825PlasmaSMKBL()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 18);
        $this->db->where('usia <=', 25);
        $this->db->where('id_perusahaan', '4');
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanUsia2635PlasmaSMKBL()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 26);
        $this->db->where('usia <=', 35);
        $this->db->where('id_perusahaan', '4');
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanUsia3646PlasmaSMKBL()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 36);
        $this->db->where('usia <=', 46);
        $this->db->where('id_perusahaan', '4');
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanUsia4756PlasmaSMKBL()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 47);
        $this->db->where('usia <=', 56);
        $this->db->where('id_perusahaan', '4');
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanUsia56PlasmaSMKBL()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 56);
        $this->db->where('id_perusahaan', '4');
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanPerPendidikanPlasmaSMKBL()
    {
        // $this->db->select('pendidikan, COUNT(*) as total_karyawan');
        // $this->db->from('karyawan_pribadi');
        $this->db->where('pendidikan', 'S2');
        $this->db->where('id_perusahaan', '4');
        $s2Count = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where('pendidikan', 'S1');
        $this->db->where('id_perusahaan', '4');
        $s1Count = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where_in('pendidikan', ['D1', 'D2', 'D3']);
        $this->db->where('id_perusahaan', '4');
        $dCount = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where_in('pendidikan', ['SMA', 'SMK', 'MA']);
        $this->db->where('id_perusahaan', '4');
        $smaCount = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where_in('pendidikan', ['SMP', 'MTS']);
        $this->db->where('id_perusahaan', '4');
        $smpCount = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where('pendidikan', 'SD');
        $this->db->where('id_perusahaan', '4');
        $sdCount = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where('pendidikan', 'TIDAK SEKOLAH');
        $this->db->where('id_perusahaan', '4');
        $tidakSekolahCount = $this->db->count_all_results('karyawan_pribadi');

        return [
            'S2' => $s2Count,
            'S1' => $s1Count,
            'D1/D2/D3' => $dCount,
            'SMA/SMK/MA' => $smaCount,
            'SMP/MTS' => $smpCount,
            'SD' => $sdCount,
            'TIDAK SEKOLAH' => $tidakSekolahCount
        ];
    }

    // PKS
        // PLASMA SMKBL
  public function getJumlahKaryawanPKS()
{
    $id_perusahaan = '5';
    $this->db->where('id_perusahaan', $id_perusahaan);
    return $this->db->count_all_results('karyawan_pribadi');
}

    public function getJumlahMutasiPKS()
    {
         $id_perusahaan = '5';
    $this->db->where('id_perusahaan', $id_perusahaan);
        return $this->db->count_all_results('riwayat');
    }
    
    public function getJumlahPelamarPKS()
    {
         $id_perusahaan = '5';
    $this->db->where('id_perusahaan', $id_perusahaan);
        return $this->db->count_all_results('pelamar');
    }

    public function getJumlahKaryawanPerJenisKelaminPKS()
    {
        // Mendapatkan jumlah data karyawan dengan jenis kelamin laki-laki
         $id_perusahaan = '5';
    $this->db->where('id_perusahaan', $id_perusahaan);
        $this->db->where('jenis_kelamin', 'laki-laki');
        $lakiLakiCount = $this->db->count_all_results('karyawan_pribadi');

        // Mendapatkan jumlah data karyawan dengan jenis kelamin perempuan
        $this->db->where('jenis_kelamin', 'perempuan');
            $this->db->where('id_perusahaan', $id_perusahaan);
        $perempuanCount = $this->db->count_all_results('karyawan_pribadi');

        return [
            'laki-laki' => $lakiLakiCount,
            'perempuan' => $perempuanCount
        ];
    }

    public function getJumlahKaryawanUsia1825PKS()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 18);
        $this->db->where('usia <=', 25);
        $this->db->where('id_perusahaan', '5');
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanUsia2635PKS()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 26);
        $this->db->where('usia <=', 35);
        $this->db->where('id_perusahaan', '5');
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanUsia3646PKS()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 36);
        $this->db->where('usia <=', 46);
        $this->db->where('id_perusahaan', '5');
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanUsia4756PKS()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 47);
        $this->db->where('usia <=', 56);
        $this->db->where('id_perusahaan', '5');
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanUsia56PKS()
    {
        $this->db->select('COUNT(*) as total_karyawan');
        $this->db->from('karyawan_pribadi');
        $this->db->where('usia >=', 56);
        $this->db->where('id_perusahaan', '5');
        $query = $this->db->get();

        return $query->row()->total_karyawan;
    }

    public function getJumlahKaryawanPerPendidikanPKS()
    {
        // $this->db->select('pendidikan, COUNT(*) as total_karyawan');
        // $this->db->from('karyawan_pribadi');
        $this->db->where('pendidikan', 'S2');
        $this->db->where('id_perusahaan', '5');
        $s2Count = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where('pendidikan', 'S1');
        $this->db->where('id_perusahaan', '5');
        $s1Count = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where_in('pendidikan', ['D1', 'D2', 'D3']);
        $this->db->where('id_perusahaan', '5');
        $dCount = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where_in('pendidikan', ['SMA', 'SMK', 'MA']);
        $this->db->where('id_perusahaan', '5');
        $smaCount = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where_in('pendidikan', ['SMP', 'MTS']);
        $this->db->where('id_perusahaan', '5');
        $smpCount = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where('pendidikan', 'SD');
        $this->db->where('id_perusahaan', '5');
        $sdCount = $this->db->count_all_results('karyawan_pribadi');

        $this->db->where('pendidikan', 'TIDAK SEKOLAH');
        $this->db->where('id_perusahaan', '5');
        $tidakSekolahCount = $this->db->count_all_results('karyawan_pribadi');

        return [
            'S2' => $s2Count,
            'S1' => $s1Count,
            'D1/D2/D3' => $dCount,
            'SMA/SMK/MA' => $smaCount,
            'SMP/MTS' => $smpCount,
            'SD' => $sdCount,
            'TIDAK SEKOLAH' => $tidakSekolahCount
        ];
    }
}

/* End of file M_Mpp.php */
        