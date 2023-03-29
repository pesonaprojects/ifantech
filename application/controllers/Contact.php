<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		error_reporting(0);
		cek_sesi();
	}
	public function index()
	{
		$data['title'] = "Contact";
		$userid = $this->session->userdata('userid');
		$data['label'] = $this->m_data->LabelByUser($userid);
		$data['contact'] = $this->m_data->ContactByUser($userid);
		$this->load->view('dash/contact',$data);
	}
	public function label($id)
	{
		$label = $id;
		$data['title'] = "Contact";
		$userid = $this->session->userdata('userid');
		$data['label'] = $this->m_data->LabelByUser($userid);
		$data['contact'] = $this->m_data->ContactByUserAndLabel($userid,$label);
		$this->load->view('dash/contactbylabel',$data);
	}
	public function add_contact()
	{
		$name = $this->input->post('name');
		$label = $this->input->post('label');
		$phone = $this->input->post('phone');
		$userid = $this->session->userdata('userid');
		$data = [
			'name' => $name,
			'contacts' => $phone,
			'label' => $label,
			'userid' => $userid
		];
		$this->m_data->SaveContact($data);
		$url = base_url().'contact';
		echo $this->session->set_flashdata('success','Contact Has been Added');
		redirect($url);
	}
	public function add_label()
	{
		$labelname = $this->input->post('labelname');
		$userid = $this->session->userdata('userid');
		$data = [
			'name' => $labelname,
			'userid' => $userid
		];
		$this->m_data->SaveLabel($data);
		$url = base_url().'contact';
		echo $this->session->set_flashdata('success','Label Successfully Added');
		redirect($url);
	}
	public function edit_contacts()
	{
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$label = $this->input->post('label');
		$phone = $this->input->post('phone');
		$userid = $this->session->userdata('userid');
		$data = [
			'name' => $name,
			'contacts' => $phone,
			'label' => $label,
			'userid' => $userid
		];
		$this->m_data->EditContact($data,$id);
		$url = base_url().'contact';
		echo $this->session->set_flashdata('success','Contact Has been Updated');
		redirect($url);
	}
	public function hapus_contacts()
	{
		$id = $this->input->post('id');
		$this->m_data->HapusContact($id);
		$url = base_url().'contact';
		echo $this->session->set_flashdata('success','Contact Has been Deleted');
		redirect($url);
	}
}
