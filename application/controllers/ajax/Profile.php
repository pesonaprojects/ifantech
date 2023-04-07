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
} ?>