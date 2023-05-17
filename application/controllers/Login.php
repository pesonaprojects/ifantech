<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		error_reporting(0);
		cek_sesi_login();
	}
	function index()
	{
		$data['title'] = "Login";
		$this->load->view('auth/login',$data);
	}
	public function actions()
	{
		$username = $this->input->post('username');
		$password = base64_encode(md5($this->input->post('password')));
		$cek_login	= $this->m_auth->auth($username,$password);
		if ($cek_login->num_rows() == 1) {
			$row = $cek_login->row();
			$this->session->set_userdata(array(
				'logged'	=> 'true',
				'userid'    => $row->id,
				'fullname'    => $row->fullname,
				'username'  => $row->username,
				'phone'  => $row->phone,
				'role' => $row->role
			));
			$url = base_url().'home';
			echo $this->session->set_flashdata('success','Welcome '.$row->username);
			redirect($url);
		}else{
			$url = base_url().'';
			echo $this->session->set_flashdata('error','Username or password invalid');
			redirect($url);
		}
	}
}
