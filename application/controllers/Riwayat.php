<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller {

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
		$data['title'] = 'Data Riwayat';
		$data['riwayat'] = $this->M_riwayat->show_data()->result();
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('Riwayat/v_riwayat', $data);
        $this->load->view('templates/footer');
	}

    public function addRiwayat()
	{
		$id_perusahaan = $this->session->userdata('id_perusahaan');

        $data['title'] 	= 'Tambah Data Riwayat';
        // $data['karyawan'] 	= $this->M_karyawan->getKaryawan2()->result();
        $data['karyawan']  = $this->M_karyawan->getKaryawan2($id_perusahaan)->result();
        $data['divisi']    = $this->M_karyawan->getDivisi($id_perusahaan)->result();
        $data['jabatan']   = $this->M_karyawan->getJabatan($id_perusahaan)->result();
        $data['golongan']  = $this->M_karyawan->getGolongan()->result();
        $data['pribadi']   = $this->M_karyawan->getPribadi($id_perusahaan)->result();
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('Riwayat/v_add_riwayat', $data);
        $this->load->view('templates/footer');
        $this->load->view('Riwayat/_partials/footer2');
	}

	public function addRiwayat_proses()
	{
		$id_karyawan    = $this->input->post('id_karyawan');
        
        $divisi         = $this->input->post('divisi');
        $divisi_start   = $this->input->post('divisi_start');
        $divisi_end     = $this->input->post('divisi_end');
        $jabatan        = $this->input->post('jabatan');
        $jabatan_start  = $this->input->post('jabatan_start');
        $jabatan_end    = $this->input->post('jabatan_end');
        $golongan       = $this->input->post('golongan');
        $golongan_start = $this->input->post('golongan_start');
        $golongan_end   = $this->input->post('golongan_end');
        $status         = $this->input->post('status');
        $status_start   = $this->input->post('status_start');
        $status_end     = $this->input->post('status_end');

		$data = array(
			'id_karyawan'       => $id_karyawan,
            'divisi'            => $divisi,
            'divisi_start'      => $divisi_start,
            'divisi_end'        => $divisi_end,
            'jabatan'           => $jabatan,
            'jabatan_start'     => $jabatan_start,
            'jabatan_end'       => $jabatan_end,
            'golongan'          => $golongan,
            'golongan_start'    => $golongan_start,
            'golongan_end'      => $golongan_end,
            'status'            => $status,
            'status_start'      => $status_start,
            'status_end'        => $status_end,
        );
        
		$this->db->insert('riwayat', $data);

        $data2 = array(
			'id_karyawan'       => $id_karyawan,
            'divisi'            => $divisi,
            'jabatan'           => $jabatan,
            'golongan'          => $golongan,
        );

        $this->db->where('id_karyawan', $id_karyawan);
		$this->db->update('karyawan', $data2);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Riwayat Berhasil Ditambahkan</div>');
        redirect('Riwayat');
	}

    public function editRiwayat($id)
	{
        $data['title'] 	= 'Ubah Data Riwayat';
        $data['divisi'] 	= $this->M_karyawan->getDivisi()->result();
		$data['jabatan'] 	= $this->M_karyawan->getJabatan()->result();
		$data['golongan'] 	= $this->M_karyawan->getGolongan()->result();
		$data['thl'] 		= $this->M_karyawan->getThl()->result();
		$data['pribadi'] 	= $this->M_karyawan->getPribadi()->result();
        $data['karyawan'] 	= $this->M_karyawan->getKaryawan2()->result();
		$data['riwayat'] = $this->M_riwayat->update_data($id);
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('Riwayat/v_edit_riwayat', $data);
        $this->load->view('templates/footer');
		$this->load->view('Riwayat/_partials/footer2');
	}

	public function editRiwayat_proses($id)
	{
		$id			    = $this->input->post('id_riwayat');
		$id_karyawan    = $this->input->post('id_karyawan');
        $divisi         = $this->input->post('divisi');
        $divisi_start   = $this->input->post('divisi_start');
        $divisi_end     = $this->input->post('divisi_end');
        $jabatan        = $this->input->post('jabatan');
        $jabatan_start  = $this->input->post('jabatan_start');
        $jabatan_end    = $this->input->post('jabatan_end');
        $golongan       = $this->input->post('golongan');
        $golongan_start = $this->input->post('golongan_start');
        $golongan_end   = $this->input->post('golongan_end');
        $status         = $this->input->post('status');
        $status_start   = $this->input->post('status_start');
        $status_end     = $this->input->post('status_end');

		$data = array(
			'id_karyawan'       => $id_karyawan,
            'divisi'            => $divisi,
            'divisi_start'      => $divisi_start,
            'divisi_end'        => $divisi_end,
            'jabatan'           => $jabatan,
            'jabatan_start'     => $jabatan_start,
            'jabatan_end'       => $jabatan_end,
            'golongan'          => $golongan,
            'golongan_start'    => $golongan_start,
            'golongan_end'      => $golongan_end,
            'status'            => $status,
            'status_start'      => $status_start,
            'status_end'        => $status_end,
        );
        
		$this->db->where('id_riwayat', $id);
		$this->db->update('riwayat', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Riwayat Berhasil Diubah</div>');
        redirect('Riwayat');
	}

    public function deleteRiwayat($id_riwayat)
	{
		$this->M_riwayat->delete_data($id_riwayat);
        redirect(base_url('Riwayat'));
	}
}