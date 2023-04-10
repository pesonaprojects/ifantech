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
		return json_output(200,array('status' => 200,'API KEY' => $Api_key,'GETME' => $userid));
		// if ($query->num_rows() > 0) {
		// 	return true;
		// }else{
		// 	return json_output(200,array('status' => 200,'API KEY' => $Api_key,'GETME' => $userid));
		// }
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

	public function FunctionName($value='')
	{
		// code...
	}
} ?>