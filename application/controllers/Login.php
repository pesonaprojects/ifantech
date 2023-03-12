<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		error_reporting(0);
	}
	function index()
	{
		$data['title'] = "Login";
		$this->load->view('auth/login',$data);
	}
}
