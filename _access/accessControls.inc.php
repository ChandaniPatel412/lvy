<?php

function cleanSession()
{
	$_SESSION = array();
	if (ini_get("session.use_cookies")) {
		$params = session_get_cookie_params();
		setcookie(session_name(), '', time() - 42000,
			$params["path"], $params["domain"],
			$params["secure"], $params["httponly"]
		);
	}
	session_destroy();
}

function current_page(){
	$current_page = $_SERVER['PHP_SELF'];
	$filename = substr( $current_page, strrpos( $current_page, '/' )+1 );
	return strtolower($filename);
}

if(strtolower(current_page()) == "access.php"){
	
		$accessUser = strtolower(filter_var(str_replace(' ', '',$_POST['username']), FILTER_SANITIZE_STRING));
		$passcheck = sha1(strtolower(filter_var(str_replace(' ', '',$_POST['password']), FILTER_SANITIZE_STRING)));
		
		switch($accessUser)
		{
			case "brokeraccess":
			$userPath = 1;
			$accessPass = "270e6e089500429ffe33638e40cb3998e88c87c0";
			$sessionKey = "3356eb51dccf899d97f0dc8270dac6c340a3b11b";
			break;
				
			case "vipaccess":
			$userPath = 1;
			$accessPass = "81d78bdd6005da4ec724e09d2720f1c2cddb1dd8";
			$sessionKey = "3bd5331cf6830e3eba32dfaa2f95c14f796556da";
			break;
			
			default:
			$userPath = 0;
			break;
		}
		
		if($userPath != 0)
		{
			if(($accessUser == "brokeraccess" || $accessUser == "vipaccess") && $passcheck == $accessPass)
			{
				$_SESSION['sess_ax'] = true;
				$_SESSION['sess_ap'] = $sessionKey;
			}
		}
}

?>