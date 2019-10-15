<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status_id') != 2) {
			redirect(site_url('Admin/Home'));
		}
	}

	public function index()
	{
		$data['tajuk'] = 'User | Cart';
		// getdata
		$data['carts'] = $this->mc->mengambil('cart')->result();
		
		// menghitung jmlh
		$get = $this->mod_sb->mengambil('cart')->result();
		$getNum = $this->mod_sb->mengambil('cart')->row();
		// $get2 = $get[1];

		
		// var_dump($get[0]);die;
		// 
		// $data['subtotal'] = $this->mod_sb->mencariTotal('cart', $get->, 'jmlh');

		$this->lu->page('cart', $data);
	}

	public function deleteCart($id_cart)
	{


		$this->mod_sb->delete('cart', $id_cart);
		// var_dump($this->mc->hapus($id_cart));die;

		redirect(site_url('User/Cart'));
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/user/Home.php */