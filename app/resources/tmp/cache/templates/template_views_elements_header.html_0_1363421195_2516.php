<?php
use lithium\storage\Session;
use app\extensions\action\Functions;
?><div class="navbar navbar-fixed-top" >
	<div class="navbar-inner" style="width: auto; padding: 0 20px;">
		<div class="container"  style="width: 90%; padding: 0 20px;" >
			<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</a>
			<!-- Be sure to leave the brand out there if you want it shown -->
			<a class="brand" href="/"><img src="/img/spreadbitcoin.gif" alt="Spreadbitcon.org"></a>
			<!-- Everything you want hidden at 940px or less, place within here -->
			<div>
			<!-- .nav, .navbar-search, .navbar-form, etc -->
				<div class="nav-collapse collapse">
				<ul class="nav">
					<li><a href="/articles/faq">FAQ</a></li>
					<li><a href="/articles/about">About us</a></li>
				</ul>
				</div>
			</div>
			<ul class="nav pull-right">
					<?php 
					$user = Session::read('member');
					
			if($user!=""){ ?>
			<li ><a href='#' class='dropdown-toggle' data-toggle='dropdown' style="background-color:#eeeeee ">
			<?php echo $h($user['mobile']); ?><i class=' icon-chevron-down'></i>
			</a>
			<ul class="dropdown-menu">
				<li><a href="/users/settings">Settings</a></li>			
				<li><a href="/users/accounts">Accounts</a></li>
				<li class="divider"></li>
				<li><a href="/logout">Logout</a></li>
			</ul>

			<?php }else{?>
				<form class="navbar-form" style="padding: 0 20px;" method="post" action="/login">
					<input type="text" placeholder="email" name="email" class="span1" style="font-size:11px " >
					<input type="password" placeholder="password" name="password" class="span1"  style="font-size:11px " >
					<button type="submit" class="btn">Login</button>&nbsp;&nbsp;
					<a href="/Users/signup" class="label label-important">Signup</a>
				</form>
			<?php }?>				
			</ul>			 
		</div>
	</div>
</div>
<header class="jumbotron subhead" id="overview">
  <div class="container" style="margin:10px">
    <h1>Spread Bitcoin</h1>
    <p class="lead">P2P Digital Currency</p>
  </div>
</header>
    <ul class="nav nav-tabs push-right">
    <li class="active">
	    <a href="#">Home</a>
    </li>
    <li><a href="#">Group</a></li>
    <li><a href="#">Events</a></li>
    <li><a href="#">Affiliates</a></li>	
    <li><a href="#">FAQ</a></li>	
    </ul>

