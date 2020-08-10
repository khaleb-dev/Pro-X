<?php

include './application/app_service/dbService.php';

class Authenticate extends dbService
{
	var $emailUsername = "";
	var $pwd = "";
	var $authenticated = false;
	
	function validate($emailUsername, $pwd)
	{
		$this->emailUsername = $emailUsername;
		$this->pwd = $pwd;

		if($this->emailUsername==DEFAULT_NAME && $this->pwd==DEFAULT_PASS)
		{
			$_SESSION['user_id'] = 1;
			$_SESSION['unique_id'] = "SuperUser";
			$_SESSION['user_status'] = 'Active';
			$_SESSION['user_role'] = "Administrator";
			$_SESSION['full_name'] = "Pro-x Machine";
			$_SESSION['gender'] = "Rather not say";
			$_SESSION['phone_number'] = "+2348103174565";
			$_SESSION['email'] = "bot@pro-x.com";
			$_SESSION['username'] = "Pro-Xbot";
			
			$picFolder = "./app_uploads";
			$picName = "user.png";
			
			$_SESSION['profilePic'] = $picFolder."/".$picName;
			
			$this->authenticated = true;
		} 
		//UxTElCqDuhY4yWf
		//DvUgj5PCKSEAfyf
		//eBxJ8zEgNw6csKm
		else
		{
			if (Utility::validateEmail($this->emailUsername) == true) {
				$sql = "SELECT u.id, u.unique_id, us.name AS user_status_name, ur.name AS user_role_name, u.fullname, u.gender, u.phone_no, u.email, u.username, u.password, u.passport_url FROM user u INNER JOIN user_status us ON u.user_status_id = us.id INNER JOIN user_role ur ON u.user_role_id = ur.id WHERE email = '".$this->emailUsername."'";
			}
			else {
				$sql = "SELECT u.id, u.unique_id, us.name AS user_status_name, ur.name AS user_role_name, u.fullname, u.gender, u.phone_no, u.email, u.username, u.password, u.passport_url FROM user u INNER JOIN user_status us ON u.user_status_id = us.id INNER JOIN user_role ur ON u.user_role_id = ur.id WHERE username = '".$this->emailUsername."'";
			}
			
			$sth = $this->service->query($sql);
			$user = $sth->fetch(PDO::FETCH_ASSOC);
			if($user)
			{
				$passwordHash = $user['password'];
				$user_pwd_input = $this->pwd;

				if (password_verify($user_pwd_input, $passwordHash)) {
				    $_SESSION['user_id'] = $user['id'];
					$_SESSION['unique_id'] = $user['unique_id'];
					$_SESSION['user_status'] = $user['user_status_name'];
					$_SESSION['user_role'] = $user['user_role_name'];
					$_SESSION['full_name'] = $user['fullname'];
					$_SESSION['gender'] = $user['gender'];
					$_SESSION['phone_number'] = $user['phone_no'];
					$_SESSION['email'] = $user['email'];
					$_SESSION['username'] = $user['username'];
					
					$picFolder = "./app_upload";

					if ((is_null($user['passport_url'])) && ($user['gender'] == 'male')){
						$picName = "xTnbjXs6q8ScfYm.png";
					}
					elseif ((is_null($user['passport_url'])) && ($user['gender'] == 'female')) {
						$picName = "dS2JVhMfDZq3rXf.png";
					}
					elseif ((is_null($user['passport_url'])) && ($user['gender'] == 'rather not say')) {
						$picName = "user.png";
					}
					else {
						$picName = $user['passport_url'];
					}
					
					$_SESSION['profilePic'] = $picFolder."/".$picName;

					$this->authenticated = true;
				} else {
					echo "Password verification failed!";
				}
			}	
		}
	} 
	
	function is_authenticated()
	{
		return $this->authenticated;
	}
	
}

define('DEFAULT_NAME',"bot@pro-x.com");
define('DEFAULT_PASS',"123456");
?>