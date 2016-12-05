<?php
require_once(I . 'helper.php');
render('header' , array('title' => 'PostAd'));    
?>
<form id="postF" method="POST" enctype="multipart/form-data" onsubmit="return vPF(this)">
    <select name="category" onchange="chk(this.value)">
        <option value="0" selected disabled>Select Category</option>
        <option value="1">Books</option>
        <option value="2">Clothing</option>
        <option value="3">Electronics</option>
        <option value="4">Furniture</option>
        <option value="5">Sports</option>
        <option value="6">Vehicle</option>
        <option value="7">Others</option>
    </select><br>
    <input type="text" name="title" placeholder="Item Title"><br>
    <textarea type="text" name="desc" placeholder="Item description"></textarea><br>
    <textarea type="text" name="contact" placeholder="Contact info"></textarea><br>
    <input type="radio" name="choice" value="1">I want to Donate
    <input type="radio" name="choice" value="0">I want to Sell<br>
    <input type="text" name="price" placeholder="Your Price"><br>
    <input type="hidden" name="MAX_FILE_SIZE" value="30000000">
    <div class="upload-div">Upload Image: <input class="upload-img" type="file" name="image"><br></div>
    <button type="submit" form="postF">Submit</button>
</form>
<ul id="msg"><?=isset($msg)?'<li>' . $msg . '</li>':''?></ul>
<?php
render('footer' , array('js' => "<script src='js/functions.js'></script>"));
?>
