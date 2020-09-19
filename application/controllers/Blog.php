<?php
defined('BASEPATH') or Exit ('No direct script access allowed');

class Blog extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_blog', 'blog');
		$this->load->helper('text');
	}

	public function index()
	{
		$data['postingan'] = $this->blog->get();
		$data['kategori'] = $this->blog->getAllCategory();
		$this->load->view('templates/blog-header');
		$this->load->view('blog/index', $data);
		$this->load->view('templates/blog-footer');
	}

	public function baca($slug)
	{
		$data['postingan'] = $this->blog->getBySlug($slug);
		$data['kategori'] = $this->getCategory($data['postingan']['id_kategori']);
		$data['semuakategori'] = $this->blog->getAllCategory();
		$this->load->view('templates/blog-header');
		$this->load->view('blog/detail', $data);
		$this->load->view('templates/blog-footer');
	}

	public function tentang()
	{
		$this->load->view('templates/blog-header');
		$this->load->view('blog/about');
		$this->load->view('templates/blog-footer');
	}

	public function kontak()
	{
		$this->load->view('templates/blog-header');
		$this->load->view('blog/contact');
		$this->load->view('templates/blog-footer');
	}

	public function getCategory($id)
	{
		$data = $this->blog->getCategory($id);
		return $data['nama_kategori'];
	}

	public function kategori()
	{
		$nama_kategori = $this->input->get('filter');
		$kategori = $this->blog->getCategoryByName($nama_kategori);
		$data['postingan'] = $this->blog->getBlogByCategory($kategori['id']);
		$data['kategori'] = $this->blog->getAllCategory();
		$this->load->view('templates/blog-header');
		$this->load->view('blog/index', $data);
		$this->load->view('templates/blog-footer');
		
	}

}