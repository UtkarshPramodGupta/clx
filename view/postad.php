<?php
require_once(I . 'helper.php');
render('header' , array('title' => 'PostAd'));    
?>
<!--
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
!-->


<div class="row main">
    <div class="panel-heading">
       <div class="panel-title text-center">
            <h1 class="title">Enter Details!</h1>
            <hr />
        </div>
    </div> 
    <div class="main-login main-center">
        <ul style="color:red" id="msg"><?=isset($msg)?'<li>' . $msg . '</li>':''?></ul>
        <form class="form-horizontal" id="postF" method="POST" enctype="multipart/form-data" onsubmit="return vPF(this)">
            

            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Category:</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <select class="form-control"  name="category" onchange="chk(this.value)">
                            <option value="0" selected disabled>Select Category</option>
                            <option value="1">Books</option>
                            <option value="2">Clothing</option>
                            <option value="3">Electronics</option>
                            <option value="4">Furniture</option>
                            <option value="5">Sports</option>
                            <option value="6">Vehicle</option>
                            <option value="7">Others</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Item Title:</label>
                <div class="cols-sm-10">
                    <div class="input-group">                    
                         <input class="form-control" type="text" name="title" placeholder="Item Title">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Item Description:</label>
                <div class="cols-sm-10">
                    <div class="input-group">                    
                        <textarea class="form-control" type="text" name="desc" placeholder="Item description"></textarea>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Your contact details:</label>
                <div class="cols-sm-10">
                    <div class="input-group">                    
                        <textarea class="form-control" type="text" name="contact" placeholder="Contact info"></textarea>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Select an option:</label>
                <div class="cols-sm-10">
                    <div class="input-group">                                           
                        <input type="radio" name="choice" value="1"> I want to Donate
                        <input type="radio" name="choice" value="0"> I want to Sell<br>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Your Price:</label>
                <div class="cols-sm-10">
                    <div class="input-group">                    
                        <input class="form-control" type="text" name="price" placeholder="Your Price"><br>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Upload image:</label>
                <div class="cols-sm-10">
                    <div class="input-group">  
                        <input type="hidden" name="MAX_FILE_SIZE" value="30000000">                  
                        <input  class="form-control" class="upload-img" type="file" name="image"><br/><br/><br/>
                </div>
            </div>


            <div class="form-group ">
                <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-button">Submit</button>
            </div>
            <div class="login-register">
                <a href="/store">Go to Store</a>
             </div>
        </form>
    </div>
</div>






<ul id="msg"><?=isset($msg)?'<li>' . $msg . '</li>':''?></ul>
<?php
render('footer' , array('js' => "<script src='js/functions.js'></script>"));
?>
