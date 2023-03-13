<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Broadcast extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		error_reporting(0);
	}
	public function index()
	{
		$this->load->view('dash/broadcast');
	}
}
