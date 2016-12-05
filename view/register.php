<?php
//VIEW
require_once(I . 'helper.php');
render('header' , array('title' => 'Register'));
?>
<form id="RegisterF" method="POST" action="/register" onsubmit="return vRF(this)">
    E-mail address: <input type="email" name="email" onblur="vE(this)"><br>
    First Name: <input type="text" name="name" onblur="vN(this)"><br>
    College: <select name='cid'>
				<option value='0' selected disabled>Select College</option>
				<?php require(M . 'clist.php')?>
			</select><br>
    Password: <input type="password" name="pwd"><br>
    Retype Password: <input type="password" name="rpwd" onblur="vPM()"><br>
    Gender:<input type="radio" name="sex" value="0">M <input type="radio" name="sex" value="1">F<br>
</form>
<button type="submit" form="RegisterF" name="submit">Count me in !</button>
<ul id="msg"><?=isset($msg)?'<li>' . $msg . '</li>':''?></span>

<?php
render('footer' , array('js' => "<script src='js/functions.js'></script>"))
?>
