<?php
//VIEW

require_once(I . 'helper.php');
render('header', array('title' => 'Login'));
?>

<form id="LoginF" method="POST" action="/login" onsubmit="return vE(this.email)">
    E-mail address: <input type="email" name="email" onblur="vE(this)"><br>
    Password: <input type="password" name="password"><br>
	<span id='msg'><?=isset($msg)?$msg:''?></span>
</form>
<button form="LoginF" type="submit">Log In</button>
<span>or, <a href='/register'>Register</a></span>

<script type='text/javascript'>
	$("input[name=email]").focus();
</script>

<?php
render('footer' , array('js' => "<script src='js/functions.js'></script>"))
?>
