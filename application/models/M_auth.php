<?php 
/**
  * 
  */
class M_auth extends CI_Model
{
	public function auth($username,$password)
	{
		$result = $this->db->query("SELECT * FROM i_users WHERE username='$username' AND password='$password' LIMIT 1");
		return $result;
	}
} ?>