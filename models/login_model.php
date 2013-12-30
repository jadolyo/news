<?php

class Login_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function run()
	{
		$sth = $this->db->prepare("SELECT id, role FROM users WHERE 
				username = :username AND password = :password");
		$sth->execute(array(
			':username' => $_POST['username'],
			':password' => Hash::create('md5', $_POST['password'], HASH_PASSWORD_KEY)
		));
		
		$data = $sth->fetch();
		
		$count =  $sth->rowCount();
		if ($count > 0) {
			// login
			Session::init();
			Session::set('role', $data['role']);
			Session::set('loggedIn', true);
			header('location: ../dashboard');
		} else {
			header('location: ../login');
		}
		
	}
	
}