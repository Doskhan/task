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

	public static function checkSession()
	{
		# code...
		if (self::get("login") == false) {
			# code...
			self::destroy();
			header("Location: login.php");
		}
	}
	public static function checkLogin()
	{
		# code...
		if (self::get("login") == true) {
			# code...
			// self::destroy();
			header("Location: index.php");
		}
	}

	public static function destroy()
	{
		# code...
		session_destroy();
		session_unset();
		header("Location: login.php");
	}

	}

 ?>