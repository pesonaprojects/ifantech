<?php 
/**
  * 
  */
class M_send extends CI_Model
{
	public function SendText($params)
	{
		$GetServer = $this->db->get_where('i_device', ['deviceid' => $params['deviceid']])->row_array();
		$server = $GetServer['server'];
		$GetHost = $this->db->get_where('i_server', ['id' => $server])->row_array();
		if ($params['msg'] == "") {
			return array('status' => 404,'message' => 'Message Cant empty.');
		}else{
			$curl = curl_init();
			$dataarr = [
				"id" => $params['deviceid'],
				"type" => "text",
				"text" => $params['msg'],
				"nohp" => $params['phonenumber']
			];
			$datajson = json_encode($dataarr, true);
			curl_setopt_array($curl, array(
				CURLOPT_URL => $GetHost['apihit'].'/send',
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
			$datas = json_decode($response,true);
			if ($datas['status'] == true) {
				$datashow = [
					"type" => "text",
					"nohp" => $params['phonenumber'],
					"text" => $params['msg'],
				];
				curl_close($curl);
				return array('status' => 200,'message' => 'Message has been sent.','data' => $datashow);
			}else{
				return array('status' => 200,'message' => 'Device Not Connect.');
			}
			
		}
	}
	public function SendLocations($params)
	{
		$GetServer = $this->db->get_where('i_device', ['deviceid' => $params['deviceid']])->row_array();
		$server = $GetServer['server'];
		$GetHost = $this->db->get_where('i_server', ['id' => $server])->row_array();
		if ($params['lat'] == "" || $params['long'] == "") {
			return array('status' => 404,'message' => 'Latitude and Longitude cant empty.');
		}else{
			$curl = curl_init();
			$dataarr = [
				"id" => $params['deviceid'],
				"type" => "location",
				"degreesLatitude" => $params['lat'],
				"degreesLongitude" => $params['long'],
				"nohp" => $params['phonenumber']
			];
			$datajson = json_encode($dataarr, true);
			curl_setopt_array($curl, array(
				CURLOPT_URL => $GetHost['apihit'].'/send',
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
			$datas = json_decode($response,true);
			if ($datas['status'] == true) {
				$datashow = [
					"type" => "location",
					"nohp" => $params['phonenumber'],
					"Latitude" => $params['lat'],
					"Longitude" => $params['long'],
				];
				curl_close($curl);
				return array('status' => 200,'message' => 'Message has been sent.','data' => $datashow);
			}else{
				return array('status' => 200,'message' => 'Device Not Connect.');
			}
		}
	}
	public function SendURL($params)
	{
		$GetServer = $this->db->get_where('i_device', ['deviceid' => $params['deviceid']])->row_array();
		$server = $GetServer['server'];
		$GetHost = $this->db->get_where('i_server', ['id' => $server])->row_array();
		if ($params['button'] == "") {
			return array('status' => 404,'message' => 'Button Data Cant Empty.');
		}else{
			$curl = curl_init();
			$dataarr = [
				"id" => $params['deviceid'],
				"type" => "button",
				"text" => $params['text'],
				"nohp" => $params['phonenumber'],
				"button" => $params['button'],
			];
			$datajson = json_encode($dataarr, true);
			curl_setopt_array($curl, array(
				CURLOPT_URL => $GetHost['apihit'].'/send',
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
			$datas = json_decode($response,true);
			if ($datas['status'] == true) {
				$datashow = [
					"type" => "Button Link",
					"nohp" => $params['phonenumber'],
					"text" => $params['text'],
					"button" => $params['button'],
				];
				curl_close($curl);
				return array('status' => 200,'message' => 'Message has been sent.','data' => $datashow);
			}else{
				return array('status' => 200,'message' => 'Device Not Connect.');
			}
		}
	}
	public function SendCopy($params)
	{
		$GetServer = $this->db->get_where('i_device', ['deviceid' => $params['deviceid']])->row_array();
		$server = $GetServer['server'];
		$GetHost = $this->db->get_where('i_server', ['id' => $server])->row_array();
		if ($params['button'] == "") {
			return array('status' => 404,'message' => 'Button Data Cant Empty.');
		}else{
			$curl = curl_init();
			$dataarr = [
				"id" => $params['deviceid'],
				"type" => "button",
				"text" => $params['text'],
				"nohp" => $params['phonenumber'],
				"button" => $params['button'],
			];
			$datajson = json_encode($dataarr, true);
			curl_setopt_array($curl, array(
				CURLOPT_URL => $GetHost['apihit'].'/send',
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
			$datas = json_decode($response,true);
			if ($datas['status'] == true) {
				$datashow = [
					"type" => "Button Copy",
					"nohp" => $params['phonenumber'],
					"text" => $params['text'],
					"button" => $params['button'],
				];
				curl_close($curl);
				return array('status' => 200,'message' => 'Message has been sent.','data' => $datashow);
			}else{
				return array('status' => 200,'message' => 'Device Not Connect.');
			}
		}
	}
	public function SendMedia($params)
	{
		$GetServer = $this->db->get_where('i_device', ['deviceid' => $params['deviceid']])->row_array();
		$server = $GetServer['server'];
		$GetHost = $this->db->get_where('i_server', ['id' => $server])->row_array();
		if ($params['mediatype'] == "") {
			return array('status' => 404,'message' => 'Media Type Cant Empty.');
		}elseif ($params['mediatype'] == "image") {
			$curl = curl_init();
			$dataarr = [
				"id" => $params['deviceid'],
				"type" => "media",
				"text" => $params['msg'],
				"nohp" => $params['phonenumber'],
				"media" => $params['mediaurl'],
				"mediatype" => 'image',
			];
			$datajson = json_encode($dataarr, true);
			curl_setopt_array($curl, array(
				CURLOPT_URL => $GetHost['apihit'].'/send',
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
			$datas = json_decode($response,true);
			if ($datas['status'] == true) {
				$datashow = [
					"type" => "Media (Image)",
					"nohp" => $params['phonenumber'],
					"text" => $params['text'],
					"media" => $params['mediaurl'],
				];
				curl_close($curl);
				return array('status' => 200,'message' => 'Message has been sent.','data' => $datashow);
			}else{
				return array('status' => 200,'message' => 'Device Not Connect.');
			}
		}elseif ($params['mediatype'] == "video") {
			$curl = curl_init();
			$dataarr = [
				"id" => $params['deviceid'],
				"type" => "media",
				"text" => $params['msg'],
				"nohp" => $params['phonenumber'],
				"media" => $params['mediaurl'],
				"mediatype" => 'video',
			];
			$datajson = json_encode($dataarr, true);
			curl_setopt_array($curl, array(
				CURLOPT_URL => $GetHost['apihit'].'/send',
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
			$datas = json_decode($response,true);
			if ($datas['status'] == true) {
				$datashow = [
					"type" => "Media (Image)",
					"nohp" => $params['phonenumber'],
					"text" => $params['msg'],
					"media" => $params['mediaurl'],
				];
				curl_close($curl);
				return array('status' => 200,'message' => 'Message has been sent.','data' => $datashow);
			}else{
				return array('status' => 200,'message' => 'Device Not Connect.');
			}
		}elseif ($params['mediatype'] == "document") {
			$curl = curl_init();
			$dataarr = [
				"id" => $params['deviceid'],
				"type" => "media",
				"text" => $params['msg'],
				"nohp" => $params['phonenumber'],
				"media" => $params['mediaurl'],
				"fileName" => $params['filename'],
				"mediatype" => 'document',
			];
			$datajson = json_encode($dataarr, true);
			curl_setopt_array($curl, array(
				CURLOPT_URL => $GetHost['apihit'].'/send',
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
			$datas = json_decode($response,true);
			if ($datas['status'] == true) {
				$datashow = [
					"type" => "Media (Image)",
					"nohp" => $params['phonenumber'],
					"text" => $params['msg'],
					"media" => $params['mediaurl'],
				];
				curl_close($curl);
				return array('status' => 200,'message' => 'Message has been sent.','data' => $datashow);
			}else{
				return array('status' => 200,'message' => 'Device Not Connect.');
			}
		}
	}
} ?>