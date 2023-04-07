<?php 
/**
  * 
  */
class Bc extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		error_reporting(0);
	}
	public function add()
	{
		$userid = $this->input->post('userid');
		$bc_name = $this->input->post('bc_name');
		$bc_device = $this->input->post('bc_device');
		$bc_contact = $this->input->post('bc_contact');
		$bc_time = $this->input->post('bc_time');
		$bc_msg = $this->input->post('bc_msg');
		$eventid = substr(sha1(rand()), 0, 8);
		$newtime = date("Y-m-d", strtotime($bc_time));
		$data = [
			'eventid' => $eventid,
			'bc_device' => $bc_device,
			'bc_users' => $userid,
			'bc_name' => $bc_name,
			'bc_contact' => $bc_contact,
			'bc_tgl' => $newtime,
			'bc_status' => 0
		];
		$this->m_data->SaveBroadcast($data);
		echo json_encode($data);
	}
} ?>