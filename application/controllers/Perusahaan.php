<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {

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
		$data['title'] = 'Data Perusahaan';
		$data['perusahaan'] = $this->M_perusahaan->show_data()->result();
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('Perusahaan/v_perusahaan', $data);
        $this->load->view('templates/footer');
	}

	public function getDivisi()
	{
        $id_perusahaan 	= $this->input->post('id_perusahaan');
        $divisi 		= $this->M_perusahaan->get_divisi_by_perusahaan($id_perusahaan);

        echo json_encode($divisi);
    }

    public function addPerusahaan()
	{
		$data['title'] 	= 'Tambah Data Perusahaan';
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('Perusahaan/v_add_perusahaan');
        $this->load->view('templates/footer');
	}

	public function addPerusahaan_proses()
	{
		$perusahaan = $this->input->post('perusahaan');

		$data = array(
			'perusahaan' => $perusahaan,
        );
        
		$this->db->insert('perusahaan', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Perusahaan Berhasil Ditambah</div>');
        redirect('Perusahaan');
	}

    public function editPerusahaan($id)
	{
        $data['title'] 	= 'Ubah Data Perusahaan';
		$data['perusahaan'] = $this->M_perusahaan->update_data($id);
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('Perusahaan/v_edit_perusahaan', $data);
        $this->load->view('templates/footer');
	}

	public function editPerusahaan_proses($id)
	{
		$id			= $this->input->post('id_perusahaan');
		$perusahaan 	= $this->input->post('perusahaan');

		$data = array(
			'perusahaan' 	=> $perusahaan,
        );
        
		$this->db->where('id_perusahaan', $id);
		$this->db->update('perusahaan', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Perusahaan Berhasil Diubah</div>');
        redirect('Perusahaan');
	}

    public function deletePerusahaan($id_perusahaan)
	{
		$this->M_perusahaan->delete_data($id_perusahaan);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Riwayat Berhasil Dihapus</div>');
        redirect(base_url('Perusahaan'));
	}
}
