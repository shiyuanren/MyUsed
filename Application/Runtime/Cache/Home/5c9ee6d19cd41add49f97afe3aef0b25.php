<?php if (!defined('THINK_PATH')) exit();?>
<html>
	<head>
		<title>99m商城</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
		<link rel="stylesheet" href="/used/Public/Static/bootstrap/css/bootstrap.css">
		<link type="text/css" rel="stylesheet" href="/used/Public/Css/user.css" />
		<link rel="stylesheet" type="text/css" href="/used/Public/Css/user1.css">
		<script src="/used/Public/Static/jquery-2.1.3.min.js"></script>
		<script src="/used/Public/Static/bootstrap/js/bootstrap.min.js"></script>
	</head>

	<body>

	<div class="container-fluid head">
		<div class="row">
		  	
	<div class="head-box">	
		<div class="logo"><img src="/used/Public/Img/logo.png"/></div>
		<div class="phone">网购热线：<span>4007-222-222</span></div>
</div>

		</div>
	</div>

	<div class="container-fluid  middle">
		<div class="row">
			<div class="pull-left col-md-2 left">
				
				
				
			</div>

			<div class="pull-left col-md-8 left">
				
	<div class="login_wrap ">
	<div class="login_wrapL"></div>
	<div class="login_wrapR">
	<div class="titler" align="center"><b>用户登录</b></div><br/><br/><br/><br/>
<div id='notice'>
	
	<form role="form" id='register_form' action="<?php echo U('Home/User/login');?>" method="post">
		<div class="form-group">
			<label for="exampleInputEmail1">用户名</label>
			<input name="username" type="text" class="form-control" id="username" placeholder="" value="<?php echo ($user["uname"]); ?>">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">密码</label>
			<input name="upwd" type="password" class="form-control" id="pwd" placeholder="Password">
		</div><br/><br/>
		<input id='btn' type="button" class="btn btn-default" value="登录"/>&nbsp;&nbsp;&nbsp;<a class="registerbtn" href="<?php echo U('Home/User/register');?>">免费注册</a>

	</form>


	</div>
	</div>
</div>

			</div>

			<div class="pull-left col-md-2 left">
				
				
				
			</div>

		</div>
	</div>


		
	<div class="container-fluid foot">
	  <div class="row">
	  	
	<div class="footwrap" align="center">
	<div><p>Copyright 2012-2014 www.99mi.com All Rights Reserved 京ICP备13035787号</p></div>
	<div class="foot-img" align="center">
		<img src="/used/Public/Img/zj_01.jpg"/>
		<img src="/used/Public/Img/zj_02.jpg"/>
		<img src="/used/Public/Img/zj_03.jpg"/>
		<img src="/used/Public/Img/zj_04.jpg"/>
		<img src="/used/Public/Img/zj_05.jpg"/>
	</div>
</div>

<script>
$(function(){
	
	$('#btn').click(function(){
		var $uname = $('#username').val();
		var $pwd = $('#pwd').val();
		$action = $('#register_form').attr('action');
		
		$.post($action,{username:$uname,upwd:$pwd},function(data){
			if(typeof(data.msg)!='undefined'){alert(data.msg);}
			window.location.href=data.url;
			
		});
	})
	
})
</script>

	  </div>
	</div>

	</body>
</html>