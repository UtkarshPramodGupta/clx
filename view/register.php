<?php
//VIEW
require_once(I . 'helper.php');
render('header' , array('title' => 'Register'));
?>

<!--
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
!-->

<div class="row main">
	<div class="panel-heading">
       <div class="panel-title text-center">
       		<h1 class="title">Sign Up!</h1>
       		<hr />
       	</div>
    </div> 
	<div class="main-login main-center">
		<ul style="color:red" id="msg"><?=isset($msg)?'<li>' . $msg . '</li>':''?></ul>
		<form class="form-horizontal" method="post" id="RegisterF" method="POST" action="/register" onsubmit="return vRF(this)">
			
			<div class="form-group">
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
						<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name" onblur="vN(this)"/>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
						<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email" onblur="vE(this)"/>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
						<input type="password" class="form-control" name="pwd" id="password"  placeholder="Enter your Password"/>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="cols-sm-10">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
						<input type="password" class="form-control" name="rpwd" id="confirm"  placeholder="Confirm your Password" onblur="vPM()"/>
					</div>
				</div>
			</div>

			<div class="form-group" style=" float: left; margin-right: 45px; ">
				<div class="cols-sm-10">
					<div class="input-group">
							<select class="form-control" name='cid'>
								<option value='0' selected disabled>Select College</option>
								<?php require(M . 'clist.php')?>
							</select>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="cols-sm-10">
					<div class="input-group">
						<input type="radio" name="sex" value="0"> A Guy <input type="radio" name="sex" value="1"> A Girl
					</div>
				</div>
			</div>

			<div class="form-group ">
				<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-button">Count me in!</button>
			</div>
			<div class="login-register">
	            <a href="/login">Login</a>
	         </div>
		</form>
	</div>
</div>



<?php
render('footer' , array('js' => "<script src='js/functions.js'></script>"))
?>
