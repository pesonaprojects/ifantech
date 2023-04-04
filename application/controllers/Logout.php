<?php 
/**
  * 
  */
class Logout extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		error_reporting(0);
	}
	public function index()
	{
		$this->session->sess_destroy();
		echo $this->session->set_flashdata('success','Anda Telah Logout');
		$url=base_url('');
		redirect($url);
	}
} ?>