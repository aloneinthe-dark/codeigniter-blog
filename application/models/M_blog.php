<?php
defined('BASEPATH') or EXIT ('No direct script access allowed');

class M_blog extends CI_Model{

	public function get()
	{
		return $this->db->get('tbl_postingan')->result_array();
	}

	public function getBySlug($slug)
	{
		return $this->db->get_where('tbl_postingan', ['slug' => $slug])->row_array();
	}

	public function getCategory($id)
	{
		return $this->db->get_where('tbl_kategori', ['id' => $id])->row_array();
	}

}