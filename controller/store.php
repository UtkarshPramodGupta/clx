<?php
require_once(I . 'helper.php');
require_once(M . 'model.php');

// if All college is selected
if(isset($_GET['college']) && $_GET['college'] == '0'){
	redirect('store');
}

// fetch all items of the seller corresponding to item with pid param
$items = (empty($_GET['param']) || isset($_GET['college']))?fetch_items():fetch_all(fetch_uid());

render('store', array('items' => $items));
?>
