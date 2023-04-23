<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Message extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		error_reporting(0);
	}
	function send()
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'POST'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_apikey = $this->m_api->check_api_key();
			$check_devicekey = $this->m_api->check_device_key();
			if ($check_apikey == true) {
				if ($check_devicekey == true) {
					$params = json_decode(file_get_contents('php://input'), TRUE);
					if ($params['deviceid'] == "" || $params['phonenumber'] == "") {
						$respStatus = 400;
						$resp = array('status' => 400,'message' =>  'Device ID and Phone Number cant empty');
					}else{
						$respStatus = 200;
						if ($params['type'] == "text") {
							$resp = $this->m_send->SendText($params);
						}elseif ($params['type'] == "locations") {
							$resp = $this->m_send->SendLocations($params);
						}elseif ($params['type'] == "button-link") {
							$resp = $this->m_send->SendURL($params);
						}elseif ($params['type'] == "button-copy") {
							$resp = $this->m_send->SendCopy($params);
						}
					}
					json_output($respStatus,$resp);
				}
			}
		}
	}
	function read()
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'POST'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_apikey = $this->m_api->check_api_key();
			$check_devicekey = $this->m_api->check_device_key();
			if ($check_apikey == true) {
				if ($check_devicekey == true) {
					$params = json_decode(file_get_contents('php://input'), TRUE);
					if ($params['deviceid'] == "") {
						$respStatus = 400;
						$resp = array('status' => 400,'message' =>  'Device ID cant empty');
					}else{
						$respStatus = 200;
						$resp = $this->m_api->readMessage($params);
					}
					json_output($respStatus,$resp);
				}
			}
		}
	}
} ?>