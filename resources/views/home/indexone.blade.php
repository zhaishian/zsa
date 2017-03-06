@extends('home.common.commonone')

@section('title','首页')

@section('content')
		<!-- 轮播图 -->
		<section class="home">
			<div class="intro">
				<div id="home" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#home" data-slide-to="0" class="active"></li>
						<li data-target="#home" data-slide-to="1"></li>
						<li data-target="#home" data-slide-to="2"></li>
						<li data-target="#home" data-slide-to="3"></li>
						<li data-target="#home" data-slide-to="4"></li>
						<li data-target="#home" data-slide-to="5"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="container">
								<div class="row">
									<div class="col-sm-7">
										<div class="intro-content">
											<h1>标题</h1>
											<h2>商品 <span class="highlight">打折Sale</span></h2>
											<p>商品信息与打折信息</p>
											<a class="btn btn-default">查看</a>
										</div>
									</div>
									<div class="col-sm-5">
										<img class="img-responsive" src="/uploads/poster/2.png" height="742" alt="" />
									</div>	
								</div>	
							</div>	
						</div>
						<div class="item">
							<div class="container">
								<div class="row">
									<div class="col-sm-7">
										<div class="intro-content">
											<h1>标题</h1>
											<h2>商品 <span class="highlight">打折Sale</span></h2>
											<p>商品信息与打折信息</p>
											<a class="btn btn-default">查看</a>
										</div>
									</div>
									<div class="col-sm-5">
										<img class="img-responsive" src="/uploads/poster/2.png" height="742" alt="" />
									</div>	
								</div>	
							</div>	
						</div>
						<div class="item">
							<div class="container">
								<div class="row">
									<div class="col-sm-7">
										<div class="intro-content">
											<h1>标题</h1>
											<h2>商品 <span class="highlight">打折Sale</span></h2>
											<p>商品信息与打折信息</p>
											<a class="btn btn-default">查看</a>
										</div>
									</div>
									<div class="col-sm-5">
										<img class="img-responsive" src="/uploads/poster/2.png" height="742" alt="" />
									</div>	
								</div>	
							</div>	
						</div>
						<div class="item">
							<div class="container">
								<div class="row">
									<div class="col-sm-7">
										<div class="intro-content">
											<h1>标题</h1>
											<h2>商品 <span class="highlight">打折Sale</span></h2>
											<p>商品信息与打折信息</p>
											<a class="btn btn-default">查看</a>
										</div>
									</div>
									<div class="col-sm-5">
										<img class="img-responsive" src="/uploads/poster/2.png" height="742" alt="" />
									</div>	
								</div>	
							</div>	
						</div>
					</div>
					<!-- 轮播图 两侧 按钮 -->
					<a class="left carousel-control" href="#home" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
					<a class="right carousel-control" href="#home" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
				</div>
			</div>
		</section>	
		
       
		
		<!-- 总体推荐商品-->
		<section class="featured-product">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
					<!-- 推荐商品轮播 -->
						<div class="">
							<h1><span class="t-color-1">热销商品</span>
								
							</h1>
							<div class="heading-border b-color-1"></div>
						</div>
					</div>
				</div> 
				<!-- 轮播开始 -->
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- 推荐商品的 两个按钮 -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active">
							<i class="fa fa-angle-left"></i>
						</li>
						<li data-target="#carousel-example-generic" data-slide-to="1">
							<i class="fa fa-angle-right"></i>
						</li>
					</ol>
					<!-- 商品轮播 -->
					<div class="carousel-inner" role="listbox">
						<!-- 第一排轮播 -->
						<div class="item active">
							<div class="row">
							<!-- 第一张商品简介 -->
								<div class="col-sm-3">
									<div class="thumbnail">
										<!--span class="e-label"><div>Sale</div></span-->
										<span class="service-link text-center">
											<img class="img-responsive" src="/uploads/goods/sell.jpg" alt="">
											<div class="list-inline">
												<a href=""><i class="fa fa-eye"></i></a>
												<a href=""><i class="fa fa-link"></i></a>
											</div>
										</span>
										<div class="caption">
											<div class="category"> 商品名
												<div class="pull-right">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<!-- 商品星级 -->
												</div>
											</div>
											<h3>商品介绍</h3>
											<strong>商品价格</strong>
											<div><a href="#" class="btn btn-default" role="button">加到购物车</a><span class="pull-right"><i class="fa fa-heart-o"></i> 收藏商品</span></div>
										</div>
									</div>
								</div>
							<!-- 第二张商品简介 -->
								<div class="col-sm-3">
									<div class="thumbnail">
										<!--span class="e-label"><div>Sale</div></span-->
										<span class="service-link text-center">
											<img class="img-responsive" src="/uploads/goods/sell.jpg" alt="">
											<div class="list-inline">
												<a href=""><i class="fa fa-eye"></i></a>
												<a href=""><i class="fa fa-link"></i></a>
											</div>
										</span>
										<div class="caption">
											<div class="category"> 商品名
												<div class="pull-right">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<!-- 商品星级 -->
												</div>
											</div>
											<h3>商品介绍</h3>
											<strong>商品价格</strong>
											<div><a href="#" class="btn btn-default" role="button">加到购物车</a><span class="pull-right"><i class="fa fa-heart-o"></i> 收藏商品</span></div>
										</div>
									</div>
								</div>
							<!-- 第三张商品简介 -->
								<div class="col-sm-3">
									<div class="thumbnail">
										<!--span class="e-label"><div>Sale</div></span-->
										<span class="service-link text-center">
											<img class="img-responsive" src="/uploads/goods/sell.jpg" alt="">
											<div class="list-inline">
												<a href=""><i class="fa fa-eye"></i></a>
												<a href=""><i class="fa fa-link"></i></a>
											</div>
										</span>
										<div class="caption">
											<div class="category"> 商品名
												<div class="pull-right">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<!-- 商品星级 -->
												</div>
											</div>
											<h3>商品介绍</h3>
											<strong>商品价格</strong>
											<div><a href="#" class="btn btn-default" role="button">加到购物车</a><span class="pull-right"><i class="fa fa-heart-o"></i> 收藏商品</span></div>
										</div>
									</div>
								</div>
							<!-- 第四张商品简介 -->
								<div class="col-sm-3">
									<div class="thumbnail">
										<!--span class="e-label"><div>Sale</div></span-->
										<span class="service-link text-center">
											<img class="img-responsive" src="/uploads/goods/sell.jpg" alt="">
											<div class="list-inline">
												<a href=""><i class="fa fa-eye"></i></a>
												<a href=""><i class="fa fa-link"></i></a>
											</div>
										</span>
										<div class="caption">
											<div class="category"> 商品名
												<div class="pull-right">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<!-- 商品星级 -->
												</div>
											</div>
											<h3>商品介绍</h3>
											<strong>商品价格</strong>
											<div><a href="#" class="btn btn-default" role="button">加到购物车</a><span class="pull-right"><i class="fa fa-heart-o"></i> 收藏商品</span></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- 第二排轮播 -->
						<div class="item">
							<div class="row">
								<div class="col-sm-3">
									<div class="thumbnail">
										<!--span class="e-label"><div>Sale</div></span-->
										<span class="service-link text-center">
											<img class="img-responsive" src="/uploads/goods/sell.jpg" alt="">
											<div class="list-inline">
												<a href=""><i class="fa fa-eye"></i></a>
												<a href=""><i class="fa fa-link"></i></a>
											</div>
										</span>
										<div class="caption">
											<div class="category"> 商品名
												<div class="pull-right">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<!-- 商品星级 -->
												</div>
											</div>
											<h3>商品介绍</h3>
											<strong>商品价格</strong>
											<div><a href="#" class="btn btn-default" role="button">加到购物车</a><span class="pull-right"><i class="fa fa-heart-o"></i> 收藏商品</span></div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="thumbnail">
										<!--span class="e-label"><div>Sale</div></span-->
										<span class="service-link text-center">
											<img class="img-responsive" src="/uploads/goods/sell.jpg" alt="">
											<div class="list-inline">
												<a href=""><i class="fa fa-eye"></i></a>
												<a href=""><i class="fa fa-link"></i></a>
											</div>
										</span>
										<div class="caption">
											<div class="category"> 商品名
												<div class="pull-right">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<!-- 商品星级 -->
												</div>
											</div>
											<h3>商品介绍</h3>
											<strong>商品价格</strong>
											<div><a href="#" class="btn btn-default" role="button">加到购物车</a><span class="pull-right"><i class="fa fa-heart-o"></i> 收藏商品</span></div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="thumbnail">
										<!--span class="e-label"><div>Sale</div></span-->
										<span class="service-link text-center">
											<img class="img-responsive" src="/uploads/goods/sell.jpg" alt="">
											<div class="list-inline">
												<a href=""><i class="fa fa-eye"></i></a>
												<a href=""><i class="fa fa-link"></i></a>
											</div>
										</span>
										<div class="caption">
											<div class="category"> 商品名
												<div class="pull-right">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<!-- 商品星级 -->
												</div>
											</div>
											<h3>商品介绍</h3>
											<strong>商品价格</strong>
											<div><a href="#" class="btn btn-default" role="button">加到购物车</a><span class="pull-right"><i class="fa fa-heart-o"></i> 收藏商品</span></div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="thumbnail">
										<!--span class="e-label"><div>Sale</div></span-->
										<span class="service-link text-center">
											<img class="img-responsive" src="/uploads/goods/sell.jpg" alt="">
											<div class="list-inline">
												<a href=""><i class="fa fa-eye"></i></a>
												<a href=""><i class="fa fa-link"></i></a>
											</div>
										</span>
										<div class="caption">
											<div class="category"> 商品名
												<div class="pull-right">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<!-- 商品星级 -->
												</div>
											</div>
											<h3>商品介绍</h3>
											<strong>商品价格</strong>
											<div><a href="#" class="btn btn-default" role="button">加到购物车</a><span class="pull-right"><i class="fa fa-heart-o"></i> 收藏商品</span></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	
		</section>	




		<!-- 醒目 一条 -->
		<section class="special-price">
			<div class="price-intro">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="pull-left">
								<blockquote>
								<h1> 商品名</h1>
								<p>商品简介</p>
								</div>
								</blockquote>
							<div class="pull-right"><a class="btn btn-default btn-lg"> 点击进入</a>
							</div> 
						</div>
					</div> 

				</div>
			</div>
		</section>	






		<!-- 三图 -->
		<section class="emarket-adds">
			<div class="container">
				<div class="row">
					<!-- 此处遍历三个 -->
					<div class="col-sm-4">
						<div class="single-add">
							<h4>Get <span>50%</span> Discount</h4>
							<a href="#" class="btn btn-default" role="button">Go</a>
							<span class="img-add"><img src="/uploads/goods/sift.png" alt="" /></span>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="single-add">
							<h4>Get <span>50%</span> Discount</h4>
							<a href="#" class="btn btn-default" role="button">Go</a>
							<span class="img-add"><img src="/uploads/goods/sift.png" alt="" /></span>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="single-add">
							<h4>Get <span>50%</span> Discount</h4>
							<a href="#" class="btn btn-default" role="button">Go</a>
							<span class="img-add"><img src="/uploads/goods/sift.png" alt="" /></span>
						</div>
					</div>
					
				</div>
			</div>
		</section>	
		
		<!-- 一页两个 人气 -->

		<section class="best-selling">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1><span class="t-color-2">人气商品</span> 抢购中
							
						</h1>
						<div class="heading-border b-color-2"></div>
					</div>
				</div> 
				<div id="best-selling" class="carousel slide" data-ride="carousel">
				<!-- 两个按钮 -->
					<ol class="carousel-indicators">
						<li data-target="#best-selling" data-slide-to="0" class="active"><i class="fa fa-angle-left"></i></li>
						<li data-target="#best-selling" data-slide-to="1"><i class="fa fa-angle-right"></i></li>
					</ol>
					<div class="carousel-inner" role="listbox">
					<!-- 这是一页 -->
						<div class="item active">
							<div class="row">
							<!-- 一页两个商品 -->
								<div class="col-sm-6">
									<div class="media">
										<div class="media-left"><a href=""><img class="img-responsive" src="/uploads/goods/moods.jpg" alt=""></a></div>
										<div class="media-body">
											<div class="category"> 商品名
												<div class="pull-right">
												<!-- 星级 -->
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>

												</div>
											</div>
											<h3>商品简介</h3>
											<strong>商品价格</strong>
											<div>
												<a href="#" class="btn btn-default" role="button">加入购物车</a><span class="pull-right"><i class="fa fa-heart-o"></i> 收藏</span></div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="media">
										<div class="media-left"><a href=""><img class="img-responsive" src="/uploads/goods/moods.jpg" alt=""></a></div>
										<div class="media-body">
											<div class="category"> 商品名
												<div class="pull-right">
												<!-- 星级 -->
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>

												</div>
											</div>
											<h3>商品简介</h3>
											<strong>商品价格</strong>
											<div>
												<a href="#" class="btn btn-default" role="button">加入购物车</a><span class="pull-right"><i class="fa fa-heart-o"></i> 收藏</span></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<!-- 第二页 -->
						<div class="item">
							<div class="row">
								<div class="col-sm-6">
									<div class="media">
										<div class="media-left"><a href=""><img class="img-responsive" src="/uploads/goods/moods.jpg" alt=""></a></div>
										<div class="media-body">
											<div class="category"> 商品名
												<div class="pull-right">
												<!-- 星级 -->
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>

												</div>
											</div>
											<h3>商品简介</h3>
											<strong>商品价格</strong>
											<div>
												<a href="#" class="btn btn-default" role="button">加入购物车</a><span class="pull-right"><i class="fa fa-heart-o"></i> 收藏</span></div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="media">
										<div class="media-left"><a href=""><img class="img-responsive" src="/uploads/goods/moods.jpg" alt=""></a></div>
										<div class="media-body">
											<div class="category"> 商品名
												<div class="pull-right">
												<!-- 星级 -->
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>

												</div>
											</div>
											<h3>商品简介</h3>
											<strong>商品价格</strong>
											<div>
												<a href="#" class="btn btn-default" role="button">加入购物车</a><span class="pull-right"><i class="fa fa-heart-o"></i> 收藏</span></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>	
		
		
			
		
@endsection

