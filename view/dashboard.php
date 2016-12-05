<?php
//VIEW
require_once(I . 'helper.php');
render('header' , array('title' => 'Dashboard')); 
if(empty($items)){
	$msg="You haven't put any item on sale yet.";
}
?>

<h1>Welcome, <?=$_SESSION['name']?></h1>
<div>
<span id='msg'><?=isset($msg)?$msg:''?></span>

<?php
if(!empty($items)){
	echo "
        <form method=POST action='/'>
        <table style='
        border: 2px solid wheat;'>
        <tr>
            <th>Image</td>
            <th>Title</td>
            <th>Description</td>
            <th>Price</td>
            <th>Date</td>
            <th>Remove</td>
        </tr>";

	foreach($items as $item){
		$path = $item['i+0'] == 0?"default.jpg":$_SESSION['cid'] . "/" . $item['pid'] . ".jpg";
		$item['price'] = empty($item['price'])?"On donation":$item['price'];
		echo "<tr>
				<td><img width=100px height=50px src='img/" . $path . "'></td>
				<td>" . $item['title'] . "</td>
				<td>" . $item['description'] . "</td>
				<td>" . $item['price'] . "</td>
				<td>" . $item['date'] . "</td>
                <td><button name=delete value=" . $item['pid'] . ">Delete</button></td>
			</tr>";
	}
	echo "</table></form>";
}
?>


<?php
echo "</div>";
render('footer');
?>
