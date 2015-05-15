<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <!-- <link rel="shortcut icon" href="../favicon.ico"> -->

        <link rel="stylesheet" href="/MyUsed/Public/Static/bootstrap/css/bootstrap.css">
        <script src="/MyUsed/Public/Static/jquery-2.1.3.min.js"></script>
        <script src="/MyUsed/Public/Static/bootstrap/js/bootstrap.min.js"></script>


        <link rel="stylesheet" type="text/css" href="/MyUsed/Public/Static/login/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="/MyUsed/Public/Static/login/css/style2.css" />
		<link rel="stylesheet" type="text/css" href="/MyUsed/Public/Static/login/css/animate-custom.css" />
    </head>
    <body>
        <div class="container">

            <header>

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
                  			<li><a href="<?php echo U('Home/User/mybooks');?>">My Books</a></li>
                  			<!-- <li><a href="#contact">Contact</a></li> -->
                  			<li  class="active"><a href="<?php echo U('Home/User/login');?>">Sign In</a></li>
                  			<li><a href="#"></a></li>

                        <li class="dropdown">
                  					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  						<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                  						<?php if(!empty($_SESSION['user_name'])): echo (session('user_name')); ?>
                  						<?php else: ?>
                  							Account<?php endif; ?>
                  							<span class="caret"></span></a>
                  					<ul class="dropdown-menu" role="menu">
                  						<li class="disabled"><a href="#">My UsedBooks</a></li>
                  						<li class="disabled"><a href="#">Release Books</a></li>
                  						<li class="disabled"><a href="#">Account Settings</a></li>
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

            </br></br>
            </header>
            <section>

                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            </br></br>
                            <form  id="login-form" method="post" autocomplete="on">
                                <h1>Log in</h1>
                                <p>
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p>
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />
                                </p>
                                <p class="keeplogin">
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button">
                                    <input id='btn' type="button" value="Login" />
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  id="register-form" method="post" action="<?php echo U('register');?>" autocomplete="on">
                                <h1> Sign up </h1>
                                <p>
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p>
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="email" required="required" type="email" placeholder="mysupermail@mail.com"/>
                                </p>
                                <p>
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="pwd" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p>
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="repwd" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button">
									<input  type="submit" value="Sign up"/>
								</p>
                                <p class="change_link">
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </body>


<script>
$(function(){

    $('#btn').click(function(){
        var user_info = $('#login-form').serialize();
        $.post('login',user_info,function(data){
            if(data.status=='0'){
                alert(data.msg);
            }else{
                 window.location.href=data.url;
            }


        });
    })

     $('#signup-btn').click(function(){
        var signup_info = $('#register-form').serialize();
        $.post('register',signup_info,function(data){
            if(data.status=='0'){
                alert(data.msg);
            }else{
                 window.location.href=data.url;
            }


        });
    })

})
</script>
</html>