<?php
//VIEW

require_once(I . 'helper.php');
$title = isset($msg)?'Logout Successful':'Welcome to Sophomores';
render('header', array('title' => $title));
render('navbar');
?>

<?=isset($msg)?$msg:''?>
<ul>
	<li><a href="login">Click to Sign In</a></li>
	<li><a href="store">Go to store</a></li>
</ul>

<?php
render('footer');
?>
