<?php if (!defined('THINK_PATH')) exit();?>
<html>
	<head>
		<title>99m商城</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
		<link rel="stylesheet" href="/MyUsed/Public/Static/bootstrap/css/bootstrap.css">
		<link type="text/css" rel="stylesheet" href="/MyUsed/Public/Css/user.css" />
		<link rel="stylesheet" type="text/css" href="/MyUsed/Public/Css/user1.css">
		<script src="/MyUsed/Public/Static/jquery-2.1.3.min.js"></script>
		<script src="/MyUsed/Public/Static/bootstrap/js/bootstrap.min.js"></script>
	</head>

	<body>

	<div class="container-fluid head">
		<div class="row">
		  	
	<div class="head-box">	
		<a class="registerbtn" href="<?php echo U('Home/User/login');?>">登录</a>
		<a class="registerbtn" href="<?php echo U('Home/User/register');?>">注册</a>

		<a class="registerbtn" href="<?php echo U('Home/User/mybooks');?>">我的二手书</a>
		
</div>

		</div>
	</div>

	<div class="container-fluid  middle">
		<div class="row">
			<div class="pull-left col-md-2 left">
				
				
				
			</div>

			<div class="pull-left col-md-8 left">
				
	<script>var $id=<?php echo ($goods_info["info"]["id"]); ?></script>
	<script src='/MyUsed/Public/Js/goods.js'></script>

	<div class="detail">
		<ul>
			<li>商品id: <?php echo ($goods_info["info"]["id"]); ?></li>
			<li>商品名称：<?php echo ($goods_info["info"]["product_name"]); ?></li>
			<li>商品价格：<?php echo ($goods_info["info"]["price"]); ?></li>
			<li>上架时间: <?php echo (date("Y-m-d H:i:s",$goods_info["info"]["create_time"])); ?></li>
			<li>更新时间：<?php echo (date("Y-m-d H:i:s",$goods_info["info"]["update_time"])); ?></li>
		<ul>	
	</div>

	<br/>
	<div class="buy-btn">
		<div class="select-num">
			<input id='minus' type="button" value='-'>
			<input id='num' type="text" disabled value='1'>
			<input id='incr' type="button" value='+'>
		</div><br/>
		<div><input id="shopping-cart" name="shopping-cart" type="button" value="加入购物车"/></div>
		<br/><a href="<?php echo U('Cart/index');?>">购物车</a>
	</div>


			</div>

			<div class="pull-left col-md-2 left">
				
				
				
			</div>

		</div>
	</div>


		
	<!-- <div class="container-fluid foot">
	  <div class="row">
	  	
	<div class="footwrap" align="center">
	<div><p>Copyright 2012-2014 www.99mi.com All Rights Reserved 京ICP备13035787号</p></div>
	<div class="foot-img" align="center">
		<img src="/MyUsed/Public/Img/zj_01.jpg"/>
		<img src="/MyUsed/Public/Img/zj_02.jpg"/>
		<img src="/MyUsed/Public/Img/zj_03.jpg"/>
		<img src="/MyUsed/Public/Img/zj_04.jpg"/>
		<img src="/MyUsed/Public/Img/zj_05.jpg"/>
	</div> -->
</div>

	  </div>
	</div>

	</body>
</html>