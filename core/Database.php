<?php
	/**
	* Database connect and recive informations 	
	*/
	class Database
	{
		/**
		* propertices for connect
		*/
		private $db_host = "localhost";
	    private $db_user = "root";
	    private $db_pass = "";
	    private $db_name = "agahi";


	    public $link;
	    


	    function __construct()
	    {
	        $this->connect();
	    }


	   	//Connect method 
	    private function connect()
	    {
	        $this->link = new Mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name) or die();
	        $this->link->query('SET NAMES utf8');
	        
	    }

		  

		// Insert agahi inside database
		public function submit_agahi($array)
		{
			$escaped = $this->escape($array);
			$esAcl = $this->clean($escaped);
			$full_name = $esAcl['full_name'];
			$phone = $esAcl['phone'];
			$title = $esAcl['title'];
			$dis = $esAcl['dis'];
			$price = $esAcl['price'];

		 	$insert_into_database = $this->link->query("INSERT INTO free(full_name,phone,title,dis,price) VALUES 
		  		('$full_name','$phone','$title','$dis','$price')");

		  	if ($insert_into_database) {
		  		return TRUE;
			}
		  	else {return FALSE;}
		}


	// This will close connection for more safe
	public function close()
	{
		$this->link->close();
	}

	// Escape that values we get from user
	public function escape($var)
	{

		if (is_array($var)) {
			$result = array();
			foreach ($var as $key => $value) {
				$escape = $this->link->real_escape_string($value);
				$result[$key] = $escape;
			}
		}
		else{
			$result = $this->link->real_escape_string($var);
		}
		return $result;
	}

	public function clean($var)
	{
		if (is_array($var)) {
			$result = array();
			foreach ($var as $key => $value) {
				$clean = preg_replace('/[andor;\/{}.,]/', '', $value);
				$result[$key] = $clean;
			}
		}
		else{
			$result = preg_replace('/[andor;\/{}.,]/', '', $var);
		}
		return $result;
	}

	// Get info for rew list
	public function get_rew($page=1,$limit=10)
	{
		// Creat an safe val
		$safe		= new safe("class");
		$page 		= $safe->JUST_NUMBER($page);
		$limit 		= $safe->JUST_NUMBER($limit);
		$row_number = $page*$limit-$limit;
		echo $row_number;
		// Get rew with 10
		$get_some_rew = $this->link->query("SELECT full_name,title,dis,id FROM free LIMIT 10 OFFSET $row_number");
		if ($get_some_rew) {
			return $get_some_rew;
		}
		return false;
	}

	public function get_all_info_id($table,$id)
	{
		$escaped = $this->escape($array = array($id,$table));
		$clean 	 = $this->clean($escaped[0]);
		$table   = $escaped[1];
		$id	     = $clean;
		$get_all_info = $this->link->query("SELECT * FROM $table WHERE id=$id");

		return $get_all_info->fetch_assoc();
	}

	/**
	* The telegram table methods *********************
	**/

	public function get_api(){
		$api = $this->link->query("SELECT api FROM telegram");
		return $api;
	}

	// Get chat_id from database
	public function get_chat_id()
	{
		$chat_id = $this->link->query('SELECT chat_id FROM telegram');
		return $chat_id;
	}

	// Save records when we send message
	public function save_record($record)
	{
		$this->link->query("INSERT INTO 
			tgrecords(record) 
			VALUES('$record')");
	}




}