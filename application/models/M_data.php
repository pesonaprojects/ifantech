<?php 
/**
  * 
  */
class M_data extends CI_Model
{
	//Create
	function SaveLabel($data)
	{
		$result = $this->db->insert('i_label', $data);
		return $result;
	}
	function SaveContact($data)
	{
		$result = $this->db->insert('i_contacts', $data);
		return $result;
	}
	function SaveServer($data)
	{
		$result = $this->db->insert('i_server', $data);
		return $result;
	}
	function SetupDevice($data)
	{
		$result = $this->db->insert('i_device', $data);
		return $result;
	}
	function SaveBroadcast($data)
	{
		$result = $this->db->insert('i_broadcast', $data);
		return $result;
	}
	function CreateAccount($data)
	{
		$result = $this->db->insert('i_users', $data);
		return $result;
	}

	//read
	function LabelByUser($userid)
	{
		$result = $this->db->query("SELECT * FROM i_label WHERE userid='$userid'");
		return $result;
	}
	function DeviceByUser($userid)
	{
		$result = $this->db->query("SELECT * FROM i_device WHERE deviceuser='$userid'");
		return $result;
	}
	function AllUsers()
	{
		$result = $this->db->query("SELECT * FROM i_users");
		return $result;
	}
	function ContactByUser($userid)
	{
		$result = $this->db->query("SELECT * FROM i_contacts WHERE userid='$userid'");
		return $result;
	}
	function ContactByUserAndLabel($userid,$label)
	{
		$result = $this->db->query("SELECT * FROM i_contacts WHERE userid='$userid' AND label='$label'");
		return $result;
	}
	function broadcastbyuser($userid)
	{
		$result = $this->db->query("SELECT * FROM i_broadcast WHERE bc_users='$userid'");
		return $result;
	}
	function AllServer()
	{
		$result = $this->db->query("SELECT * FROM i_server");
		return $result;
	}
	function server_list(){
		$hasil=$this->db->query("SELECT * FROM i_server");
		return $hasil->result();
	}
	function GetMe($userid){
		$hasil=$this->db->query("SELECT * FROM i_users WHERE id='$userid'");
		return $hasil->result();
	}

	//update
	function EditContact($data,$id)
	{
		$result = $this->db->set($data);
		$result = $this->db->where('id',$id);
		$result = $this->db->update('i_contacts');
		return $result;
	}
	function FinishSetup($userid)
	{
		$result = $this->db->set('device', 1);
		$result = $this->db->where('id',$userid);
		$result = $this->db->update('i_users');
		return $result;
	}
	function RevokeAPI($userid,$api){
		$hasil=$this->db->query("UPDATE i_users SET apikey='$api' WHERE id='$userid'");
		return $hasil;
	}
	function ChangePass($userid,$hasNewPassword){
		$result = $this->db->set('password', $hasNewPassword);
		$result = $this->db->where('id',$userid);
		$result = $this->db->update('i_users');
		return $result;
	}
	function EditUsers($data,$id)
	{
		$result = $this->db->set($data);
		$result = $this->db->where('id',$id);
		$result = $this->db->update('i_users');
		return $result;
	}

	//delete
	function HapusContact($id)
	{
		$result = $this->db->where('id',$id);
		$result = $this->db->delete('i_contacts');
		return $result;
	}
	function DeleteUsers($id)
	{
		$result = $this->db->where('id',$id);
		$result = $this->db->delete('i_users');
		return $result;
	}
} ?>