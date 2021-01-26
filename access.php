<?php

$page = 20;

if(isset($_GET['logout']))
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

require('Header.inc.php');
require('_access/accessControls.inc.php');
require('_scripts/functions.inc.php');
require('_access/Access.php');
require('Footer.inc.php');
require('FooterCode.inc.php');


?>