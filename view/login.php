<?php
//VIEW

require_once(I . 'helper.php');
render('header', array('title' => 'Login'));
?>

<!--
<form id="LoginF" method="POST" action="/login" onsubmit="return vE(this.email)">
    E-mail address: <input type="email" name="email" onblur="vE(this)"><br>
    Password: <input type="password" name="password"><br>
	<span id='msg'><?=isset($msg)?$msg:''?></span>
</form>
<button form="LoginF" type="submit">Log In</button>
<span>or, <a href='/register'>Register</a></span>
!-->





<div class="row main">
	<div class="panel-heading">
       <div class="panel-title text-center">
       		<h1 class="title">Log In!</h1>
       		<hr />
       	</div>
    </div> 
	<div class="main-login main-center">
		<ul style="color:red" id="msg"><?=isset($msg)?'<li>' . $msg . '</li>':''?></ul>
		<form class="form-horizontal" id="LoginF" method="POST" action="/login" onsubmit="return vE(this.email)">
			

			<div class="form-group">
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
						<input type="text" class="form-control" type="email" name="email" onblur="vE(this)" placeholder="Enter your Email"/>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
						<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
					</div>
				</div>
			</div>


			<div class="form-group ">
				<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-button">Log In!</button>
			</div>
			<div class="login-register">
	            <a href="/register">Register</a>
	         </div>
		</form>
	</div>
</div>






<script type='text/javascript'>
	$("input[name=email]").focus();
</script>

<?php
render('footer' , array('js' => "<script src='js/functions.js'></script>"))
?>
