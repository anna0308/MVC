<?php
class system_route 
{
	function __construct($path)
	{
		if(!empty($path[0])){
			$controller = $path[0];
			if(file_exists('../controllers/'.$controller.'.php')){
				require '../controllers/'.$controller.'.php';
				if(class_exists($controller,false)){
					$ctrl_obj = new $controller;
					if(!empty($path[1])){
						$method = $path[1];
						if(method_exists($ctrl_obj,$method)){
							unset($path[0],$path[1]);
							call_user_func_array([$ctrl_obj,$method],$path);
						} else {
							echo "Method not found !!!";
						}
					} else {
						$ctrl_obj -> index();
					}
				} else {
					echo "Class not found !!!";
				}
			} else {
				echo "File not found !!!";
			}
		} else {
			include '../controllers/home.php';
			$def_obj = new home;
			$def_obj -> index();
		}
	}
}
?>