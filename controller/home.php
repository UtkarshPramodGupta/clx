<?php
//Controller

require_once(I . 'helper.php');
require_once(M . 'model.php');

if(isset($_SESSION['uid'])){
    if(isset($_POST['delete'])){
        $msg = (delete_item() == 0)?"Could not delete item. Try again. :(":"Item deleted successfully";
    }
	$items = fetchbelongings();
	render('dashboard', array('items' => $items, 'msg' => isset($msg)?$msg:''));
}
else{
	render('home');
}
	
?>
