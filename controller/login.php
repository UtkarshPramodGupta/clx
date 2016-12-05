<?php
// CONTROLLER

require_once(M . 'model.php');
require_once(I . 'helper.php');

if(!isset($_SESSION['uid'])){
	if (isset($_POST['email']) &&
		isset($_POST['password'])){
		// trim trailing spaces (if any)
		$email = rtrim($_POST['email']);
		$password = $_POST['password'];
		//$pwdhash = hash("SHA1", $password);
		
		$result = login_user($email, $password);
		if ($result){
			$_SESSION['uid'] = $result['uid'];
			$_SESSION['cid'] = $result['cid'];
			$_SESSION['name'] = $result['firstname'];	
			redirect();
		}
		else{
			//render('pwdhash',array('pwdhash' => $pwdhash));		
			render('login', array('msg' => "Wrong password"));
		}
	}
	else{
		render('login');
	}
}
else{
	redirect();
}

?>
