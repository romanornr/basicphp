<?php

class USER
{
	private $db;

	function __construct($db_con)
	{
		$this->db = $db_con;
	}

	public function login($username,$email, $password)
	{
		try
	{

	$stmt = $this->db->prepare("SELECT * FROM users WHERE username=:username OR email=:email LIMIT 1");
	$stmt->execute(array (':username'=>$username, ':email'=>$email));
	$userRow = $stmt->fetch(PDO::FETCH_ASSOC);
	if($stmt->rowCount() > 0)
		{
			if(password_verify($password, $userRow['password']))
			{
				$_SESSION['user_session'] = $userRow['id'];
				return true;
				} else {
					return false;
				}
			}
		}

		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	public function is_loggedin()
	{
		if(isset($_SESSION['user_session']))
		{
			return true;
		}
	}

	public function redirect($url)
	{
		header ("Location: $url");
	}

	public function logout()
	{
		session_destroy();
		unset($_SESSION['user_session']);
		return true;
	}

}
