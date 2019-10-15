<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailProduk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status_id') != 2) {
			redirect(site_url('Admin/Home'));
		}
	}

	public function index($dp_id)
	{
		$data['tajuk'] = 'User | Detail Produk';
		$data['categories'] = $this->mod_sb->mengambil('produk_category')->result();
		$get_produk = $this->mp->mengambil('produk')->result();
		$data['produks'] = $get_produk[$dp_id - 1];

		// var_dump($get_produk[$dp_id - 1]);die;

		$this->lu->pageWithCategory('detail_produk', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/user/Home.php */