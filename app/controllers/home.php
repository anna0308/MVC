<?php
class home extends system_controller
{
	public function index()
	{
		$obj = new models_users;
		if(isset($_POST['sign_up'])){
			if(!empty($_POST['username'] && $_POST['password'] && $_POST['repeat_password'] && $_POST['email']) && $_POST['password'] === $_POST['repeat_password'])
			{
				$reg_array = [$_POST['username'],$_POST['password'],$_POST['repeat_password'],$_POST['email']];
				$result    = $obj -> registration($reg_array);
				if($result){
					$this->view->status = "You are registrated";
				}
			} else {
				var_dump("Error");
			}
		}
		if(isset($_POST['sign_in'])){
			if(!empty($_POST['user'] && $_POST['pass'])){
				$username = $_POST['user'];
				$password = $_POST['pass'];
				$result   = $obj->checkLogin($username,$password);
				if(is_null($result)) {
					var_dump("Fill correctly!");
				} else {
					$_SESSION['user_id'] = $result['id'];
				}
			} else {
				var_dump("Error");
			}
		}
		if(!isset($_SESSION['user_id'])) {
			$this->view->render('home');
		} else {
			echo "You are user.";
		}
	}
}
?>