<?php
//VIEW
require_once(I . 'helper.php');
render('header' , array('title' => 'Dashboard')); 
if(!$item){
	$msg="Item with id " . $_GET['param'] ." does not exists. It may have got deleted by its owner";
}
?>

<?=isset($_SESSION['uid'])?"<h1>Welcome, <a href='/'>" . $_SESSION['name'] . "</a></h1>":''?>
<a href='/postad'>Sell Item</a></br>
<a href='/store'>Go to Store</a></br>
<?=isset($_SESSION['uid'])?"<a href='/logout'>Logout</a><br>":''?>
<div>
<span id='msg'><?=isset($msg)?$msg:''?></span><br>

<?php
if($item){
	echo "<table style='
        border: 2px solid wheat;'>
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
				<td><img width=100px height=50px src='/img/" . $path . "'></td>
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
