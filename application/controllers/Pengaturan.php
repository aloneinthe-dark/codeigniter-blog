<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan extends CI_Controller{

	public function index()
	{
		$data['header'] = "Pengaturan";
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('admin/pengaturan/index');
		$this->load->view('templates/footer');
	}

}
