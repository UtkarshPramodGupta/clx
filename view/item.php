<?php
//VIEW
require_once(I . 'helper.php');
render('header' , array('title' => 'Dashboard')); 
if(!$item){
	$msg="Item with id " . $_GET['param'] ." does not exists. It may have got deleted by its owner";
}
?>

<div>
<span id='msg'><?=isset($msg)?$msg:''?></span><br>

<?php
if($item){
	echo "<table class='table table-bordered'>
			<tr>
				<th>Image</td>
				<th>Title</td>
				<th>Description</td>
				<th>Price</td>
				<th>Date</td>
				<th>Contact</td>
			</tr>";

	$path = $item['i+0'] == 0?"default.jpg":$item['cid'] . "/" . $_GET['param'] . ".jpg";
	$item['price'] = empty($item['price'])?"On donation":$item['price'];

		echo "<tr>
				<td><a href='/img/" . $path . "'><img style='cursor:zoom-in;' width=200px height=150px src='/img/" . $path . "'></a></td>
				<td>" . $item['title'] . "</td>
				<td>" . $item['description'] . "</td>
				<td>" . $item['price'] . "</td>
				<td>" . $item['date'] . "</td>
				<td>" . $item['contact'] . "</td>
			</tr>";
		echo "<tr>
				  <td colspan='6'><a href='/store/" . $_GET['param'] . "'>View other items from this Seller</a></td>
			</tr>
		</table>";
}
?>


<?php
echo "</div>";
render('footer');
?>
