<?php 
/**
  * 
  */
class Device extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		error_reporting(0);
		cek_sesi();
	}
	public function index()
	{
		$userid = $this->session->userdata('userid');
		$GetDevice = $this->db->get_where('i_users', ['id' => $userid])->row_array();
		$GetDetail = $this->db->get_where('i_device', ['deviceuser' => $userid])->row_array();
		$data['device'] = $GetDevice['device'];
		$server = $GetDetail['server'];
		$GetHost = $this->db->get_where('i_server', ['id' => $server])->row_array();
		$data['host'] = $GetHost['host'];
		$data['devicename'] = $GetDetail['devicename'];
		$data['devicekey'] = $GetDetail['devicekey'];
		$data['deviceid'] = $GetDetail['deviceid'];
		$data['devicewebhook'] = $GetDetail['devicewebhook'];
		$this->load->view('dash/device',$data);
	}
	public function setup()
	{
		$name = $this->input->post('name');
		$webhook = $this->input->post('webhook');
		$userid = $this->session->userdata('userid');
		$devicekey = substr(sha1(rand()), 0, 25);
		$deviceid = substr(sha1(rand()), 0, 4);
		$data = [
			'server' => 1,
			'devicename' => $name,
			'devicekey' => $devicekey,
			'deviceid' => $deviceid,
			'devicewebhook' => $webhook,
			'deviceuser' => $userid
		];
		$this->m_data->SetupDevice($data);
		$this->m_data->FinishSetup($userid);
		$url = base_url().'device';
		echo $this->session->set_flashdata('success','Setup Successfully');
		redirect($url);
	}
} ?>
