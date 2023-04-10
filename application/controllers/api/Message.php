<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Message extends CI_Controller
{
	function text()
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
					if ($params['deviceid'] == "" || $params['msg'] == "" || $params['phonenumber'] == "") {
						$respStatus = 400;
						$resp = array('status' => 400,'message' =>  'Name & Contact can\'t empty');
					}else{
						$respStatus = 201;
						$resp = $this->m_send->SendText($params);
					}
					json_output($respStatus,$resp);
				}
			}
		}
	}
} ?>