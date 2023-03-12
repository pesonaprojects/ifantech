<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		error_reporting(0);
	}
	public function index()
	{
		$data['title'] = "Contact";
		$this->load->view('dash/contact',$data);
	}
}
