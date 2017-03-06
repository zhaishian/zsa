<!DOCTYPE html>
<html lang="en">
    <head>
		<title>@yield('title')</title>
        <link href="/type/home/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="/type/home/css/font-awesome.min.css" rel="stylesheet">
		<link href="/type/home/css/style.css" rel="stylesheet">
		<link href="/type/home/css/responsive.css" rel="stylesheet">
		<link href="/type/home/css/style2.css" rel="stylesheet">
    </head>   
	<body>
		<header class="header">
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-sm-3">
							<ul class="list-inline">
								<li><a href="/indexone" ><i ></i>网站首页</a></li>
							</ul>
						</div>
						<div class="col-sm-4">
							<!-- 顶部电话号与邮箱 -->
								
						</div>
						<div class="col-sm-5">
							<!-- 未登录状态 -->
							<ul class="list-inline pull-right">
								<li><a href="#" ><i ></i> 你好,请登录 </a></li>
								<li><a class="register" href="#" >免费注册</a></li>
								<li><a href="#" ><i class="fa fa-heart-o"></i> 购物车 (0)</a></li>
								<li><a href="#" ><i class="fa fa-file-o"></i> 我的订单 (0)</a></li>
							</ul>	
						</div>	
					</div>	
				</div>
			</div>




			<div class="logo-add">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class="logo"><i class="fa fa-diamond"></i>自由派</div>
						</div>
						<div class="col-sm-8">
							<h3 class="add bb-year-end-ribbon hidden-xs"><img src="/uploads/goods/sift.png" width="40px;" alt="" /> 
							<span>我们可以<span> 帮 </span>到您</span> <button class="btn btn-default">  GO </button></h3>
						</div>
					</div>
				</div>
			</div>




			<!-- 未登录的导航 -->
			<div class="header-bottom">
				<div class="row">
					<div class="col-sm-12">
						<nav class="navbar navbar-default">
							<div class="container">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-bottom" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<!-- 导航条 -->
								<div class="collapse navbar-collapse" id="header-bottom">
									<ul class="nav navbar-nav">
										<li class="active"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">商品分类</a></span>
											<ul class="dropdown-menu">
												<li><a href="#">笔记本</a></li>
												<li><a href="#">台式机</a></li>
												<li><a href="#">游戏本</a></li>
												<li><a href="#">一体机</a></li>
											</ul>	
										</li>
										
										<li><a href="/indexone/browse-grid">所有商品</a></li>
										<li><a href="#">最新上市</a> <span class="label label-info text-center hidden-xs">New <i class="fa fa-caret-right"></i></span></li>
										<li><a href="/indexone/store">线下分店</a> 
										<li><a href="#">加入我们</a></li>
									</ul>
									<form class="navbar-form navbar-right" role="search" action="" method="post">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="搜索商品...">
											<span class="nav-search"><a href="#"><i class="fa fa-search"></i></a></span>
										</div>	
									</form>
								</div>
							</div>
						</nav>
					</div>	
				</div>	
			</div>




		</header>
		@section('content')

		<!-- 主体内容 -->
		@show
		<footer>
		<!-- 小图轮播 -->
		<section class="sponsor">
			<div class="container">			
				<div id="sponsor" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="row">	
								<div class="col-sm-12">
									<ul class="list-inline text-center">
										<li><img class="" src="/uploads/join/1.gif" /></li>
										<li><img class="" src="/uploads/join/2.png" /></li>
										<li><img class="" src="/uploads/join/3.png" /></li>
										<li><img class="" src="/uploads/join/4.png" /></li>
										<li><img class="" src="/uploads/join/5.png" /></li>
										<li><img class="" src="/uploads/join/6.png" /></li>
										<li><img class="" src="/uploads/join/7.png" /></li>
										<li><img class="" src="/uploads/join/8.png" /></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">	
								<div class="col-sm-12">
									<ul class="list-inline text-center">
										<li><img class="" src="/uploads/join/1.gif" /></li>
										<li><img class="" src="/uploads/join/2.png" /></li>
										<li><img class="" src="/uploads/join/3.png" /></li>
										<li><img class="" src="/uploads/join/4.png" /></li>
										<li><img class="" src="/uploads/join/5.png" /></li>
										<li><img class="" src="/uploads/join/6.png" /></li>
										<li><img class="" src="/uploads/join/7.png" /></li>
										<li><img class="" src="/uploads/join/8.png" /></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- 控制 -->
				<a class="control-left" href="#sponsor" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
				<a class="control-right" href="#sponsor" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
				</div>			
			</div>
		</section>	
		<!-- 友情链接 -->
		<section class="social-icons">
			<div class="container">			
				<div class="row">	
					<div class="col-sm-12">
						<ul class="list-inline text-center">
							<li><a href="#" ><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" ><i class="fa fa-spotify"></i></a></li>
							<li><a href="#" ><i class="fa fa-tumblr"></i></a></li>
							<li><a href="#" ><i class="fa fa-share-alt"></i></a></li>
							<li><a href="#" ><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" ><i class="fa fa-delicious"></i></a></li>
							<li><a href="#" ><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" ><i class="fa fa-dropbox"></i></a></li>
							<li><a href="#" ><i class="fa fa-soundcloud"></i></a></li>
							<li><a href="#" ><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#" ><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" ><i class="fa fa-github-alt"></i></a></li>
							<li><a href="#" ><i class="fa fa-skype"></i></a></li>
							<li><a href="#" ><i class="fa fa-stumbleupon"></i></a></li>
							<li><a href="#" ><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>	
			<div class="footer-bottom">
				<div class="container">		
					<div class="row">	
						<div class="col-sm-12 text-center">
							<p>Copyright 2015 made by <a href="#">Bootultra.com</a> & Disign by Shaifuddin. All Rights Reserved.</p>
							<ul class="list-inline center-block">
								<li><a href="#"><img src="/type/home/images/card-1.png"></a></li>
								<li><a href="#"><img src="/type/home/images/card-2.png"></a></li>
								<li><a href="#"><img src="/type/home/images/card-3.png"></a></li>
								<li><a href="#"><img src="/type/home/images/card-4.png"></a></li>
								<li><a href="#"><img src="/type/home/images/card-5.png"></a></li>
							</ul>
						</div>
					</div>
				</div>	
			</div>
		</footer>       
        <script src="/type/home/js/jquery.js"></script>
        <script src="/type/home/bootstrap/js/bootstrap.min.js"></script>
        <script src="/type/home/js/custom.js"></script>
    </body>
</html>