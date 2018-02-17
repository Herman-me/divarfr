<?php

/**
* This class will do the page index functions
*/
class pageindex
{
	public $page_title;
	public $page_dis;
	public $admin_prof;


	function __construct()
	{
		$this->get_web_info(); //Get the page title for use in pages
	}

	// Get title
	public function get_web_info()
	{
		$database = new Database; // init database connection
			$infos = $database->get_some_info(); // Get info from database
			$this->page_title = $infos['web_name'];
		$database->close(); // close the database connection
	}

  // A method for showing info to others
  public function show()
  {
      $array = array($this->page_title);
      return $array;
  }

}
