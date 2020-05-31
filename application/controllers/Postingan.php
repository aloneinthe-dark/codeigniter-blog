<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Postingan extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kategori', 'kategori');
		$this->load->model('M_postingan', 'postingan');	
	}

	public function index()
	{
		$data['header'] = "Postingan";
		$data['postingan'] = $this->postingan->get();
		$data['kategori'] = $this->kategori->get();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('admin/postingan/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{

		$this->load->library('form_validation');
		$data['kategori'] = $this->kategori->get();

		$this->form_validation->set_rules('nama_postingan', 'Nama postingan', 'trim|required');
		$this->form_validation->set_rules('id_kategori', 'Kategori', 'trim|required');
		$this->form_validation->set_rules('isi_postingan', 'Isi postingan', 'trim|required');

		if($this->form_validation->run() == false){
			$data['header'] = "Tambah Berita & Postingan";
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar', $data);
			$this->load->view('admin/postingan/tambah', $data);
			$this->load->view('templates/footer');

		}else{
			$nama_postingan = $this->input->post('nama_postingan');
			
			$slug = str_replace(' ', '-', $nama_postingan);
			
			$data = [
				'id_kategori' => $this->input->post('id_kategori'),
				'nama' => $this->input->post('nama_postingan'),
				'isi_postingan' => $this->input->post('isi_postingan'),
				'slug' => $slug,
				'tanggal_dibuat' => time()
			];

			$this->postingan->insert($data);
			
			$this->session->set_flashdata('pesan', 'Postingan berhasil ditambahkan');
			redirect('postingan');
		}
	}

	public function detail($id)
	{
		$data_kategori = $this->postingan->getById($id);
		$id_kategori =  $data_kategori['id_kategori'];
		$data['kategori'] = $this->kategori->get_where($id_kategori);
		$data['postingan'] = $this->postingan->getById($id);
		$data['header'] = "Detail Berita & Postingan";
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('admin/postingan/detail', $data);
		$this->load->view('templates/footer');
	}

	public function edit($id)
	{
		$data['postingan'] = $this->postingan->getById($id);
		$data['kategori'] = $this->kategori->get();
		$data['header'] = "Edit Berita & Postingan";
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('admin/postingan/edit', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama_postingan', 'Nama postingan', 'trim|required');
		$this->form_validation->set_rules('id_kategori', 'Kategori', 'trim|required');
		$this->form_validation->set_rules('isi_postingan', 'Isi postingan', 'trim|required');

		$id = $this->input->post('id');

		if($this->form_validation->run() == false){
			redirect('postingan/edit/' . $id);
		}else{
			$data = [
				'nama' => $this->input->post('nama_postingan'),
				'id_kategori' => $this->input->post('id_kategori'),
				'isi_postingan' => $this->input->post('isi_postingan')
			];
			$this->postingan->update($id, $data);
			$this->session->set_flashdata('pesan', 'Postingan berhasil diubah');
			redirect('postingan');
		}
	}

}
