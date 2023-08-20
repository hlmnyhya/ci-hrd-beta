<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard2 extends CI_Controller {

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
		$data['title'] 			= 'Dashboard | Plasma Batakan';
        $data['menu'] 			= $this->db->get('user_menu')->result_array();
		$data['subMenu'] 		= $this->menu->getSubMenu();

		$data['jumlah_karyawan'] = $this->M_dashboard->getJumlahKaryawanPlasmaBatakan();
		$data['jumlah_mutasi'] 	= $this->M_dashboard->getJumlahMutasiPlasmaBatakan();
		$data['jumlah_pelamar'] = $this->M_dashboard->getJumlahPelamarPlasmaBatakan();
		
		$data['jumlah_jk'] 		= $this->M_dashboard->getJumlahKaryawanPerJenisKelaminPlasmaBatakan();
		$data['jumlah_pend'] 	= $this->M_dashboard->getJumlahKaryawanPerPendidikanPlasmaBatakan();

		$data['jumlah_1825'] 	= $this->M_dashboard->getJumlahKaryawanUsia1825PlasmaBatakan();
		$data['jumlah_2635'] 	= $this->M_dashboard->getJumlahKaryawanUsia2635PlasmaBatakan();
		$data['jumlah_3646'] 	= $this->M_dashboard->getJumlahKaryawanUsia3646PlasmaBatakan();
		$data['jumlah_4756'] 	= $this->M_dashboard->getJumlahKaryawanUsia4756PlasmaBatakan();
		$data['jumlah_56'] 		= $this->M_dashboard->getJumlahKaryawanUsia56PlasmaBatakan();

		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dashboard2', $data);
        $this->load->view('templates/footer');
	}
}