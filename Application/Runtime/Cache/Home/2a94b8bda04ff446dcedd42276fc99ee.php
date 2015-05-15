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
			<li class="active"><a href="<?php echo U('Home/Index/index');?>">Home</a></li>
			<li><a href="<?php echo U('Home/User/mybooks');?>">My Books</a></li>
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

		

	<script src="/MyUsed/Public/Js/image.js"></script>
	<script type="text/javascript" src="/MyUsed/Public/Static/worthy/plugins/jquery.min.js"></script>

	<!-- Carousel
	================================================== -->
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
			<div class="item active">
				<img src="/MyUsed/Public/Img/slide-01.jpg" alt="">
				<div class="container">
					<div class="carousel-caption">
						<h1>Example headline.</h1>
						<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						<a class="btn btn-large btn-primary" href="#">Sign up today</a>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="/MyUsed/Public/Img/slide-02.jpg" alt="">
				<div class="container">
					<div class="carousel-caption">
						<h1>Another example headline.</h1>
						<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						<a class="btn btn-large btn-primary" href="#">Learn more</a>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="/MyUsed/Public/Img/slide-03.jpg" alt="">
				<div class="container">
					<div class="carousel-caption">
						<h1>One more for good measure.</h1>
						<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						<a class="btn btn-large btn-primary" href="#">Browse gallery</a>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	</div><!-- /.carousel -->
<!-- section start -->
<!-- ================ -->
<div class="section">
	<div class="container">

		<!--  -->
		<div class="row">
			<?php if(is_array($goods_list["lists"])): foreach($goods_list["lists"] as $key=>$gl): ?><div class="col-xs-6 col-lg-3">
					<div style="text-align:center;height:220px;width:200px;border:0.5px solid #ddd">
						<div class="image-box">
							<div class="overlay-container">
									<?php if(empty($gl["photo"])): ?><img class="img-thumbnail" src="/MyUsed/Uploads/avatar-80.png"
										onload="AutoResizeImage(262.5,175,this)" alt="">
										<?php else: ?>
										<img class="img-thumbnail" src="/MyUsed/Uploads/<?php echo ($gl["photo"]); ?>"
										onload="AutoResizeImage(262.5,175,this)" alt=""><?php endif; ?>
									<a class="overlay" data-toggle="modal" data-target="#<?php echo ($gl["id"]); ?>">
										<i class="fa fa-search-plus"></i>
										<span><?php echo ($gl["product_name"]); ?></span>
									</a>
									<!-- <a class="btn btn-default btn-block" data-toggle="modal" data-target="#<?php echo ($gl["id"]); ?>"><?php echo ($gl["product_name"]); ?></a> -->
									<!-- <p><a class="btn btn-default btn-block" data-toggle="modal" data-target="#<?php echo ($gl["id"]); ?>" role="button"><?php echo ($gl["product_name"]); ?> &raquo;</a></p> -->
							</div>
					  </div>
						<p><a class="btn btn-default btn-block" data-toggle="modal" data-target="#<?php echo ($gl["id"]); ?>"
									role="button"><?php echo ($gl["product_name"]); ?> &raquo;</a></p>
				</div>


	      </div><!--/.col-xs-6.col-lg-4-->


				<!-- Modal -->
				<div class="modal fade" id="<?php echo ($gl["id"]); ?>" tabindex="-1" role="dialog" aria-labelledby="project-1-label" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
								<h4 class="modal-title" id="project-1-label"><?php echo ($gl["product_name"]); ?></h4>
							</div>
							<div class="modal-body">
								<h3>Product Description</h3>
								<div class="row">
									<div class="col-md-6">
										<div class="detail">
											<ul>

												<li>商品：<?php echo ($gl["product_name"]); ?></li>
												<li>估价：￥<?php echo ($gl["price"]); ?></li>
												<li>数量：<?php echo ($gl["quantity"]); ?></li>
												<li>描述：<?php echo ($gl["description"]); ?></li>
												<li>联系人：<?php echo ($gl["seller"]); ?></li>
												<li>手机号：<?php echo ($gl["sellerphone"]); ?></li>
												<li>微信：<?php echo ($gl["wechat"]); ?></li>
												<li>上架时间: <?php echo (date("Y-m-d H:i:s",$gl["create_time"])); ?></li>

											</ul>
										</div>
									</div>
									<div class="col-md-6">


										<!--图片滑动-->
										<div id="<?php echo -$gl['id'];?>" class="carousel slide">

											<ol class="carousel-indicators">
												<li data-target="#<?php echo -$gl['id'];?>" data-slide-to="0" class="active"></li>

												<?php $__FOR_START_3934__=0;$__FOR_END_3934__=$gl["images_count"];for($i=$__FOR_START_3934__;$i < $__FOR_END_3934__;$i+=1){ ?><li data-target="#<?php echo -$gl['id'];?>" data-slide-to="<?php echo ($i+1); ?>"></li><?php } ?>
											</ol>
											<!-- Carousel items-->
											<div class="carousel-inner">

												<div class="active item"><img class="img-rounded" src="/MyUsed/Uploads/<?php echo ($gl["avater"]); ?>"  onload="AutoResizeImage(539,300,this)" alt="">
												</div>
												<?php if(is_array($gl['images'])): foreach($gl['images'] as $key=>$image): ?><div class="item"><img class="img-rounded" src="/MyUsed/Uploads/<?php echo ($image); ?>" onload="AutoResizeImage(539,300,this)" alt=""></div><?php endforeach; endif; ?>

											</div>

											<a class="left carousel-control" href="#<?php echo -$gl['id'];?>" role="button" data-slide="prev">
												<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="right carousel-control" href="#<?php echo -$gl['id'];?>" role="button" data-slide="next">
												<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>


									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Modal end --><?php endforeach; endif; ?>

    </div><!--/row-->

		<div class="row">
			<div class="col-md-5"></div>
			<div class="col-md-6">
				<?php echo ($goods_list["page"]); ?>
			</div>
		</div>
		<!--  -->
	</div>
</div>

<script>
/* center modal */
function centerModals(){
	$('.modal').each(function(i){
		var $clone = $(this).clone().css('display', 'block').appendTo('body');
		var top = Math.round(($clone.height() - $clone.find('.modal-content').height()) / 2)-50;
		top = top > 0 ? top : 0;
		$clone.remove();
		$(this).find('.modal-content').css("margin-top", top);
	});
}
$('.modal').on('show.bs.modal', centerModals);
$(window).on('resize', centerModals);
</script>
<!-- section end -->


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