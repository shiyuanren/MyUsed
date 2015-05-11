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
							<?php else: ?>
								Account<?php endif; ?>
								<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo U('Home/User/mybooks');?>">My UsedBooks</a></li>
							<li><a href="<?php echo U('Home/Goods/release');?>">Release Books</a></li>
							<li><a href="#">Account Settings</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo U('Home/User/logout');?>"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>Log Out</a></li>
						</ul>
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

		


	<link href="/MyUsed/Public/Static/fileinput/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css"/>



	 <script src="/MyUsed/Public/Static/jquery-2.1.3.min.js"></script>
	<script src="/MyUsed/Public/Js/release.js"></script>
 <link rel="stylesheet" type="text/css" href="/MyUsed/Public/Css/release.css">




	<script type="text/javascript" src="/MyUsed/Public/Static/jquery-2.1.3.min.js"></script>
<script src="/MyUsed/uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/MyUsed/uploadify/uploadify.css">

<script src="/MyUsed/Public/Static/fileinput/js/fileinput.min.js"></script>
	<script src="/MyUsed/Public/Static/fileinput/js/fileinput_locale_zh.js"></script>

<script src="/MyUsed/Public/Js/image.js"></script>


<script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadify({
				/*'formData'     : {
					'timestamp' : '<?php echo $timestamp;?>',
					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				},*/
				'swf'      : '/MyUsed/uploadify/uploadify.swf',
				'uploader' : 'uploadOne',
				'buttonText' : '缩略图上传',
				'onUploadSuccess' : function(file, data, response) {
					//alert(data);
            $('#img').attr('src','/MyUsed/Uploads/'+ data);
            $('#photo').val(data);
        }
			});
		});
	</script>

	</br></br></br>
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
						<!-- <form id="form-1" enctype="multipart/form-data" class="form-horizontal" action="<?php echo U('release');?>" method="post"> -->

							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-3">
										</br></br>
										<!-- <div class="form-group">
											<label for="inputEmail3" class="col-md-2 control-label"></br></br>小图</label>
											<div class="col-md-4">
												<div id="uploadPreview"></br></br></div>
												<input type="file" id="uploadImage" name="photoimage" class="fimg1" />
											</div>
										</div> -->

										<form>
											<div style="height:130xp;width:130px;border:1px solid #ddd">
												<img id="img" src="/MyUsed/Public/Img/no_image-100x100.jpg" width="130" height="130"  class="img-thumbnail" border="0" />
											</div>
												<input id="file_upload" name="file_upload" type="file" multiple="false" value="" />
										</form>

								</div>



								<div class="col-md-6">

<form id="form-1" enctype="multipart/form-data" class="form-horizontal" action="<?php echo U('release');?>" method="post">
									<input type="hidden" name="photo" id="photo">

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

</form>


							</div>
						<!-- </form> -->
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
								<input type="text" name="wechat" class="form-control" id="inputEmail3" placeholder="wechat">
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
											<input type="hidden" name="product_id" id="product_id">
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