<?php if (!defined('THINK_PATH')) exit();?>
 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="/MyUsed/Public/Css/user.css" />
<script src="/MyUsed/Public/Static/jquery-2.1.3.min.js"></script>
</head>
<body>

<header>
<div class="head-box">	
		<div class="logo"><img src="/MyUsed/Public/Img/logo.png"/></div>
		<div class="phone">网购热线：<span>4007-222-222</span></div>
</div>
</header>

<form  id="login_form" action="<?php echo U('Home/User/login');?>"  method="post">
用户名<input id="username" type='text' name='username'/><br>
密码<input id="pwd" type='password' name='pwd'/><br>
<input id='btn' type='button' value="登录"/>
</form>

<footer>
<div class="footwrap" align="center">
	<div align="center"><p>Copyright 2012-2014 www.99mi.com All Rights Reserved 京ICP备13035787号</p></div>
	<div class="foot-img" align="center">
		<img src="/MyUsed/Public/Img/zj_01.jpg"/>
		<img src="/MyUsed/Public/Img/zj_02.jpg"/>
		<img src="/MyUsed/Public/Img/zj_03.jpg"/>
		<img src="/MyUsed/Public/Img/zj_04.jpg"/>
		<img src="/MyUsed/Public/Img/zj_05.jpg"/>
	</div>
</div>
</footer>


<script>
$(function(){
	
	$('#btn').click(function(){
		//var $uname = $('#username').val();
		//var $pwd = $('#pwd').val();
		var sent_msg=$('#login_form').serialize();
		
		//console.log(sent_msg);
		//$.post("<?php echo U('Home/User/register');?>");
		var $action = $('#login_form').attr('action');
		
		$.post($action,sent_msg,function(data){
			console.log(data.msg);
			//$('#notice').html(data.msg);
		});
	})
	
})
	
	
</script>
</body>
</html>