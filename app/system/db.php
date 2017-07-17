<?php
class system_db
{
	public $con;
	public $q;
	function __construct()
	{
		$this->con = new Mysqli('localhost','root','secret','users');
		if($this->con->connect_errno){
			echo $con->connect_error;
			exit;
		}
	}

	public function insert($table_name,$values)
	{
		$arr_key = [];
		$arr_val = [];
		foreach($values as $k=>$v){
			array_push($arr_key,$k);
			array_push($arr_val,$v);
		}
		$insert_where=implode(",", $arr_key);
		$insert_values=implode("','", $arr_val);
		$sql = "INSERT INTO ".$table_name." (" .$insert_where. ") VALUES ('" .$insert_values. "')";
		return $this->con->query($sql);
	}

	public function select($query)
	{
		$this->q = $this->con->query($query);
		return $this;
	}

	public function first()
	{
		return $this->q->fetch_assoc();
	}
	
	public function all()
	{
		$arr = [];
		while($row=$this->q->fetch_assoc()){
			array_push($arr,$row);
		}
		return $arr;
	}

}
?>