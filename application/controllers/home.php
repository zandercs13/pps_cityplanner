<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index()
	{
		$page_data['title'] = 'City Planning Home';
		$page_data['jqueryUI'] = false;
		$page_data['js'] = array();
		
		$this->load->view('template/view_header', $page_data);
		$this->load->view('home/view_home');
		$this->load->view('template/view_footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */