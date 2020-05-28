<?php 
	include_once './application/app_service/authService.php';
	
	if((isset($_POST['lCSRF'])) && ($_POST['lCSRF'] === $_SESSION['lCSRF']))
	{
		$emailUsername = $_POST['txtEmail'];
		$pwd = $_POST['txtPwd'];
		
		$authenticate = new Authenticate();
		$authenticate->validate($emailUsername, $pwd);

		if($authenticate->is_authenticated())
		{
			header("Location: ./application/dashboard?".Utility::random_strings(15));
		}
	}
?>