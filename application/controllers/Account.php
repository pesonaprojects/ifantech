<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		error_reporting(0);
		cek_sesi();
	}
	public function setting()
	{
		$userid = $this->session->userdata('userid');
		$GetME = $this->db->get_where('i_users', ['id' => $userid])->row_array();
		$data['fullname'] = $GetME['fullname'];
		$data['username'] = $GetME['username'];
		$data['email'] = $GetME['email'];
		$data['phone'] = $GetME['phone'];
		$data['role'] = $GetME['role'];
		$data['device'] = $GetME['device'];
		$data['status'] = $GetME['status'];
		$data['created'] = $GetME['created'];
		$data['password'] = $GetME['password'];
		$data['title'] = "Profile Setting";
		$this->load->view('dash/profile_setting',$data);
	}
}
