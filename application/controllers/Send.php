<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Send extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		error_reporting(0);
	}
	public function text()
	{
		$data['title'] = "Send Text";
		$this->load->view('send/text',$data);
	}
	public function media()
	{
		$data['title'] = "Send Media";
		$this->load->view('send/media',$data);
	}
	public function button()
	{
		$data['title'] = "Send Button";
		$this->load->view('send/button',$data);
	}
	public function location()
	{
		$data['title'] = "Send Location";
		$this->load->view('send/location',$data);
	}
}
