<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Broadcast extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		error_reporting(0);
		cek_sesi();
	}
	public function index()
	{
		$userid = $this->session->userdata('userid');
		$data['broadcast'] = $this->m_data->broadcastbyuser($userid);
		$this->load->view('dash/broadcast',$data);
	}
	public function add()
	{
		$userid = $this->session->userdata('userid');
		$data['label'] = $this->m_data->LabelByUser($userid);
		$data['Device'] = $this->m_data->DeviceByUser($userid);
		$this->load->view('dash/add_broadcast',$data);
	}
}
