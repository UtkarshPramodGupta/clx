<?php
//VIEW

require_once(I . 'helper.php');
$title = isset($msg)?'Logout Successful':'Welcome to Sophomores';
render('header', array('title' => $title));
?>

<?=isset($msg)?$msg:''?>










<div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-7">
                    <h1 style="font-weight:100;">Welcome to CLX</h1>
                    <ul style=" font-size: 1.2em;color: #f59343; ">
                    	<li>Are you too a college student?</li>
                    	<li>Have you got some books that are no more of use to you?</li>
                    	<li>Or, you got some gadjets like mobile, laptops etc. that you got fed up with?</li>
                    	<li>Do you think your college mates would like to buy'em</li>
                    </ul>
                    <span style=" font-size: 1.3em; ">Sell anything in your college campus right on CLX</span>
                </div>
                <div class="col-md-4 col-xs-5">
                    <div>
                        <img src="/img/store.png" style="max-width:150px;padding: 15px;">
                    </div>
                </div>
            </div>
        </div>
    </div>









<?php
render('footer');
?>
