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
	public function detail($id)
	{
		$GetData = $this->db->get_where('i_users', ['id' => $id])->row_array();
		$data['id'] = $id;
		$data['fullname'] = $GetData['fullname'];
		$data['username'] = $GetData['username'];
		$data['email'] = $GetData['email'];
		$data['phone'] = $GetData['phone'];
		$data['role'] = $GetData['role'];
		$data['status'] = $GetData['status'];
		$data['created'] = date('d-M-Y H:i:s',strtotime($GetData['created']));
		$this->load->view('admin/users_detail',$data);
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
	public function edit_users()
	{
		$id = $this->input->post('id');
		$fullname = $this->input->post('fullname');
		$role = $this->input->post('role');
		$status = $this->input->post('status');
		echo $status;
		if ($fullname == "" || $role == "" || $status == "") {
			$url = base_url().'admin/users/detail/id='.$id;
			echo $this->session->set_flashdata('warning','Data Cant Empty');
			redirect($url);
		}else{
			$data = [
				'fullname' => $fullname,
				'role' => $role,
				'status' => $status
			];
			$this->m_data->EditUsers($data,$id);
			$url = base_url().'admin/users/detail/id='.$id;
			echo $this->session->set_flashdata('success','Data Has Been Change');
			redirect($url);
		}
	}
	public function delete_users()
	{
		$id = $this->input->post('id');
		$this->m_data->DeleteUsers($id);
		$url = base_url().'admin/users';
		echo $this->session->set_flashdata('success','Data Has Been Deleted');
		redirect($url);
	}
	public function setupweb()
	{
		$web_name = $this->input->post('web_name');
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
				$this->db->where('id', 1);
				$this->db->update('i_web');
				$url = base_url().'admin/settings';
				echo $this->session->set_flashdata('success','Data Has Been Changes');
				redirect($url);
			}
		}
	}
}
