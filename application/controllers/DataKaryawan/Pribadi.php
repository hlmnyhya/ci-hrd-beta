<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pribadi extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	
	public function index()
{
    $data['pribadi'] = $this->M_Karyawan_Pribadi->show_data()->result();

    $data['title'] = 'Data Pribadi Karyawan';
    $data['keluarga'] = $this->M_Keluarga->show_data()->result();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('v_karyawan/pribadi/pribadi', $data);
    $this->load->view('templates/footer');
}



	public function tambah_data_pribadi()
	{
		$data['title'] = 'Tambah Data Pribadi Karyawan';
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('v_karyawan/pribadi/tambahdatapribadi');
        $this->load->view('templates/footer');
		$this->load->view('v_karyawan/pribadi/_partials/footer2');
	}

	public function create_pribadi()
	{
		$id = $this->input->post('id_karyawan_pribadi');
		$nama = $this->input->post('nama');
		$alamat_ktp = $this->input->post('alamat_ktp');
		$alamat_domisili = $this->input->post('alamat_domisili');
		$agama = $this->input->post('agama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$pendidikan = $this->input->post('pendidikan');
		$jurusan = $this->input->post('jurusan');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$usia = $this->input->post('usia');
		$goldar = $this->input->post('golongan_darah');

        $data = array(
			'id_karyawan_pribadi' => $id,
			'nama' => $nama,
			'alamat_ktp' => $alamat_ktp,
			'alamat_domisili' => $alamat_domisili,
			'agama' => $agama,
			'jenis_kelamin' => $jenis_kelamin,
			'pendidikan' => $pendidikan,
			'jurusan' => $jurusan,
			'tanggal_lahir' => $tanggal_lahir,
			'usia' => $usia,
			'golongan_darah' => $goldar,
        );

        $this->M_Karyawan_Pribadi->insert_data('karyawan_pribadi', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pribadi Berhasil Ditambahkan</div>');
        redirect('DataKaryawan/Pribadi/tambah_data_keluarga');
	}

	public function edit_pribadi($id)
	{
		$data['title'] = 'Edit Data Pribadi Karyawan';
		$where = array('id_karyawan_pribadi' => $id);
		$data['karyawan_pribadi'] = $this->db->query("SELECT * FROM karyawan_pribadi WHERE id_karyawan_pribadi = '$id'")->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('v_karyawan/pribadi/editdatapribadi', $data);
		$this->load->view('templates/footer');
        $this->load->view('v_karyawan/karyawan/_partials/footer2');
	}

	public function edit_data_pribadi()
	{
		$id = $this->input->post('id_karyawan_pribadi');
		$nama = $this->input->post('nama');
		$alamat_ktp = $this->input->post('alamat_ktp');
		$alamat_domisili = $this->input->post('alamat_domisili');
		$agama = $this->input->post('agama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$pendidikan = $this->input->post('pendidikan');
		$jurusan = $this->input->post('jurusan');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$usia = $this->input->post('usia');
		$goldar = $this->input->post('golongan_darah');

		$data = array(
			'id_karyawan_pribadi' => $id,
			'nama' => $nama,
			'alamat_ktp' => $alamat_ktp,
			'alamat_domisili' => $alamat_domisili,
			'agama' => $agama,
			'jenis_kelamin' => $jenis_kelamin,
			'pendidikan' => $pendidikan,
			'jurusan' => $jurusan,
			'tanggal_lahir' => $tanggal_lahir,
			'usia' => $usia,
			'golongan_darah' => $goldar,
		);

		$where = array(
			'id_karyawan_pribadi' => $id
		);

		$this->M_Karyawan_Pribadi->update_data('karyawan_pribadi', $data, $where);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pribadi Berhasil Diubah</div>');
		redirect('DataKaryawan/Pribadi');
	}

	   public function delete_data($id_karyawan_pribadi)
	{
		$this->M_Karyawan_Pribadi->delete_data($id_karyawan_pribadi);
        redirect('DataKaryawan/Pribadi');
	}

	// public function delete_data($id = NULL)
	// {
	// 	$where = array('id_karyawan_pribadi' => $id);
	// 	$table = 'karyawan_pribadi';
	// 	$this->M_Karyawan_Pribadi->delete_data($where, $table);
	// 	$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Pribadi & Keluarga Berhasil Dihapus</div>');
	// 	redirect('DataKaryawan/Pribadi');
	// }

	public function detail($id_karyawan_pribadi)
	{
		$data['title'] = 'Detail Data Pribadi Karyawan';
		$data['karyawan_pribadi'] = $this->db->query("SELECT *
FROM karyawan_pribadi
JOIN keluarga ON karyawan_pribadi.keluarga = keluarga.id_keluarga
WHERE id_karyawan_pribadi='$id_karyawan_pribadi'")->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('v_karyawan/pribadi/detailpribadi', $data);
		$this->load->view('templates/footer');
		$this->load->view('v_karyawan/pribadi/_partials/footer2');
	}
// -------------------------------------------------------------------------------------//
	
	public function tambah_data_keluarga()
	{
		$data['title'] = 'Tambah Data Keluarga Karyawan';
		$data['pribadi'] = $this->M_Karyawan_Pribadi->show_data()->result();
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('Master/Keluarga/tambahdatakeluarga', $data);
        $this->load->view('templates/footer');
	}

	public function create_keluarga()
	{
		$id = $this->input->post('id_keluarga');
		$id_karyawan_pribadi = $this->input->post('id_karyawan_pribadi');
		$istri = $this->input->post('istri_suami');
		$anak1 = $this->input->post('anak1');
		$anak2 = $this->input->post('anak2');
		$anak3 = $this->input->post('anak3');

		$data = array(
			'id_keluarga' => $id,
			'id_karyawan_pribadi' => $id_karyawan_pribadi,
			'istri_suami' => $istri,
			'anak1' => $anak1,
			'anak2' => $anak2,
			'anak3' => $anak3
		);

		$this->M_Keluarga->insert_data('keluarga', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pribadi & Keluarga Berhasil Ditambahkan</div>');
		redirect('DataKaryawan/Pribadi');
	}

	public function edit_keluarga($id)
	{
		$data['title'] = 'Edit Data Keluarga Karyawan';
		$where = array('id_keluarga' => $id);
		$data['keluarga'] = $this->db->query("SELECT * FROM keluarga WHERE id_keluarga = '$id'")->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('master/keluarga/editdatakeluarga', $data);
		$this->load->view('templates/footer');
	}

	public function edit_data_keluarga()
	{
		$id = $this->input->post('id_keluarga');
		$id_karyawan_pribadi = $this->input->post('id_karyawan_pribadi');
		$istri = $this->input->post('istri_suami');
		$anak1 = $this->input->post('anak1');
		$anak2 = $this->input->post('anak2');
		$anak3 = $this->input->post('anak3');

		$data = array(
			'id_keluarga' => $id,
			'id_karyawan_pribadi' => $id_karyawan_pribadi,
			'istri_suami' => $istri,
			'anak1' => $anak1,
			'anak2' => $anak2,
			'anak3' => $anak3
		);

		$where = array(
			'id_keluarga' => $id
		);

		$this->M_Keluarga->update_data('keluarga', $data, $where);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Keluarga Berhasil Diubah</div>');
		redirect('DataKaryawan/Keluarga');
	}

	public function delete_data_keluarga($id = NULL)
	{
		$where = array('id_keluarga' => $id);
		$this->M_Keluarga->delete_data($where, 'keluarga');
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Keluarga Berhasil Dihapus</div>');
		redirect('DataKaryawan/Keluarga');
	}

// -------------------------------------------------------------------------------------//
	

}