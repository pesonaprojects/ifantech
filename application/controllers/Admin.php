<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		error_reporting(0);
		cek_sesi();
	}
	public function settings()
	{
		$data['title'] = "Settings";
		$this->load->view('admin/setting',$data);
	}
	public function users()
	{
		$this->load->view('admin/users');
	}
	public function server()
	{
		$this->load->view('admin/server');
	}
}
