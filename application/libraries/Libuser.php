<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Libuser
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
	}

	public function page($content, $data = NULL)
	{
		$datas = [
			'header' => $this->ci->load->view('user/components/header', $data, true),
			'category' => '',
			'promo' => '',
			'footer' => $this->ci->load->view('user/components/footer', $data, true),
			'content' => $this->ci->load->view('user/' . $content, $data, true),
		];
		return $this->ci->load->view('user/homepage', $datas);
	}

	public function pageWithAll($content, $data = NULL)
	{
		$datas = [
			'header' => $this->ci->load->view('user/components/header', $data, true),
			'category' => $this->ci->load->view('user/components/category', $data, true),
			'promo' => $this->ci->load->view('user/components/promo', $data, true),
			'footer' => $this->ci->load->view('user/components/footer', $data, true),
			'content' => $this->ci->load->view('user/' . $content, $data, true),
		];
		return $this->ci->load->view('user/homepage', $datas);
	}

	public function pageWithCategory($content, $data = NULL)
	{
		$datas = [
			'header' => $this->ci->load->view('user/components/header', $data, true),
			'category' => $this->ci->load->view('user/components/category', $data, true),
			'promo' => '',
			'footer' => $this->ci->load->view('user/components/footer', $data, true),
			'content' => $this->ci->load->view('user/' . $content, $data, true),
		];
		return $this->ci->load->view('user/homepage', $datas);
	}

	public function pageWithPromo($content, $data = NULL)
	{
		$datas = [
			'header' => $this->ci->load->view('user/components/header', $data, true),
			'category' => '',
			'promo' => $this->ci->load->view('user/components/promo', $data, true),
			'footer' => $this->ci->load->view('user/components/footer', $data, true),
			'content' => $this->ci->load->view('user/' . $content, $data, true),
		];
		return $this->ci->load->view('user/homepage', $datas);
	}

}

/* End of file Libuser.php */
/* Location: ./application/libraries/Libuser.php */
