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

		<!-- <link rel="shortcut icon" href="/MyUsed/Public/Static/worthy/images/favicon.ico"> -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
		<link href="/MyUsed/Public/Static/worthy/bootstrap/css/bootstrap.css" rel="stylesheet">
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

           <!--  <ul class="nav nav-pills">
            	<li role="presentation" class="active"><a href="#">Home</a></li>
            	<li role="presentation"><a href="#">Profile</a></li>
            	<li role="presentation"><a href="#">Messages</a></li>
            </ul> -->


            <!-- Nav Starts -->
             <div class="navbar-collapse  collapse filters">
             </br>
              <ul class="nav nav-pills navbar-right">
                 <li role="presentation" class="active"><a href="<?php echo U('Home/Index/index');?>">Home</a></li>
                 <li role="presentation"><a href="<?php echo U('Home/User/login');?>">Sign In</a></li>
                 <li role="presentation"><a href="<?php echo U('Home/User/mybooks');?>">My Books</a></li>
                 <li role="presentation"><a href="#contact">Contact</a></li>
              </ul>
            </div>

            <!-- <div class="filters text-center">
							<ul class="nav nav-pills">
								<li class="active"><a href="#" data-filter="*">All</a></li>
								<li><a href="#" data-filter=".web-design">Web design</a></li>
								<li><a href="#" data-filter=".app-development">App development</a></li>
								<li><a href="#" data-filter=".site-building">Site building</a></li>
							</ul>
						</div> -->
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>
</br></br>
<!-- #Header Starts -->


		
		

	<script src="/MyUsed/Public/Js/image.js"></script>
	 <script type="text/javascript" src="/MyUsed/Public/Static/worthy/plugins/jquery.min.js"></script>
		<!-- banner start -->
		<!-- ================ -->
		<!-- <div id="banner" class="banner">
			<div class="banner-image"></div>
			<div class="banner-caption">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
							<h1 class="text-center">We are <span>Worthy</span></h1>
							<p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos debitis provident nulla illum minus enim praesentium repellendus ullam cupiditate reiciendis optio voluptatem, recusandae nobis quis aperiam, sapiente libero ut at.</p>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- banner end -->

		
		
		
		<!-- section start -->
		<!-- ================ -->
		<div class="section">
			<div class="container">
				<h1 class="text-center title" id="portfolio">Portfolio</h1>
				<div class="separator"></div>
				<p class="lead text-center">Lorem ipsum dolor sit amet laudantium molestias similique.<br> Quisquam incidunt ut laboriosam.</p>
				<br>			
				<div class="row object-non-visible" data-animation-effect="fadeIn">
					<div class="col-md-12">

						<!-- isotope filters start -->
						<div class="filters text-center">
							<ul class="nav nav-pills">
								<li class="active"><a href="#" data-filter="*">All</a></li>
								<li><a href="#" data-filter=".web-design">Web design</a></li>
								<li><a href="#" data-filter=".app-development">App development</a></li>
								<li><a href="#" data-filter=".site-building">Site building</a></li>
							</ul>
						</div>
						<!-- isotope filters end -->

						<!-- portfolio items start -->
						<div class="isotope-container row grid-space-20">



						<?php if(is_array($goods_list["lists"])): foreach($goods_list["lists"] as $key=>$gl): ?><div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										
											<img class="img-thumbnail" src="/MyUsed/Uploads/<?php echo ($gl["photo"]); ?>" onload="AutoResizeImage(262.5,175,this)" alt="">
								
										<a class="overlay" data-toggle="modal" data-target="#<?php echo ($gl["id"]); ?>">
											<i class="fa fa-search-plus"></i>
											<span><?php echo ($gl["product_name"]); ?></span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#<?php echo ($gl["id"]); ?>"><?php echo ($gl["product_name"]); ?></a>
								</div>

							
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
																<div id="<?php echo ($gl["product_name"]); ?>" class="carousel slide">
																	
																	<ol class="carousel-indicators">
																		<li data-target="#<?php echo ($gl["product_name"]); ?>" data-slide-to="0" class="active"></li>

																		<?php $__FOR_START_18876__=0;$__FOR_END_18876__=$gl["images_count"];for($i=$__FOR_START_18876__;$i < $__FOR_END_18876__;$i+=1){ ?><li data-target="#<?php echo ($gl["product_name"]); ?>" data-slide-to="<?php echo ($i+1); ?>"></li><?php } ?>
																	</ol>
																	<!-- Carousel items-->
																	<div class="carousel-inner">

																		<div class="active item"><img class="img-rounded" src="/MyUsed/Uploads/<?php echo ($gl["avater"]); ?>"  onload="AutoResizeImage(539,300,this)" alt="">
																		</div>
																		<?php if(is_array($gl['images'])): foreach($gl['images'] as $key=>$image): ?><div class="item"><img class="img-rounded" src="/MyUsed/Uploads/<?php echo ($image); ?>" onload="AutoResizeImage(539,300,this)" alt=""></div><?php endforeach; endif; ?>
																		
																	</div>

																	<a class="left carousel-control" href="#<?php echo ($gl["product_name"]); ?>" role="button" data-slide="prev">
																		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
																		<span class="sr-only">Previous</span>
																	</a>
																	<a class="right carousel-control" href="#<?php echo ($gl["product_name"]); ?>" role="button" data-slide="next">
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
								<!-- Modal end -->
							</div><?php endforeach; endif; ?>

						</div>
						<!-- portfolio items end -->
						<div class="row">
							<div class="col-md-5"></div>
							<div class="col-md-6">
								<?php echo ($goods_list["page"]); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		
	<footer>
		<div class="subfooter">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p class="text-center">Copyright © 2014 Worthy by <a target="_blank" href="http://htmlcoder.me">HtmlCoder</a>.</p>
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

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="/MyUsed/Public/Static/worthy/plugins/modernizr.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="/MyUsed/Public/Static/worthy/plugins/isotope/isotope.pkgd.min.js"></script>
		
		<!-- Backstretch javascript -->
		<script type="text/javascript" src="/MyUsed/Public/Static/worthy/plugins/jquery.backstretch.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="/MyUsed/Public/Static/worthy/plugins/jquery.appear.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="/MyUsed/Public/Static/worthy/js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="/MyUsed/Public/Static/worthy/js/custom.js"></script>




		
	</body>
</html>