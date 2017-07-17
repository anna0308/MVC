<?php
class system_view
{
	public function render($file)
	{
		if(file_exists('../views/'.$file.'.php')){
			include('../views/'.$file.'.php');	
		} else {
			echo "ERROR: file not found";
		}	
	}
}
?>