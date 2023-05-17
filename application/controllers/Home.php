<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		error_reporting(0);
		cek_sesi();
	}
	public function index()
	{
		$data['title'] = "Home";
		$userid = $this->session->userdata('userid');
		$GetDevice = $this->db->get_where('i_users', ['id' => $userid])->row_array();
		$GetDetail = $this->db->get_where('i_device', ['deviceuser' => $userid])->row_array();
		$data['device'] = $GetDevice['device'];
		$server = $GetDetail['server'];
		$GetHost = $this->db->get_where('i_server', ['id' => $server])->row_array();
		$data['host'] = $GetHost['host'];
		$data['deviceid'] = $GetDetail['deviceid'];
		$this->load->view('dash/home',$data);
	}
}