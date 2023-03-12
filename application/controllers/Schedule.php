<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		error_reporting(0);
	}
	public function index()
	{
		$data['title'] = "Schedule";
		$this->load->view('dash/schedule',$data);
	}
}
