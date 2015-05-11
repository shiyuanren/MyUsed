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
						<li><a href="#">Account Settings</a></li>
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

		
	<link href="/MyUsed/Public/Css/mybooks.css" rel="stylesheet">

	<script type="text/javascript" src="/MyUsed/Public/Static/worthy/plugins/jquery.min.js"></script>
	<div class="section">
		<!-- start: Content -->

		<div class="container-fluid">
			<div class="row-fluid">
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo U('Home/Index/index');?>"><span class="glyphicon glyphicon-home"></span>Home</a>
					</li>
					<li><a href="#">My Books</a></li>
				</ul>

				<!-- <div class="row-fluid"> -->
				<div class="row">
					<div class="col-md-6"></div>
					<div class="col-md-6">
						<form role="form" action="<?php echo U('User/mybooks');?>" method='post'>
							<div><input type="search text" name="search_books" placeholder="keywords"/>
								<button type="submit" >查找</button></div>
							</form>
						</div>
					</div>


					<div class="row">
						<div style="margin-left:70px;" class="col-md-8">
							<div>
							</div>
							<div style="margin-left:50px;">
							</br>
							<table  class="table table-bordered" width="400">
								<tr>
									<td class="photo-td">宝贝</td>
									<td class="price-td">价格(元)</td>
									<td class="action-td">操作</td>
								</tr>
							</table>

							<?php if(is_array($booksList["books"])): foreach($booksList["books"] as $key=>$info): ?><table  class="table table-bordered" width="400">
									<tr>
										<td class="photo-td"><?php echo (date("Y-m-d H:i:s",$info["create_time"])); ?></td>
										<td class="price-td"><?php echo ($info["seller"]); ?>：<?php echo ($info["sellerphone"]); ?></td>
										<td class="action-td">操作</td>
									</tr>
									<tr>
										<td class="photo-td">
											<div style="height:130xp;width:130px;border:1px solid #ddd">
												<img class="img-thumbnail" src="/MyUsed/Uploads/<?php echo ($info["photo"]); ?>" onload="AutoResizeImage(262.5,175,this)" alt="">
											</div>
										</td>
										<td class="price-td"><?php echo ($info["price"]); ?></td>
										<td class="action-td">
											<a href="<?php echo U('Category/addCategory');?>" class="button" role="button">详情</a>
											<a href="<?php echo U('Category/addCategory');?>" class="button" role="button">编辑</a>
											<a href="<?php echo U('Category/addCategory');?>" class="button" role="button">删除</a>
										</td>
									</tr>
								</table><?php endforeach; endif; ?>
							<?php echo ($booksList["page"]); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- </div> -->
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