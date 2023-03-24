<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documentation extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		error_reporting(0);
		cek_sesi();
	}
	public function index()
	{
		$data['title'] = "Documentation";
		$this->load->view('dash/documentation',$data);
	}
}
