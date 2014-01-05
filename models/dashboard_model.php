<?php

class Dashboard_Model extends Model {

	function __construct() {
		parent::__construct();
	}
	
	function xhrInsert() 
	{
		$text = $_POST['text'];
		
		$this->db->insert('data', array('text' => $text));

		$data = array('text' => $text, 'id' => $this->db->lastInsertId());
		echo json_encode($data);
	}
	
	function xhrGetListings()
	{
		$result = $this->db->select('SELECT * FROM data');
		echo json_encode($result);
	}
	
	function xhrDeleteListing()
	{
		$id = (int) $_POST['id'];
		$this->db->delete('data', "id = '$id'");
	}

}