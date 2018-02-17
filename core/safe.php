<?php

/**
* This class give security to the Web
*/
class safe
{
	public $ip_address;

	function __construct($type=null)
	{
		if ($type !="class") {
			session_start();
		}
		// Get real ip address form user and create an session

		// Check if we use this inside the admin pages
		if ($type == 'admin') {
			if (!isset($_SESSION['admin_logged_in']))
				header("Location: die.php");
			}


		$this->ip_address = $this->get_real_ip_address();
		if (!isset($_SESSION['user_ip_add'])) {
			$_SESSION['user_ip_add'] = $this->ip_address;
		}

		//If $_SESSION danger is activated => kill prossece
		if (isset($_SESSION['danger'])) {
			// exit();
		}
		$this->check_ip();

	}

	// Get webSetting
	private function get_web_setting()
	{
		$dbsafe = new Database;

	}

		// Getting real ip address
		function get_real_ip_address()
		{
		   if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
		   {
		      $ip=$_SERVER['HTTP_CLIENT_IP'];
		   }
		   elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
		   {
		      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
		   }
		   else
		   {
		      $ip=$_SERVER['REMOTE_ADDR'];
		   }
		    return $ip;
		}



	// Checking ip that dosent change
	public function check_ip()
	{
		if ($this->ip_address !== $_SESSION['user_ip_add']) {
			die();
		}
	}

	// Function for filter alphabets _JUST_NUMBER
	public function JUST_NUMBER($number)
	{
		$number = preg_replace("/[a-z]/", '', $number);
		return $number;
	}

	// Safe Danger user protect session
	public function danger()
	{
		$_SESSION['danger'] = $this->ip_address;
	}

 	// Check password for web
	public function check_log_admin($password,$user=null)
	{
		$database = new Database;
		if(is_null($user)){
			$check = $database->get_admin_info($password); // This check admin is logged in or not
			if($check)
				return true;
			else
				return false;
		}
		$check = $database->get_admin_info($password,$user);
		if ($check)
			return true;
		else
			return false;
	}



	// Generate Strong Password for root
  function generateStrongPassword($length = 9, $add_dashes = false, $available_sets = 'luds')
	{
		$sets = array();
		if(strpos($available_sets, 'l') !== false)
			$sets[] = 'abcdefghjkmnpqrstuvwxyz';
		if(strpos($available_sets, 'u') !== false)
			$sets[] = 'ABCDEFGHJKMNPQRSTUVWXYZ';
		if(strpos($available_sets, 'd') !== false)
			$sets[] = '23456789';
		if(strpos($available_sets, 's') !== false)
			$sets[] = '!@#$%&*?';
		$all = '';
		$password = '';
		foreach($sets as $set)
		{
			$password .= $set[array_rand(str_split($set))];
			$all .= $set;
		}
		$all = str_split($all);
		for($i = 0; $i < $length - count($sets); $i++)
			$password .= $all[array_rand($all)];
		$password = str_shuffle($password);
		if(!$add_dashes)
			return $password;
		$dash_len = floor(sqrt($length));
		$dash_str = '';
		while(strlen($password) > $dash_len)
		{
			$dash_str .= substr($password, 0, $dash_len) . '-';
			$password = substr($password, $dash_len);
		}
		$dash_str .= $password;
		return $dash_str;
	}

}
