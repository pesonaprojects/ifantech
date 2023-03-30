<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		error_reporting(0);
		cek_sesi();
	}
	public function settings()
	{
		$data['title'] = "Settings";
		$this->load->view('admin/settings',$data);
	}
	public function users()
	{
		$data['users'] = $this->m_data->AllUsers();
		$this->load->view('admin/users',$data);
	}
	public function server()
	{
		$this->load->view('admin/server');
	}
	public function add_users()
	{
		$fullname = $this->input->post('fullname');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$username = explode("@",$email);
		$username = preg_replace("/[^a-zA-Z0-9]/", "", $username[0]);
		$password = substr(sha1(rand()), 0, 10);
		$hash = base64_encode(md5($password));
		$query = $this->db->query("SELECT * FROM i_users WHERE email='$email' or phone='$phone'");
		if ($query->num_rows() == 0) {
			$url = base_url().'admin/users';
			echo $this->session->set_flashdata('error','Your Account Has Been Created');
			redirect($url);
		}else{
			$url = base_url().'admin/users';
			echo $this->session->set_flashdata('error','Email or Phone Number Has Already use');
			redirect($url);
		}
	}
}
