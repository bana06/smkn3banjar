<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Libadmin
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
	}

	public function page($content, $data = NULL)
	{
		$datas = [
			'navbar' => $this->ci->load->view('admin/components/navbar', $data, true),
			'sidebar' => $this->ci->load->view('admin/components/sidebar', $data, true),
			'content' => $this->ci->load->view('admin/' . $content, $data, true),
			'footer' => $this->ci->load->view('admin/components/footer', $data, true),
		];
		return $this->ci->load->view('admin/homepage', $datas);
	}

}

/* End of file Libadmin.php */
/* Location: ./application/libraries/Libadmin.php */
