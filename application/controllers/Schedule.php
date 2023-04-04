<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		error_reporting(0);
		cek_sesi();
	}
	public function index()
	{
		$data['title'] = "Schedule";
		$userid = $this->session->userdata('userid');
		$data['contact'] = $this->m_data->ContactByUser($userid);
		$this->load->view('dash/schedule',$data);
	}
}
