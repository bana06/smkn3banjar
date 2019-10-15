<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status_id') != 2) {
			redirect(site_url('Admin/Home'));
		}
	}


	public function index($category_id = NULL)
	{
		$data['tajuk'] = 'User | Homepage';

		$data['produks'] = $this->mp->mengambil('produk')->result();
		$data['categories_result'] = $this->mod_sb->mengambil('produk_category', $category_id)->result();
		$data['categories'] = $this->mod_sb->mengambil('produk_category')->result();

		// var_dump($data['produks']);die;

		$this->lu->pageWithAll('dashboard', $data);
	}

	public function insertCart($id_produk)
	{
		$get = $this->mod_sb->mengambil('produk', ['id_produk' => $id_produk])->row();

		$data = [
			'id_produk' => $get->id_produk,
			'dp_id' => $get->dp_id,
			'jumlah' => 1,
			'sp_id' => 1,
			'keterangan' => $get->keterangan,
		];

		// var_dump($data);die;
		$input = $this->mod_sb->menambah('cart', $data);
		redirect(site_url('User/Home'));

	}

}

/* End of file Home.php */
/* Location: ./application/controllers/user/Home.php */