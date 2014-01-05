<?php

class User_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function userList()
	{
		return $this->db->select('SELECT id, realname, username, email, role FROM user');
	}

	public function userSingleList($id)
	{
		return $this->db->select('SELECT id, realname, username, email, role FROM user WHERE id = :id', array(':id' => $id));
	}

	public function create($data)
	{
		$this->db->insert('user', array(
			'realname' => $data['realname'],
			'username' => $data['username'],
			'password' =>  Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY),
			'email' => $data['email'],
			'role' => $data['role']
			));
	}

	public function editSave($data)
	{

		$postData = array(
			'realname' => $data['realname'],
			'username' => $data['username'],
			'password' =>  Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY),
			'email' => $data['email'],
			'role' => $data['role']
			);
		
		$this->db->update('user', $postData, "`id` = {$data['id']}");
	}

	public function delete($id)
	{
		$result = $this->db->select('SELECT role FROM user WHERE id = :id', array(':id' => $id));
		if($result[0]['role'] == 'owner')
			return false;

		$this->db->delete('user', "id = '$id'");
	}
	
}