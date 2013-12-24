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
		$sth = $this->db->prepare('INSERT INTO users (`realname`, `username`, `password`, `email`, `role`)
			VALUES (:realname, :username, :password, :email, :role)');

		$sth->execute(array(
			':realname' => $data['realname'],
			':username' => $data['username'],
			':password' => $data['password'],
			':email' => $data['email'],
			':role' => $data['role']
		));
	}

	public function editSave($data)
	{
		$sth = $this->db->prepare('UPDATE users
			SET `realname` = :realname, `username` = :username, `password` = :password, `email` = :email, `role` = :role
			WHERE id = :id
			');

		$sth->execute(array(
			':id' => $data['id'],
			':realname' => $data['realname'],
			':username' => $data['username'],
			':password' => md5($data['password']),
			':email' => $data['email'],
			':role' => $data['role']
		));
	}

	public function delete($id)
	{
		$sth = $this->db->prepare('DELETE FROM users WHERE id = :id');
		$sth->execute(array(
			':id' => $id
			));
	}
	
}