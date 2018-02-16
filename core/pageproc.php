<?php
/**
* This class will proccess the pages functionaliti
*/
class pagepros	
{
	
	function __construct()
	{
			
	}


	// Get the number of the itmes in page 
	public function get_page_element_number($db_array)
	{
		$database = new Database; // Start db
			$number_of_element = $db_array->num_rows;
			echo $number_of_element;
		$database->close(); // Close db
	}
}