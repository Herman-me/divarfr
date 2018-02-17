<?php

/**
* Telegram class for connect to telegram bot
*/
class telegram
{
	private $api;
	private $chatid;

	private $url;
	private $defult_msg = '@divarsr'; // For adding in future

	function __construct()
	{
		// set the api
		$this->set_api();

		// Set chat id
		$this->set_chat_id();

		// Set url
		$this->set_url();
	}

	// Set api for web
	private function set_api()
	{
		$database = new Database;
		$api = $database->get_api();
		$api = $api->fetch_assoc();
		$api = $api['api'];

		$this->api = $api;
		$database->close();

	}

	// This method set the chat id
	private function set_chat_id()
	{
		$db = new Database;
		$chat_id = $db->get_chat_id();
		$chat_id = $chat_id->fetch_assoc();
		$chat_id = $chat_id['chat_id'];

		// Set chat_id
		$this->chatid = "@".$chat_id;
		$db->close();
	}

	// This method will creat an url for use in app
	public function set_url()
	{
		$this->url = 'https://api.telegram.org/bot'.$this->api.'/';
	}

  public function get_ip_id()
  {
    $array = array($this->chatid , $this->api);
    return $array;
  }

	/** End of main proccess and Start functionality **/

	// Send image width caption to the telegram
	public function send_image_tg($photo = '../dis.png',$caption=null)
	{
		// Creat an link for sending image :)
		$send        = $this->url . "sendPhoto?chat_id=" . $this->chatid;

		// $caption = $this->defult_msg;

		$post_fields = array(
			'chat_id'=> $this->chatid,
		    'photo'  => new CURLFile(realpath($photo)),
		    'caption'=>$caption,
		);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		    "Content-Type:multipart/form-data"
		));
		curl_setopt($ch, CURLOPT_URL, $send);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
		$output = curl_exec($ch);

		$db = new Database;
		$db->save_record($output);
		$db->close();
		return $output;
	}
}
