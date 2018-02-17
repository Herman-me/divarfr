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
				die();
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



}
