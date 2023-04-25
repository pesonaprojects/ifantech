<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		error_reporting(0);
		cek_sesi();
		hasPermission([1]);
	}
	public function settings()
	{
		$data['title'] = "Settings";
		$data['server'] = $this->m_data->AllServer();
		$GetSetting = $this->db->get_where('i_web', ['id' => 1])->row_array();
		$data['web_name'] = $GetSetting['web_name'];
		$data['web_logo'] = $GetSetting['web_logo'];
		$data['web_icon'] = $GetSetting['web_icon'];
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
		$password = $this->input->post('password');
		$apikey = substr(sha1(rand()), 0, 25);
		$hash = base64_encode(md5($password));
		$base = base_url();
		$query = $this->db->query("SELECT * FROM i_users WHERE email='$email' or phone='$phone'");
		if ($query->num_rows() == 0) {
			$data = [
				'apikey' => $apikey,
				'fullname' => $fullname,
				'username' => $username,
				'email' => $email,
				'phone' => $phone,
				'password' => $hash,
				'role' => 2,
				'status	' => 1
			];
			$this->m_data->CreateAccount($data);
			$url = base_url().'admin/users';
			echo $this->session->set_flashdata('success','Your Account Has Been Created');
			redirect($url);
		}else{
			$url = base_url().'admin/users';
			echo $this->session->set_flashdata('error','Email or Phone Number Has Already use');
			redirect($url);
		}
	}
	public function setupweb()
	{
		$web_name = $this->input->post('web_name');
		$web_wa_admin = $this->input->post('web_wa_admin');
		$web_wa_id = 'waapi';
		$config['upload_path']          = './assets/img/website/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;
		$this->upload->initialize($config);
		if (!empty($_FILES['web_logo']['name'])) {
			if ($this->upload->do_upload('web_logo')) {
				$web_logo = $this->upload->data();
				$weblogoname = $web_logo['file_name'];
				if (!empty($_FILES['web_icon']['name'])) {
					if ($this->upload->do_upload('web_icon')) {
						$web_icon = $this->upload->data();
						$webiconname = $web_icon['file_name'];
						$this->db->set('web_name',$web_name);
						$this->db->set('web_logo',$weblogoname);
						$this->db->set('web_icon',$webiconname);
						$this->db->set('web_wa_host',$web_wa_admin);
						$this->db->set('web_wa_id',$web_wa_id);
						$this->db->where('id', 1);
						$this->db->update('i_web');
						$url = base_url().'admin/settings';
						echo $this->session->set_flashdata('success','Data Has Been Changes');
						redirect($url);
					}else{
						$url = base_url().'admin/settings';
						echo $this->session->set_flashdata('warning','Upload Web Icon Failed');
						redirect($url);
					}
				}else{
					$this->db->set('web_name',$web_name);
					$this->db->set('web_logo',$weblogoname);
					$this->db->set('web_wa_host',$web_wa_admin);
					$this->db->set('web_wa_id',$web_wa_id);
					$this->db->where('id', 1);
					$this->db->update('i_web');
					$url = base_url().'admin/settings';
					echo $this->session->set_flashdata('success','Data Has Been Changes');
					redirect($url);
				}
			}else{
				$url = base_url().'admin/settings';
				echo $this->session->set_flashdata('warning','Upload Web Logo Failed');
				redirect($url);
			}
		}else{
			if (!empty($_FILES['web_icon']['name'])) {
				if ($this->upload->do_upload('web_icon')) {
					$web_icon = $this->upload->data();
					$webiconname = $web_icon['file_name'];
					$this->db->set('web_name',$web_name);
					$this->db->set('web_icon',$webiconname);
					$this->db->set('web_wa_host',$web_wa_admin);
					$this->db->set('web_wa_id',$web_wa_id);
					$this->db->where('id', 1);
					$this->db->update('i_web');
					$url = base_url().'admin/settings';
					echo $this->session->set_flashdata('success','Data Has Been Changes');
					redirect($url);
				}else{
					$url = base_url().'admin/settings';
					echo $this->session->set_flashdata('warning','Upload Web Icon Failed');
					redirect($url);
				}
			}else{
				$this->db->set('web_name',$web_name);
				$this->db->set('web_wa_host',$web_wa_admin);
				$this->db->set('web_wa_id',$web_wa_id);
				$this->db->where('id', 1);
				$this->db->update('i_web');
				$url = base_url().'admin/settings';
				echo $this->session->set_flashdata('success','Data Has Been Changes');
				redirect($url);
			}
		}
	}
}
