<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard1 extends CI_Controller {

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
	public function __construct() {
        parent::__construct();
        // is_logged_in();

        $this->load->model('M_Menu','menu');
        $this->load->model('M_Sub_Menu');
    }

	public function index()
	{
		$data['title'] 			= 'Dashboard | PT. Lunik Anugerah';
        $data['menu'] 			= $this->db->get('user_menu')->result_array();
		$data['subMenu'] 		= $this->menu->getSubMenu();

		$data['jumlah_karyawan'] = $this->M_dashboard->getJumlahKaryawanLA();
		$data['jumlah_mutasi'] 	= $this->M_dashboard->getJumlahMutasiLA();
		$data['jumlah_pelamar'] = $this->M_dashboard->getJumlahPelamarLA();

		$data['jumlah_jk'] 		= $this->M_dashboard->getJumlahKaryawanPerJenisKelaminLA();
		$data['jumlah_pend'] 	= $this->M_dashboard->getJumlahKaryawanPerPendidikanLA();

		$data['jumlah_1825'] 	= $this->M_dashboard->getJumlahKaryawanUsia1825LA();
		$data['jumlah_2635'] 	= $this->M_dashboard->getJumlahKaryawanUsia2635LA();
		$data['jumlah_3646'] 	= $this->M_dashboard->getJumlahKaryawanUsia3646LA();
		$data['jumlah_4756'] 	= $this->M_dashboard->getJumlahKaryawanUsia4756LA();
		$data['jumlah_56'] 		= $this->M_dashboard->getJumlahKaryawanUsia56LA();

		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dashboard1', $data);
        $this->load->view('templates/footer');
	}
}