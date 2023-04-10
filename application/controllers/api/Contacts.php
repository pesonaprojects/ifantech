<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Contacts extends CI_Controller
{
	public function show()
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'GET'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_apikey = $this->m_api->check_api_key();
			if ($check_apikey == true) {
				$contacts = $this->m_api->ShowMeContacts();
				json_output(200,array('data' => $contacts));
			}
		}
	}
	public function add()
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'POST'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_apikey = $this->m_api->check_api_key();
			if ($check_apikey == true) {
				$params = json_decode(file_get_contents('php://input'), TRUE);
				$name = $params['name'];
				$contacts = $params['contacts'];
				$label = $params['label'];
				if ($params['name'] == "" || $params['contacts'] == "") {
					$respStatus = 400;
					$resp = array('status' => 400,'message' =>  'Name & Contact can\'t empty');
				}else{
					$respStatus = 201;
					$resp = $this->m_api->AddContact($name,$contacts,$label);
				}
				json_output($respStatus,$resp);
			}
		}
	}
} ?>