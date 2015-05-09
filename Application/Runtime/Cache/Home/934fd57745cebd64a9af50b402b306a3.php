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
             <div class="navbar-collapse  collapse filters ">
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


		
		

	<script type="text/javascript" src="/MyUsed/Public/Static/worthy/plugins/jquery.min.js"></script>
<div class="section">
		<div class="container">
			
	我的二手书页面，这里是我发布的二手书的列表
	<?php if(is_array($booksList["books"])): foreach($booksList["books"] as $key=>$bl): ?><div class="goods-item">
			<a href="<?php echo U('Goods/detail',array('id'=>$gl['id']));?>"><?php echo ($bl["product_name"]); ?></a>
		</div><?php endforeach; endif; ?>
	<?php echo ($booksList["page"]); ?>
	
	<a class="registerbtn" href="<?php echo U('Home/Goods/release');?>">发布二手书</a>

	</div>
	</div>
	

		
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