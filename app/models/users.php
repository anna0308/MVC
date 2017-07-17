<?php
class models_users extends system_model
{
	public function registration ($reg_array)
	{
		$password   = md5($reg_array[count($reg_array)-2]);
		$table_name = "petra";
		$sql_values = [	
				"username" => "$reg_array[0]",
				"password" => "$password",
				"email"    => "$reg_array[3]"
		];
		$insert = $this->db->insert($table_name,$sql_values);
		return $insert;
	}
	
	public function checkLogin($username,$password)
	{
		$password = md5($password);
		$result   = $this->db->select("select id from petra where username='$username' and password='$password'")->first();
		return $result;
	}
	
}
?>