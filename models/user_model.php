<?php

class User_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function userList()
	{
		$sth = $this->db->prepare('SELECT id, realname, username, email, role FROM users');
		$sth->execute();
		return $sth->fetchall();
	}

	public function userSingleList($id)
	{
		$sth = $this->db->prepare('SELECT id, realname, username, email, role FROM users WHERE id = :id');
		$sth->execute(array(':id' => $id));
		return $sth->fetch();
	}

	public function create($data)
	{
		$this->db->insert('users', array(
			'realname' => $data['realname'],
			'username' => $data['username'],
			'password' =>  Hash::create('md5', $data['password'], HASH_PASSWORD_KEY),
			'email' => $data['email'],
			'role' => $data['role']
			));
	}

	public function editSave($data)
	{

		$postData = array(
			'realname' => $data['realname'],
			'username' => $data['username'],
			'password' =>  Hash::create('md5', $data['password'], HASH_PASSWORD_KEY),
			'email' => $data['email'],
			'role' => $data['role']
			);
		
		$this->db->update('users', $postData, "`id` = {$data['id']}");
	}

	public function delete($id)
	{
		$sth = $this->db->prepare('DELETE FROM users WHERE id = :id');
		$sth->execute(array(
			':id' => $id
			));
	}
	
}