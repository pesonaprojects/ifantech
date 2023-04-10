<?php
/**
  * 
  */
class Profile extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		error_reporting(0);
	}
	public function show()
	{
		$userid = $this->session->userdata('userid');
		$data=$this->m_data->GetMe($userid);
		echo json_encode($data);
	}
	public function GetApi()
	{
		$userid = $this->session->userdata('userid');
		$GetUsers = $this->db->get_where('i_users', ['id' => $userid])->row_array();
		echo $GetUsers['apikey'];
	}
	public function revoke()
	{
		$userid = $this->input->post('userid');
		$api = substr(sha1(rand()), 0, 25);
		$data=$this->m_data->RevokeAPI($userid,$api);
		echo json_encode($data);
	}
	public function GetCurrentPass()
	{
		$userid = $this->session->userdata('userid');
		$GetUsers = $this->db->get_where('i_users', ['id' => $userid])->row_array();
		echo $GetUsers['password'];
	}
	public function ChangePassword()
	{
		$userid = $this->input->post('userid');
		$hasNewPassword = $this->input->post('hasNewPassword');
		$data=$this->m_data->ChangePass($userid,$hasNewPassword);
		echo json_encode($data);
	}
} ?>