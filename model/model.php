<?php
require_once(M . 'dbconnect.php');

function  login_user($email, $pwd){
	global $dbh;
	
	// select user
	$su = $dbh->prepare('SELECT uid, firstname, cid
	FROM users
	WHERE email=:e AND pwdhash=:p');
	$pwdhash = hash('SHA1' , $pwd);
	
	$su->bindvalue(':e' , $email , PDO::PARAM_STR);
	$su->bindvalue(':p' , $pwdhash , PDO::PARAM_STR);
	$su->execute();
	
	return $su->fetch(PDO::FETCH_ASSOC);
}

// funtion to check user weather a user with the provided mail id already exists while registration
function exists($email){
	global $dbh;
	
	// check user	
	$cu = $dbh->prepare('SELECT 1
	FROM users
	WHERE email=:e');
	
	$cu->bindvalue(':e' , $email , PDO::PARAM_STR);
	$cu->execute();
	
	return $cu->fetch();
}

function register_user($data){
    extract($data);
	global $dbh;
	
	// insert user
	$iu = $dbh->prepare('INSERT INTO users (email, pwdhash, firstname, cid, F)
	VALUES(:e, :p, :n, :c, :f)');
	$name = strtok($name , " "); 
	$pwdhash = hash('SHA1' , $pwd);
	$f = ($sex==1)?1:null;
	
	$iu->bindvalue(':e' , $email , PDO::PARAM_STR);
	$iu->bindvalue(':p' , $pwdhash , PDO::PARAM_STR);
	$iu->bindvalue(':n' , $name , PDO::PARAM_STR);
	$iu->bindvalue(':c' , $cid , PDO::PARAM_INT);
	$iu->bindvalue(':f' , $f , PDO::PARAM_INT);
	$iu->execute();
}

function post($data, $image){
    extract($data);
	global $dbh;
    $price = empty($price)?NULL:$price;
    $desc = empty($desc)?NULL:htmlspecialchars($desc);
    $image = ($image == 4)?0:1;
	
    $p = $dbh->prepare('INSERT INTO posts (uid, title, cid, price, catid, date, contact, description, i)
						VALUES(:u, :t, :cid, :p, :cat, :date, :con, :desc, :i)');
    
    $p->bindvalue(':u' , $_SESSION['uid'] , PDO::PARAM_INT);
    $p->bindvalue(':t' , htmlspecialchars($title) , PDO::PARAM_STR);
    $p->bindvalue(':cid' , $_SESSION['cid'] , PDO::PARAM_INT);
    $p->bindvalue(':p' , $price , PDO::PARAM_INT);
    $p->bindvalue(':cat' , intval($category) , PDO::PARAM_INT);
    $p->bindvalue(':date' , date("F j, Y") , PDO::PARAM_STR);
    $p->bindvalue(':con' , htmlspecialchars($contact) , PDO::PARAM_STR);
    $p->bindvalue(':desc' , $desc , PDO::PARAM_STR);
    $p->bindvalue(':i' , $image , PDO::PARAM_INT);
    $p->execute();
    
    return $dbh->lastInsertId();
}

function catcherror($dbh, $error){	
	$ie = $dbh->prepare('INSERT INTO errors (error, date, uid)
						 VALUES(:e, :d, :u)');
						 
	$ie->bindvalue(':e' , $error , PDO::PARAM_STR);
	$ie->bindvalue(':d' , date("F j, Y") , PDO::PARAM_STR);
	$ie->bindvalue(':u' , $_SESSION['uid'] , PDO::PARAM_INT);
	$ie->execute();
}

// for dashboard
function fetchbelongings(){
	global $dbh;
	
    $fb = $dbh->prepare('SELECT pid, title, price, date, description, i+0
                        FROM posts
                        WHERE uid=:u
						ORDER BY pid ASC');
                        
    $fb->bindvalue(':u' , $_SESSION['uid'] , PDO::PARAM_INT);
    $fb->execute();
    
    return $fb->fetchAll(PDO::FETCH_ASSOC);
}

function delete_item(){
    global $dbh;

    // check user id with post id to avoid XSRF attack
    $di = $dbh->prepare('DELETE 
                        FROM posts
                        WHERE pid=:p
                        AND uid=:u');

    $di->bindvalue(':p' , intval($_POST['delete']) , PDO::PARAM_INT);
    $di->bindvalue(':u' , $_SESSION['uid'] , PDO::PARAM_INT);
    $di->execute(); 

    return $di->rowCount();
}

function fetch_items(){
    global $dbh;
    $college = isset($_GET['college'])?" AND posts.cid=" . intval($_GET['college']):' ';
    $category = isset($_GET['category'])?" AND posts.catid=" . intval($_GET['category']):' ';
    $sql = "SELECT pid, title, price, date, posts.cid, cname, catname, i+0
            FROM posts 
            JOIN colleges ON posts.cid=colleges.cid
            JOIN categories ON posts.catid=categories.catid
            WHERE display=1" . $college . $category . 
            " ORDER BY pid DESC";
            

    $fi = $dbh->prepare($sql);

    $fi->execute();

    return $fi->fetchAll(PDO::FETCH_ASSOC);
}

function fetch_details(){
    global $dbh;

    $fd = $dbh->prepare('SELECT title, cid, price, date, contact, description, i+0
                        FROM posts
                        WHERE pid=:p');
    $fd->bindvalue(':p', intval($_GET['param']), PDO::PARAM_INT);
    $fd->execute();

    return $fd->fetch(PDO::FETCH_ASSOC);
}

function fetch_all($uid){
    global $dbh;

    $fa = $dbh->prepare('SELECT pid, title, price, date, posts.cid, cname, catname, i+0
            FROM posts 
            JOIN colleges ON posts.cid=colleges.cid
            JOIN categories ON posts.catid=categories.catid
            WHERE uid=:u AND display=1 
            ORDER BY pid DESC');

    $fa->bindvalue(':u', $uid, PDO::PARAM_INT);
    $fa->execute();

    return $fa->fetchAll(PDO::FETCH_ASSOC);
}

function fetch_uid(){
    global $dbh;

    $fu = $dbh->prepare('SELECT uid
                        FROM posts
                        WHERE pid=:p');

    $fu->bindvalue(':p', intval($_GET['param']), PDO::PARAM_INT);
    $fu->execute();

    $fetched = $fu->fetch(PDO::FETCH_ASSOC);

    return $fetched['uid'];
}
            

