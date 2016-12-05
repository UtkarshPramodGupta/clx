<?php 
require_once(I . 'helper.php');
require_once(M . 'model.php');

if(isset($_GET['param'])){
    $item = fetch_details();
    render('item', array('item' => $item));
}
else{
    redirect();
}

?>
