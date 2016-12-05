<?php
//CONTROLLER
require_once(I . 'helper.php');
require_once(M . 'model.php');

if($_POST)
{
	if(validReg($_POST)){
		if(exists($_POST['email'])){
			render('register' , array('msg' => "User with this email already exists"));			
		}
		else{
			register_user($_POST);
			$result = login_user($_POST['email'], $_POST['pwd']);
			$_SESSION['uid'] = $result['uid'];
			$_SESSION['cid'] = $result['cid'];
			$_SESSION['name'] = $result['firstname'];
			redirect();
			//$chk = $dbh->lastInsertId();
			//echo $chk;
		}
	}
	else{
		render('register' , array('msg' => "Please enter complete and valid data"));
	}
}
else{
	render('register');
}

?>

