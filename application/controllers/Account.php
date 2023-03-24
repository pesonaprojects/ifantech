<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		error_reporting(0);
		cek_sesi();
	}
	public function profile()
	{
		$data['title'] = "Profile";
		$this->load->view('dash/profile',$data);
	}
	public function setting()
	{
		$data['title'] = "Profile Setting";
		$this->load->view('dash/profile_setting',$data);
	}
}
