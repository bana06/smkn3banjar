<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_cart extends CI_Model {

	private $table = 'cart c';

	public function relasinya()
	{
		$this->db->join('produk p', 'p.id_produk = c.id_produk', 'left');
		$this->db->join('produk_detail dp', 'dp.dp_id = c.dp_id', 'left');
		$this->db->join('produk_status sp', 'sp.sp_id = c.sp_id', 'left');

		$this->db->join('produk_category cp', 'cp.category_id = p.category_id', 'left');
	
		$this->db->join('warna w', 'w.warna_id = dp.warna_id', 'left');
	}

	public function mengambil($table)
	{
		$this->db->select('c.*');
		$this->db->select('p.harga');
		$this->db->select('p.stok');
		$this->db->select('dp.dp_nama');
		$this->db->select('dp.dp_gambar');
		$this->db->select('dp.dp_size');
		$this->db->select('cp.category');
		$this->db->select('w.warna');
		$this->db->from($this->table);
		$this->relasinya();
		return $this->db->get();
	}

	public function menambah($data)
	{
		
		if ($this->db->insert($this->table, $data)) {
			return [
				'status' => 'Berhasil',
				'message' => 'Berhasil menambah data!'
			];
		} else {
			return [
				'status' => 'Gagal',
				'message' => 'Gagal menambah data!'
			];
		}
	}

	public function hapus($id_cart)
	{
		$this->db->where($id_cart);
		if ($this->db->delete('cart')) {
			return [
				'status' => 'Berhasil',
				'message' => 'Berhasil menghapus data!'
			];
		} else {
			return [
				'status' => 'Gagal',
				'message' => 'Gagal menghapus data!'
			];
		}
	}

}

/* End of file Mod_produk.php */
/* Location: ./application/models/Mod_produk.php */