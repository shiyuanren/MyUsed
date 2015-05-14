<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Secondhand Store</title>
		<meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
		<link href="/MyUsed/Public/Static/worthy/bootstrap/css/bootstrap.css" rel="stylesheet">
		<!-- <link href="/MyUsed/Public/Static/bootstrap/css/bootstrap.css" rel="stylesheet"> -->
		<link href="/MyUsed/Public/Static/worthy/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
		<link href="/MyUsed/Public/Static/worthy/css/animations.css" rel="stylesheet">
		<link href="/MyUsed/Public/Static/worthy/css/style.css" rel="stylesheet">
		<!-- <link href="/MyUsed/Public/Static/worthy/css/style1.css" rel="stylesheet"> -->
		<link href="/MyUsed/Public/Static/worthy/css/custom.css" rel="stylesheet">


	</head>

	<body class="no-trans">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header" style="height:80px">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="<?php echo U('Home/Index/index');?>"><img src="/MyUsed/Public/Img/logo.png" alt="logo"></a>
              <!-- #Logo Ends -->

             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <!-- Nav Starts -->
				
  <script type="text/javascript" src="/MyUsed/Public/Static/worthy/plugins/jquery.min.js"></script>
	<div class="navbar-collapse  collapse">
	</br>
	<ul class="nav navbar-nav navbar-right scroll">
		<li><a href="<?php echo U('Home/Index/index');?>">Home</a></li>
		<li class="active"><a href="<?php echo U('Home/User/mybooks');?>">My Books</a></li>
		<!-- <li><a href="#contact">Contact</a></li> -->
		<li><a href="<?php echo U('Home/User/login');?>">Sign In</a></li>
		<li><a href="#"></a></li>

		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				<?php if(!empty($_SESSION['user_name'])): echo (session('user_name')); ?>
					<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="<?php echo U('Home/User/mybooks');?>">My UsedBooks</a></li>
						<li><a href="<?php echo U('Home/Goods/release');?>">Release Books</a></li>
            <li><a href="<?php echo U('Home/User/accouts');?>">Account Settings</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo U('Home/User/logout');?>"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>Log Out</a></li>
					</ul>
					<?php else: ?>
					Account
					<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li class="disabled"><a href="#">My UsedBooks</a></li>
						<li class="disabled"><a href="#">Release Books</a></li>
						<li class="disabled"><a href="#">Account Settings</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo U('Home/User/logout');?>"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>Log Out</a></li>
					</ul><?php endif; ?>
			</li>
		</ul>
	</div>

				<!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>
</br></br>
<!-- #Header Starts -->

		
</br></br></br></br>
<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-5 panel panel-primary">


    <div class="panel-heading">
      <h3 class="panel-title">
        个人资料
      </h3>
    </div>

    <form class="form-horizontal" action="<?php echo U('User/accouts');?>" method="post">
      <div class="panel-body">

        <div class="col-md-1"></div>
          <div>
          <p>亲爱的<?php echo (session('user_name')); ?>，填写真实的资料，有助于好友找到你哦。</p>
        </div>
      </br>

          <div class="form-group">
            <lable class="col-md-3 control-label"><span>*</span><span>昵称</span></lable>
            <div class="col-md-4">
              <input name="nickname" type="text" disabled="disabled" placeholder=<?php echo (session('user_name')); ?>>
            </div>
          </div>

          <div class="form-group">
            <lable class="col-md-3 control-label"><span>性别</span></lable>
            <div class="col-md-4" style="margin:8px;">
              <input name="sex" type="radio" value="0" checked="checked"/><lable><span>男</span></lable>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input name="sex" type="radio" value="1" /><lable><span>女</span></lable>
            </div>
          </div>

          <div class="form-group">
            <lable class="col-md-3 control-label"><span>*</span><span>Email</span></lable>
            <div class="col-md-4">
              <input name="email" type="text" />
            </div>
          </div>

          <div class="form-group">
            <lable class="col-md-3 control-label"><span>*</span><span>联系人</span></lable>
            <div class="col-md-4">
              <input name="seller" type="text" placeholder="张三"/>
            </div>
          </div>

          <div class="form-group">
            <lable class="col-md-3 control-label"><span>*</span><span>手机号码</span></lable>
            <div class="col-md-4">
              <input name="phonenum" type="text" />
            </div>
          </div>

          <div class="form-group">
            <lable class="col-md-3 control-label"><span>微信</span></lable>
            <div class="col-md-4">
              <input name="wechat" type="text" />
            </div>
          </div>

      </div>
      <div class="panel-footer">
        <!-- Panel footer -->
        <div class="col-md-3"></div>
        <button type="submit" class="btn">提交</button>
      </div>

    </form>
  </div>
</div>


	<footer>
		<div class="subfooter">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p class="text-center">Copyright © 2015 SecondStore by <a target="_blank" href="#">Hasley</a>.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- .subfooter end -->
		</footer>
		<!-- footer end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->


		<!-- // <script type="text/javascript" src="/MyUsed/Public/Static/worthy/plugins/jquery.min.js"></script> -->
		<script type="text/javascript" src="/MyUsed/Public/Static/worthy/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/MyUsed/Public/Static/worthy/plugins/modernizr.js"></script>
		<script type="text/javascript" src="/MyUsed/Public/Static/worthy/plugins/isotope/isotope.pkgd.min.js"></script>
		<script type="text/javascript" src="/MyUsed/Public/Static/worthy/plugins/jquery.backstretch.min.js"></script>
		<script type="text/javascript" src="/MyUsed/Public/Static/worthy/plugins/jquery.appear.js"></script>
		<script type="text/javascript" src="/MyUsed/Public/Static/worthy/js/template.js"></script>
		<script type="text/javascript" src="/MyUsed/Public/Static/worthy/js/custom.js"></script>

	</body>

</html>