<?php if (!defined('THINK_PATH')) exit();?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>后台管理系统</title>
		<link rel="stylesheet" href="/MyUsed/Public/Static/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="/MyUsed/Public/Css/admin.css">
		<script src="/MyUsed/Public/Static/jquery-2.1.3.min.js"></script>
		<script src="/MyUsed/Public/Static/bootstrap/js/bootstrap.min.js"></script>
	</head>

	<body>

	<div class="row head">
		
			<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#">99Mi</a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        <li class="active"><a href="<?php echo U('Admin/User/index');?>">会员 <span class="sr-only">(current)</span></a></li>
			        <li><a href="<?php echo U('Goods/lists');?>">商品</a></li>
			        <li><a href="#">广告</a></li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">设置 <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			            <li><a href="#">Action</a></li>
			            <li><a href="#">Another action</a></li>
			            <li><a href="#">Something else here</a></li>
			            <li class="divider"></li>
			            <li><a href="#">Separated link</a></li>
			            <li class="divider"></li>
			            <li><a href="#">One more separated link</a></li>
			          </ul>
			        </li>
			      </ul>
			     
			      <ul class="nav navbar-nav navbar-right">
			        <li><a href="#">后台管理系统</a></li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">用户 <span class="caret"></span></a>

			          <ul class="dropdown-menu" role="menu">
			            <li><a href="#">张三</a></li>
			            <li class="divider"></li>
			            <li><a href="#">退出</a></li>
			          </ul>
			        </li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		
	</div>

	<div class="container-fluid  middle">
		<div class="row">
			<div class="pull-left col-md-2 left">
				
					左侧功能栏
				
			</div>
			

			<div class="pull-right col-md-10 right">
				
    <div class="inner">
        <div class="row">
            <div class="col-lg-8">
                <h2> 会员管理 </h2>
			</div>

			<div class="col-lg-4">
			</br>
				<form role="form" id='register_form' action="<?php echo U('User/detail');?>" method='post'>
				<div><input type="search" name="search_user" placeholder="昵称"/> &nbsp;&nbsp;&nbsp;<button type="submit" >查找</button></div>
				
				</form>
			</div>
        </div>

                <hr />
    	<div class="row">
		    <div class="col-lg-12">
		        <div class="box">
		            <header class="dark">
		                <div class="icons"><i class="icon-cloud-upload"></i></div>
		                <h5>会员列表</h5>
		            </header>
		            <div class="body">
		    			<table class="table table-striped table-hover">
		<thead>
			<th>Uid</th>
			<th>用户名</th>
			<th>IP</th>
			<th>创建时间</th>
			<th>最后登录时间</th>
			<th>操作</th>
		</thead>
		<tbody>
			<?php if(is_array($user_list["lists"])): foreach($user_list["lists"] as $key=>$ul): ?><tr>
				<td><?php echo ($ul["id"]); ?></td>
				<td><?php echo ($ul["uname"]); ?></td>
				<td><?php echo ($ul["ip"]); ?></td>
				<td><?php echo (date("Y-m-d H:i:s",$ul["create_time"])); ?></td>
				<td><?php echo (date("Y-m-d H:i:s",$ul["last_time"])); ?></td>
				<td>
					<a href="<?php echo U('User/detail',array('id'=>$ul['id']));?>">查看</a>
					<a href="<?php echo U('User/edit',array('id'=>$ul['id']));?>">编辑</a> 
					<a href="<?php echo U('User/delete',array('id'=>$ul['id']));?>">删除</a></td>
			</tr><?php endforeach; endif; ?>
		</tbody>
		<tfoot>
			<th colspan="6"><?php echo ($user_list["page"]); ?></th>
		</tfoot>
	</table>
		            </div>
		        </div>
		    </div>
        </div>
    </div>

         <!--END PAGE CONTENT -->


			</div>

		</div>
	</div>


		
		<div class="container-fluid foot">
		  <div class="row">
		  	
		    	底部版权声明...
		    
		  </div>
		</div>
	</body>
</html>