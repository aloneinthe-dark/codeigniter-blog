<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pengaturan', 'pengaturan');
	}

	public function index()
	{
		$data['header'] = "Pengaturan";
		$data['pengaturan'] = $this->pengaturan->get();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('admin/pengaturan/index', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$data = [
			'nama_blog' => $this->input->post('nama_blog'),
			'link_instagram' => $this->input->post('link_instagram'),
			'link_facebook' => $this->input->post('link_facebook'),
			'email' => $this->input->post('email'),
			'no_hp' => $this->input->post('no_hp')
		];

		$this->pengaturan->update($data);
		$this->session->set_flashdata('pesan', 'Pengaturan berhasil diubah');
		redirect(base_url('pengaturan'));
	}

}
