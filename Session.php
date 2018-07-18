<?php 
	
	/**
	* 
	*/
	class Session 
	{
	public static function init()
		{
			# code...
			if (version_compare(phpversion(), '5.4.0', '<')) {
				# code...
				if (session_id() == '') {
					# code...
					session_start();
				}
			}else{
				if (session_status() == PHP_SESSION_NONE) {
					# code...
					session_start();
				}
			}
		}


	public static function set($key, $value)
	{
		# code...
		$_SESSION[$key] = $value;
	}
	public static function get($key)
	{
		# code...
		if (isset($_SESSION[$key])) {
			# code...
			return $_SESSION[$key];
		}else{
			return false;
		}
	}
	}

 ?>