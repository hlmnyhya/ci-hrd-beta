<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

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
		$data['title'] 		= 'Data Jabatan';
		$data['jabatan'] 	= $this->M_jabatan->show_data()->result();

		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('Jabatan/v_jabatan', $data);
        $this->load->view('templates/footer');
	}

    public function addJabatan()
	{
		$data['title'] 		= 'Tambah Data Jabatan';
		$data['divisi'] 	= $this->M_divisi->show_data()->result();
		$data['perusahaan'] = $this->M_perusahaan->show_data()->result();

		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('Jabatan/v_add_jabatan', $data);
        $this->load->view('templates/footer');
	}

	public function addJabatan_proses()
	{
		$jabatan = $this->input->post('jabatan');
		$id_divisi = $this->input->post('id_divisi');

		$data = array(
			'id_divisi' => $id_divisi,
			'jabatan' => $jabatan,
        );
        
		$this->db->insert('jabatan', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Jabatan Berhasil Ditambah</div>');
        redirect('Jabatan');
	}

    public function editJabatan($id)
	{
        $data['title'] 		= 'Ubah Data Jabatan';
		$data['jabatan'] 	= $this->M_jabatan->update_data($id);
		$data['divisi'] 	= $this->M_divisi->show_data()->result();
		$data['perusahaan'] = $this->M_perusahaan->show_data()->result();
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('Jabatan/v_edit_jabatan', $data);
        $this->load->view('templates/footer');
	}

	public function editJabatan_proses($id)
	{
		$id			= $this->input->post('id_jabatan');
		$jabatan = $this->input->post('jabatan');
		$id_divisi = $this->input->post('id_divisi');

		$data = array(
			'id_divisi' => $id_divisi,
			'jabatan' => $jabatan,
        );
        
		$this->db->where('id_jabatan', $id);
		$this->db->update('jabatan', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Jabatan Berhasil Diubah</div>');
        redirect('Jabatan');
	}

    public function deleteJabatan($id_jabatan)
	{
		$this->M_jabatan->delete_data($id_jabatan);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Riwayat Berhasil Dihapus</div>');
        redirect(base_url('Jabatan'));
	}
}
