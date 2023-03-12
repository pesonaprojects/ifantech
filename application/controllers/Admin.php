<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		error_reporting(0);
	}
	public function Settings()
	{
		$data['title'] = "Settings";
		$this->load->view('admin/setting',$data);
	}
}
