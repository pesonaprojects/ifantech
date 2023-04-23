<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_api extends CI_Model
{
	public function check_api_key()
	{
		$Api_key = $this->input->get_request_header('Api-Key', true);
		$query = $this->db->query("SELECT * FROM i_users WHERE apikey='$Api_key'");
		if ($query->num_rows() > 0) {
			return true;
		}else{
			return json_output(401,array('status' => 401,'message' => 'Unauthorized.'));
		}
	}
	public function check_device_key()
	{
		$Api_key = $this->input->get_request_header('Api-Key', true);
		$GetME = $this->db->get_where('i_users', ['apikey' => $Api_key])->row_array();
		$userid = $GetME['id'];
		$Device_key = $this->input->get_request_header('Device-Key', true);
		$query = $this->db->query("SELECT * FROM i_device WHERE devicekey='$Device_key' AND deviceuser='$userid'");
		if ($query->num_rows() > 0) {
			return true;
		}else{
			return json_output(401,array('status' => 401,'message' => 'Device Key Invalid.'));
		}
	}
	public function ShowMeContacts()
	{
		$Api_key = $this->input->get_request_header('Api-Key', true);
		$GetME = $this->db->get_where('i_users', ['apikey' => $Api_key])->row_array();
		$userid = $GetME['id'];
		$result = $this->db->query("SELECT id,name,contacts,label FROM i_contacts WHERE userid='$userid'")->result();
		return $result;
	}
	public function AddContact($name,$contacts,$label)
	{
		$Api_key = $this->input->get_request_header('Api-Key', true);
		$GetME = $this->db->get_where('i_users', ['apikey' => $Api_key])->row_array();
		$userid = $GetME['id'];
		if ($label == "") {
			$newlabel = NULL;
		}else{
			$newlabel = $label;
		}
		$data = [
			'name' => $name,
			'contacts' => $contacts,
			'label' => $newlabel,
			'userid' => $userid
		];
		$datashow = [
			'name' => $name,
			'contacts' => $contacts,
			'label' => $newlabel
		];
		$this->db->insert('i_contacts',$data);
        return array('status' => 201,'message' => 'Data has been created.','data' => $datashow);
	}
	public function CheckPhone($params)
	{
		$GetServer = $this->db->get_where('i_device', ['deviceid' => $params['deviceid']])->row_array();
		$server = $GetServer['server'];
		$GetHost = $this->db->get_where('i_server', ['id' => $server])->row_array();
		if ($params['phonenumber'] == "") {
			return array('status' => 404,'message' => 'Message Cant empty.');
		}else{
			$curl = curl_init();
			$dataarr = [
				"nohp" => $params['phonenumber'],
				"id" => $params['deviceid']
			];
			$datajson = json_encode($dataarr, true);
			curl_setopt_array($curl, array(
				CURLOPT_URL => 'http://'.$GetHost['host'].'/check',
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => '',
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => 'POST',
				CURLOPT_POSTFIELDS => $datajson,
				CURLOPT_HTTPHEADER => array(
					'Content-Type: application/json'
				),
			));
			$response = curl_exec($curl);
			$getdata = json_decode($response, true);
			if ($getdata['status'] == true) {
				$status = 'True';
			}else{
				$status = 'False';
			}
			$datashow = [
				"status" => $status,
				"data" => $params['phonenumber'],
			];
			curl_close($curl);
			return array('status' => 200,'data' => $datashow);
		}
	}
	public function readMessage($params)
	{
		$GetServer = $this->db->get_where('i_device', ['deviceid' => $params['deviceid']])->row_array();
		$server = $GetServer['server'];
		$GetHost = $this->db->get_where('i_server', ['id' => $server])->row_array();
		if ($params['phonenumber'] == "") {
			$curl = curl_init();
			$dataarr = [
				"id" => $params['deviceid']
			];
			$datajson = json_encode($dataarr, true);
			curl_setopt_array($curl, array(
				CURLOPT_URL => 'http://'.$GetHost['host'].'/chat',
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => '',
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => 'POST',
				CURLOPT_POSTFIELDS => $datajson,
				CURLOPT_HTTPHEADER => array(
					'Content-Type: application/json'
				),
			));
			$response = curl_exec($curl);
			$data = json_decode($response);
			curl_close($curl);
			return array('status' => 200, 'response' => $data);
		}else{
			$curl = curl_init();
			$dataarr = [
				"nohp" => $params['phonenumber'],
				"id" => $params['deviceid']
			];
			$datajson = json_encode($dataarr, true);
			curl_setopt_array($curl, array(
				CURLOPT_URL => 'http://'.$GetHost['host'].'/chat',
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => '',
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => 'POST',
				CURLOPT_POSTFIELDS => $datajson,
				CURLOPT_HTTPHEADER => array(
					'Content-Type: application/json'
				),
			));
			$response = curl_exec($curl);
			$data = json_decode($response);
			curl_close($curl);
			return array('status' => 200, 'response' => $data);
		}
	}
} ?>