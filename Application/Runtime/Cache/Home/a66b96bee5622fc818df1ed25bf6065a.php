<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Worthy | 二手书商城</title>
		<meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="/used/Public/Static/worthy/images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="/used/Public/Static/worthy/bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="/used/Public/Static/worthy/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="/used/Public/Static/worthy/css/animations.css" rel="stylesheet">

		<!-- Worthy core CSS file -->
		<link href="/used/Public/Static/worthy/css/style.css" rel="stylesheet">

		<!-- Custom css --> 
		<link href="/used/Public/Static/worthy/css/custom.css" rel="stylesheet">
	</head>

	<body class="no-trans">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- header start -->
		<!-- ================ --> 
		<header class="header fixed clearfix navbar navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">

						<!-- header-left start -->
						<!-- ================ -->
						<div class="header-left clearfix">

							<!-- logo -->
							<div class="logo smooth-scroll">
								<a href="#banner"><img id="logo" src="/used/Public/Static/worthy/images/logo.png" alt="Worthy"></a>
							</div>

							<!-- name-and-slogan -->
							<div class="site-name-and-slogan smooth-scroll">
								<div class="site-name"><a href="#banner">二手书</a></div>
								<div class="site-slogan">Free Bootstrap Theme by <a target="_blank" href="http://htmlcoder.me">HtmlCoder</a></div>
							</div>

						</div>
						<!-- header-left end -->

					</div>
					<div class="col-md-8">

						<!-- header-right start -->
						<!-- ================ -->
						<div class="header-right clearfix">

							<!-- main-navigation start -->
							<!-- ================ -->
							<div class="main-navigation animated">

								<!-- navbar start -->
								<!-- ================ -->
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">

										<!-- Toggle get grouped for better mobile display -->
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>

										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
											<ul class="nav navbar-nav navbar-right">
												<li class="active"><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
												<li><a href="<?php echo U('Home/User/login');?>">登录</a></li>
												
												<li><a href="<?php echo U('Home/User/mybooks');?>">我的二手书</a></li>
												
												<li><a href="#clients">关于</a></li>
												<!--<li><a href="#portfolio">Portfolio</a></li>
													<li><a href="#portfolio">登录</a></li>
												<li><a href="#contact">Contact</a></li>-->
											</ul>
										</div>

									</div>
								</nav>
								<!-- navbar end -->

							</div>
							<!-- main-navigation end -->

						</div>
						<!-- header-right end -->

					</div>
				</div>
			</div>
		</header>
		
		

	<script src="/used/Public/Static/jquery-2.1.3.min.js"></script>
	
	<link href="/used/Public/Static/fileinput/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css"/>
	<script src="/used/Public/Static/jquery-2.1.3.min.js"></script>
	<script src="/used/Public/Js/release.js"></script>
 <link rel="stylesheet" type="text/css" href="/used/Public/Css/release.css">

	<script src="/used/Public/Static/fileinput/js/fileinput.min.js"></script>
	<script src="/used/Public/Static/fileinput/js/fileinput_locale_zh.js"></script>

<!-- 	<div id="banner" class="banner">
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

	</br></br></br></br></br>
