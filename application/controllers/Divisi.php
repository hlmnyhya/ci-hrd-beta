<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Divisi extends CI_Controller {

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
		$data['title'] = 'Data Divisi';
		$data['divisi'] = $this->M_divisi->show_data()->result();
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('Divisi/v_divisi', $data);
        $this->load->view('templates/footer');
	}

    public function addDivisi()
	{
		$data['title'] 	= 'Tambah Data divisi';
		$data['perusahaan'] = $this->M_perusahaan->show_data()->result();

		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('Divisi/v_add_divisi', $data);
        $this->load->view('templates/footer');
	}

	public function addDivisi_proses()
	{
		$divisi 		= $this->input->post('divisi');
		$id_perusahaan 	= $this->input->post('id_perusahaan');

		$data = array(
			'divisi' 		=> $divisi,
			'id_perusahaan' => $id_perusahaan,
        );
        
		$this->db->insert('divisi', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data divisi Berhasil Ditambah</div>');
        redirect('divisi');
	}

    public function editDivisi($id)
	{
        $data['title'] 	= 'Ubah Data Divisi';
		$data['divisi'] = $this->M_divisi->update_data($id);
		$data['perusahaan'] = $this->M_perusahaan->show_data()->result();
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('Divisi/v_edit_divisi', $data);
        $this->load->view('templates/footer');
	}

	public function editDivisi_proses($id)
	{
		$id				= $this->input->post('id_divisi');
		$divisi 		= $this->input->post('divisi');
		$id_perusahaan 	= $this->input->post('id_perusahaan');

		$data = array(
			'divisi' 	=> $divisi,
			'id_perusahaan' 	=> $id_perusahaan,
        );
        
		$this->db->where('id_divisi', $id);
		$this->db->update('divisi', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Divisi Berhasil Diubah</div>');
        redirect('divisi');
	}

    public function deleteDivisi($id_divisi)
	{
		$this->M_divisi->delete_data($id_divisi);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Divisi Berhasil Dihapus</div>');
        redirect(base_url('divisi'));
	}
}
