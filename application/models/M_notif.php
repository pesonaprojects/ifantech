<?php 
/**
  * 
  */
class M_notif extends CI_Model
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
				CURLOPT_URL => 'http://'.$GetHost['host'].'/send',
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
			$datashow = [
				"type" => "text",
				"nohp" => $params['phonenumber'],
				"text" => $params['msg'],
			];
			curl_close($curl);
			return array('status' => 200,'message' => 'Message has been sent.','data' => $datashow);
		}
	}
} ?>