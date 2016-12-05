<?php

require_once(I . 'helper.php');

if(isset($_SESSION['uid'])){
	unset($_SESSION['uid']);
	unset($_SESSION['cid']);
	unset($_SESSION['name']);
	session_destroy();
	render('home' , array('msg' => "You have Logged Out Succesfully"));
}
else{
	redirect();
}
?>
