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

		
	<!-- Custom CSS -->
	<link href="/MyUsed/Public/Css/agency.css" rel="stylesheet">


	<link href="/MyUsed/Public/Css/mybooks.css" rel="stylesheet">
	<script type="text/javascript" src="/MyUsed/Public/Static/worthy/plugins/jquery.min.js"></script>

</br></br></br>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-7 panel panel-primary">
		<!-- Default panel contents -->
		<div class="panel-heading" style="height:50px;">
			<h4>我的二手书列表</h4>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-7"></div>
				<div>
					<form role="form" action="<?php echo U('User/mybooks');?>" method='post'>
						<div><input type="search text" name="search_books" placeholder="keywords"/>
							<button type="submit" >查找</button></div>
						</form>
					</div>
				</div>
			</div>

			<div class="panel-body">
				<div class="row"></div>
				<!-- <div class="col-md-1"></div> -->

				<table  width="750">
					<tr>
						<td class="photo-td">宝贝</td>
						<td class="price-td">价格(元)</td>
						<td class="quantity-td">数量</td>
						<td class="action-td">操作</td>
					</tr>
				</table>


				<!-- <tbody> -->
				<?php if(is_array($booksList["books"])): foreach($booksList["books"] as $key=>$info): ?></br>
				<table  width="750">
					<tr>
						<td colspan="2" class="photo-td"><?php echo ($info["seller"]); ?>：<?php echo ($info["sellerphone"]); ?></td>
						<td colspan="2" class="price-td"><?php echo ($info["product_name"]); ?></td>
						<td class="action-td"><?php echo (date("Y-m-d H:i:s",$info["create_time"])); ?></td>
					</tr>
					<!-- </table>
					<table> -->
					<tr>
						<td class="photo-td">
							<a href="#<?php echo ($info["id"]); ?>" class="portfolio-link" data-toggle="modal">
								<div style="height:130xp;width:130px;border:1px solid #ddd">
									<?php if(empty($info["photo"])): ?><img class="img-thumbnail" src="/MyUsed/Uploads/avatar-80.png" alt="">
										<?php else: ?>
										<img class="img-thumbnail" src="/MyUsed/Uploads/<?php echo ($info["photo"]); ?>" alt=""><?php endif; ?>
								</div>
							</a>
						</td>
						<td class="photo-desp"><?php echo ($info["description"]); ?></td>
						<td class="price-td"><?php echo ($info["price"]); ?></td>
						<td class="quantity-td"><?php echo ($info["quantity"]); ?></td>

						<td class="action-td">
							<a title="查看" href="#<?php echo ($info["id"]); ?>" class="portfolio-link" data-toggle="modal"><span class="glyphicon glyphicon-zoom-in"></span></a>&nbsp;&nbsp;
							<!-- <a title="编辑" href="<?php echo U('Home/Goods/edit',array('id'=>$info['id'],));?>"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;&nbsp; -->
							<a title="删除" href="<?php echo U('Home/Goods/delete',array('id'=>$info['id'],));?>"><span class="glyphicon glyphicon-trash"></span></a>&nbsp;&nbsp;
						</td>
					</tr>
				</table>

				<!--  Modal -->
				<div class="portfolio-modal modal fade" id="<?php echo ($info["id"]); ?>" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-content">
						<div class="close-modal" data-dismiss="modal">
							<div class="lr">
								<div class="rl">
								</div>
							</div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-lg-8 col-lg-offset-2">
									<div class="modal-body">
										<div class="row">
											<h3><?php echo ($info["product_name"]); ?></h3></br>
											<div style="text-align:left;">
												<b style="margin-left:120px;">商品信息</b>
												<ul style="margin-left:110px;margin-right:70px;">
													<li class="info">名称:<?php echo ($info["product_name"]); ?></li>
													<li class="info">估价:<?php echo ($info["price"]); ?>元</li>
													<li class="info">数量:<?php echo ($info["quantity"]); ?></li>
													<li class="info">分类:<?php echo ($info["category"]); ?></li>
													<li class="info">详细信息:<?php echo ($info["description"]); ?></li>
												</ul></br></br>

												<b style="margin-left:120px;">卖家信息</b>
												<ul style="margin-left:110px;margin-right:70px;">
													<li class="info">联系人:<?php echo ($info["seller"]); ?></li>
													<li class="info">手机号:<?php echo ($info["sellerphone"]); ?></li>
													<li class="info">微信号:<?php echo ($info["wechat"]); ?></li>
												</ul>
											</div>

											<div align="center">
											</br></br></br>
											<?php if(is_array($info['images'])): foreach($info['images'] as $key=>$image): ?><img class="img-rounded" src="/MyUsed/Uploads/<?php echo ($image); ?>" alt=""><?php endforeach; endif; ?>
										</div>
											<!-- <img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt=""> -->
											<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--End Modal --><?php endforeach; endif; ?>
			<?php echo ($booksList["page"]); ?>
		</div>
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