<div class="container-fluid" id="LG">
	<div class="row-fluid">
		<div class="span12">
			<div class="tabbable">
				<ul class="nav nav-tabs" id="myTab">
					<li class="active">
						<a href="#panel-1" data-toggle="tab">填写详情</a>
					</li>
					<li>
						<a href="#panel-2" data-toggle="tab">卖家联系方式</a>
					</li>
					<li>
						<a href="#panel-3" data-toggle="tab">上传大图</a>
					</li>
				</ul>

				<div class="tab-content">

					<!-- <form enctype="multipart/form-data" class="form-horizontal" action="<?php echo U('release');?>" method="post"> -->
					<div class="tab-pane active" id="panel-1">

					</br></br></br>
						<form id="form-1" enctype="multipart/form-data" class="form-horizontal" action="<?php echo U('release');?>" method="post">

							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-3">
										</br></br></br></br>
										<div class="form-group">
										<label for="inputEmail3" class="col-md-2 control-label"></br></br>小图</label>
										<!-- <div class="col-md-1"></div> -->
										<div class="col-md-4">
											<div id="uploadPreview"></br></br></div>

											<input type="file" id="uploadImage" name="photoimage" class="fimg1" />
											 <!-- onchange="PreviewImage();" -->
										</div>

									</div>
								</div>


								<div class="col-md-6">


									<div class="form-group">
										<label for="inputEmail3" class="col-md-2 control-label">商品名称</label>
										<div class="col-md-8">
											<input type="text" name="product_name" class="form-control" id="inputEmail3" placeholder="name">
										</div>
									</div>

									<div class="form-group">
										<label for="inputEmail3" class="col-md-2 control-label">选择分类</label>
										<div class="col-md-2">
											<select class="input-xlarge" name="select">

												<?php if(is_array($category_lists)): foreach($category_lists as $key=>$cl): ?><option value="<?php echo ($key); ?>"><?php echo ($cl); ?></option><?php endforeach; endif; ?>
											</select>
										</div>
									</div>



									<div class="form-group">
										<label for="inputEmail3" class="col-md-2 control-label">预估价格</label>
										<div class="col-md-6">
											<input type="text" name="price" class="form-control"  id="inputEmail3" placeholder="price">
										</div>
									</div>

									<div class="form-group">
										<label for="inputEmail3" class="col-md-2 control-label">数量</label>
										<div class="col-md-6">
											<input type="number" name="quantity" class="form-control" id="inputEmail3" placeholder="quantity">
										</div>
									</div>


									<div class="form-group">
										<label for="inputEmail3" class="col-md-2 control-label">商品详情</label>
										<div class="col-md-4">
											<textarea name="description" rows="4" cols="38" placeholder="description"></textarea>
										</div>
									</div>

								</br>


									<div class="form-group">
										<div class="col-md-offset-3 col-md-9">
											<!-- <button type="submit" class="btn btn-default">下一步</button> -->
											<input id="panel1-btn" type="button" class="btn btn-default" value="下一步"/>
											<!-- <a id="panel-1" href="#panel-2" data-toggle="tab" class="btn btn-default">下一步</a> -->
										</div>
									</div>
								</div>




							</div>
						</form>
					</div>

					<div class="tab-pane" id="panel-2">
						</br></br></br>
					   	<form id="form-2" class="form-horizontal" action="<?php echo U('release');?>" method="post">
						<div class="form-group">
							<label for="inputEmail3" class="col-md-3 control-label">联系人</label>
							<div class="col-md-4">
								<input type="text" name="seller" class="form-control" id="inputEmail3" placeholder="name">
							</div>
						</div>

						<div class="form-group">
							<label for="inputEmail3" class="col-md-3 control-label">手机号</label>
							<div class="col-md-4">
								<input type="text" name="sellerphone" class="form-control" id="inputEmail3" placeholder="phonenum">
							</div>
						</div>

						<div class="form-group">
							<label for="inputEmail3" class="col-md-3 control-label">其他联系方式</label>
							<div class="col-md-4">
								<input type="text" name="sellerphone" class="form-control" id="inputEmail3" placeholder="wechat or QQ">
							</div>
						</div>

					</br>

						<div class="form-group">

							<label for="inputEmail3" class="col-md-4 control-label"></label>
							<div class="col-md-4">
								<!-- <button type="submit" class="btn btn-default">填写卖家联系方式</button> -->
								<input id="panel2-btn" type="button" class="btn btn-default" value="下一步"/>
								<!-- <a href="#panel-3" data-toggle="tab" class="btn btn-default">下一步</a> -->
							</div>
						</div>
					</form>
					</div>


					<div class="tab-pane" id="panel-3"></br>
						<div class="container-fluid">
							<div class="row-fluid">
								<div class="span12">

									<div class="row">

										<div class="col-md-1"></div>
										<div class="col-md-10">
											<!-- <form class="form-horizontal" action="<?php echo U('release');?>" method="post" enctype="multipart/form-data"> -->
											<input id="input-1" type="file" name="photo[]" multiple="true" class="file-loading"/>
										</div>
										<div class="col-md-1"></div>
									</div>

									<br/><br/>
									<div class="row">
										<div class="col-md-6"></div>
										<div class="col-md-2">
											<!-- <button type="submit" class="btn btn-default">继续发布</button> -->
											<a href="<?php echo U('release');?>"  class="btn btn-default" role="button">继续发布</a>
										</div>
										<div class="col-md-4">
											<!-- <button type="submit" class="btn btn-default">返回我的二手书页面</button> -->
											<a href="<?php echo U('User/mybooks');?>"  class="btn btn-default" role="button">返回我的二手书页面</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					


				</div>
			<!-- </form> -->
			</div>
		</div>
	</div>
</div>

<script>
$('#input-1').fileinput({

	overwriteInitial:true,
	uploadUrl:"#",
	uploadAsync:true,
	maxFileCount:1,
	maxFileCount:5,
}

);

</script>


<script>
	$("#uploadImage").on("change", function(){
    // Get a reference to the fileList
    var files = !!this.files ? this.files : [];
  
    // If no files were selected, or no FileReader support, return
    if (!files.length || !window.FileReader) return;
  
    // Only proceed if the selected file is an image
    if (/^image/.test( files[0].type)){
  
        // Create a new instance of the FileReader
        var reader = new FileReader();
  
        // Read the local file as a DataURL
        reader.readAsDataURL(files[0]);
  
        // When loaded, set image data as background of div
        reader.onloadend = function(){
   
       $("#uploadPreview").css("background-image", "url("+this.result+")");
         
        }
  
    }
  
});
</script>

		
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
		<script type="text/javascript" src="/used/Public/Static/worthy/plugins/jquery.min.js"></script>
		<script type="text/javascript" src="/used/Public/Static/worthy/bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="/used/Public/Static/worthy/plugins/modernizr.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="/used/Public/Static/worthy/plugins/isotope/isotope.pkgd.min.js"></script>
		
		<!-- Backstretch javascript -->
		<script type="text/javascript" src="/used/Public/Static/worthy/plugins/jquery.backstretch.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="/used/Public/Static/worthy/plugins/jquery.appear.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="/used/Public/Static/worthy/js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="/used/Public/Static/worthy/js/custom.js"></script>


		
	</body>
</html>