<?php

function render($template, $data = array()){
    $path = V . $template . '.php';
	if (file_exists($path)){
        extract($data);
        require($path);
    }
}

function redirect($page=''){
	$url='http://' . $_SERVER['SERVER_NAME'] . '/' . $page;
	header('Location: ' . $url);
    exit();
}

function validPost($data){
	extract($data);	
	if((strlen($title) > 70) || (strlen($title) < 4)){
		return false;
    }
    if($category == 0){
		return false;
    }	
	if(strlen($desc) > 200){
		return false;
	}
	if(strlen($contact) > 100 || strlen($contact) < 4){
		return false;
	}
	if(!isset($choice)){
		return false;
	}
    if($choice == 0 && (empty($price) || !preg_match('/^[0-9]{2,}$/', $price))){
        return false;
    }
	return true;
}

function validReg($data){
	extract($data);		
	if(!preg_match('/^[A-Za-z ]{2,30}$/',$name)){
		return false;
	}
	if(!preg_match('/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/',$email)){
		return false;
	}
	if($pwd != $rpwd || (strlen($pwd) < 6) || (strlen($pwd) > 30)){
		return false;
	}
	if(!isset($sex)){
		return false;
	}
	if($cid == 0){
		return false;
	}
	return true;
}

function chkext(){
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    if (false === $ext = array_search(
								$finfo->file($_FILES['image']['tmp_name']),
								array('jpg' => 'image/jpeg'),
								true
								)
		){
           return false;
    }
    return true;
}

function saveimg($name){
	global $dbh;
    try{
        if(file_exists(P . 'img/' . $_SESSION['cid'] . '/' . $name . '.jpg')){    
            throw new RuntimeException($name . "alredy exists in" . $_SESSION['cid'] );
        }
        if(!move_uploaded_file(
                    $_FILES['image']['tmp_name'],
                    sprintf('./img/%s/%s.jpg',
                            $_SESSION['cid'],
                            $name)
                        ))
        {
            throw new RuntimeException("Could not upload file");
        }
    }
    catch(RuntimeException $e){
        // insert error in database
        catcherror($dbh, $e->getMessage());
    }
}
?>
