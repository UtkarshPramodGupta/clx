<?php
//VIEW
require_once(I . 'helper.php');
render('header' , array('title' => 'Dashboard')); 
if(empty($items)){
	$msg="No items yet. :(";
}
elseif(!(empty($_GET['param']) || isset($_GET['college']))){
	$msg = "This seller has put only " . count($items) . " items on sale in total";
}
?>

<?=isset($_SESSION['uid'])?"<h1>Welcome, <a href='/'>" . $_SESSION['name'] . "</a></h1>":''?>
<a href='/postad'>Sell Item</a><br>
<?=isset($_SESSION['uid'])?"<a href='/logout'>Logout</a><br>":''?>
<ul>
	<?php $college = isset($_GET['college'])?"&college=" . $_GET['college']:''; ?>
	
	<li><a href='/store?<?=$college?>'>All</a></li>
	<li><a href='/store?category=1<?=$college?>'>Books</a></li>
	<li><a href='/store?category=2<?=$college?>'>Clothing</a></li>
	<li><a href='/store?category=3<?=$college?>'>Electronics</a></li>
	<li><a href='/store?category=4<?=$college?>'>Furniture</a></li>
	<li><a href='/store?category=5<?=$college?>'>Sports</a></li>
	<li><a href='/store?category=6<?=$college?>'>Vehicle</a></li>
	<li><a href='/store?category=6<?=$college?>'>Others</a></li>
</ul>
<div>
	<form>
		<select name=college>
				<option value='0' selected disabled>Select College</option>
				<?php require(M . 'clist.php') ?>
		</select>
		<input type=submit>
	</form><br>
<span id='msg'><?=isset($msg)?$msg:''?></span><br>

<?php
if(!empty($items)){
	echo "
	<table style='
    border: 2px solid wheat;'>
	<tr>
		<th>Image</td>
		<th>Title</td>
		<th>Price</td>
		<th>College</td>
		<th>Category</td>
		<th>Date</td>
        <th>Contact Seller</td>
	</tr>";

	foreach($items as $item){
		$path = $item['i+0'] == 0?"default.jpg":$item['cid'] . "/" . $item['pid'] . ".jpg";
		$item['price'] = empty($item['price'])?"On donation":$item['price'];
		echo "<tr>
				<td><img width=100px height=50px src='/img/" . $path . "'></td>
				<td>" . $item['title'] . "</td>
				<td>" . $item['price'] . "</td>
				<td>" . $item['cname'] . "</td>
				<td>" . $item['catname'] . "</td>
				<td>" . $item['date'] . "</td>
                <td><a href='/item/" . $item['pid'] . "'>Contact Seller</a></td>
			</tr>";
	}
	echo "</table>";
}
?>


<?php
echo "</div>";
render('footer');
?>
