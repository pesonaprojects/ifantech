<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Send extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		error_reporting(0);
		cek_sesi();
	}
	public function text()
	{
		$data['title'] = "Send Text";
		$userid = $this->session->userdata('userid');
		$GetDetail = $this->db->get_where('i_device', ['deviceuser' => $userid])->row_array();
		$server = $GetDetail['server'];
		$GetHost = $this->db->get_where('i_server', ['id' => $server])->row_array();
		$data['host'] = $GetHost['host'];
		$data['deviceid'] = $GetDetail['deviceid'];
		$data['contact'] = $this->m_data->ContactByUser($userid);
		$this->load->view('send/text',$data);
	}
	public function media()
	{
		$data['title'] = "Send Media";
		$userid = $this->session->userdata('userid');
		$data['contact'] = $this->m_data->ContactByUser($userid);
		$this->load->view('send/media',$data);
	}
	public function button()
	{
		$data['title'] = "Send Button";
		$userid = $this->session->userdata('userid');
		$data['contact'] = $this->m_data->ContactByUser($userid);
		$this->load->view('send/button',$data);
	}
	public function location()
	{
		$data['title'] = "Send Location";
		$userid = $this->session->userdata('userid');
		$GetDetail = $this->db->get_where('i_device', ['deviceuser' => $userid])->row_array();
		$server = $GetDetail['server'];
		$GetHost = $this->db->get_where('i_server', ['id' => $server])->row_array();
		$data['host'] = $GetHost['host'];
		$data['deviceid'] = $GetDetail['deviceid'];
		$data['contact'] = $this->m_data->ContactByUser($userid);
		$this->load->view('send/location',$data);
	}
}
