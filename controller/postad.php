<?php
//CONTROLLER
require_once(I . 'helper.php');
require_once(M . 'model.php');

$render = "postad";

if(isset($_SESSION['uid'])){
    if($_POST){
		if(validPost($_POST)){
            $filerror = $_FILES['image']['error'];
            // if file upload successful
            if($filerror == 0){
                // check if file is in jpg format
                $jpg = chkext();
            }
            // if file uploaded with jpg image extension and size less than 5 MB OR no file is uploaded at all then proceed
            if(($filerror == 0 && $jpg && $_FILES['image']['size'] < 5000000) || $filerror == 4){
				// insert data and existense of image into database and retrive the post id
		        $pid = post($_POST, $filerror);
                if($filerror == 0){
                    // save image and rename it by its postid retrived above
                    saveimg($pid);
                }
		        $msg = "Item posted Successfully";
		        $items = fetchbelongings();
                $render = "dashboard";
            }
            elseif(!$jpg){
                $msg = "Unsupported image extension. Please upload jpeg/jpg files only.";
            }
            elseif($filerror == 1){
                $msg = "File size too high";
            }
            elseif($filerror == 3){
                $msg = "Could not upload complete file. Try again!!";
            }
            elseif($filerror == 6){
                $msg = "Missing temp folder. Server error. Rreport problem and try again later";
            }
            elseif($filerror == 7){
                $msg = "Failed to upload image. Try again.";
            }
            elseif($filerror == 8){
                $msg = "Server error. Report problem and try again later.";
            }
            else{
                $msg = "File size greater than 5 MB. Please compress your image before  uploading.";
            }
        }		
        else{
            $msg = "Please provide required and valid data.";
        }
    }
}
else{
    $msg = "You need to login to view this page.";
    $render = "login";
}
render($render , isset($msg)?array(
									'msg' => $msg,
									'items' => isset($items)?$items:''
								):array());
?>
