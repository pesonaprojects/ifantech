<?php 
/**
  * 
  */
class M_notif extends CI_Model
{
	public function SendWhatsapp($phone,$text)
	{
		$GetDetail = $this->db->get_where('i_web', ['id' => 1])->row_array();
		$web_wa_host = $GetDetail['web_wa_host'];
		$web_wa_id = $GetDetail['web_wa_id'];
		$GetHost = $this->db->get_where('i_server', ['id' => $web_wa_host])->row_array();
		$curl = curl_init();
		$dataarr = [
			"id" => $web_wa_id,
			"type" => "text",
			"text" => $text,
			"nohp" => $phone
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
		curl_close($curl);
	}
} ?>