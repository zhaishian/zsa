@extends('home.common.commonone')

@section('title','商品详情页')


@section('content')
		<section class="desktop-bar">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
					 <h3>商品详情 <i class="fa fa-bars"></i></h3>
					</div>
					<div class="col-sm-8">
						<ol class="breadcrumb hidden-xs pull-right">
						<!-- 此处可以是分类遍历 -->
							<li><a href="#"> 所有商品</a></li>
							<li><a href="#">Shop</a></li>
							<li class="active"><a href="#">商品详情</a></li>
						</ol>
					</div>
				</div>
			</div>
		</section>



		<section class="desk-com">
			<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<div data-ride="carousel" class="carousel slide" id="pro-img">
							<div role="listbox" class="carousel-inner">
								<div class="item"><img alt="" src="/uploads/goods/2.jpg"></div>
								<div class="item active"><img alt="" src="/uploads/goods/2.jpg"></div>
								<div class="item"><img alt="" src="/uploads/goods/2.jpg"></div>
							</div>
							<a data-slide="prev" role="button" href="#pro-img" class="left carousel-control"><i class="fa fa-angle-left"></i></a>
							<a data-slide="next" role="button" href="#pro-img" class="right carousel-control"><i class="fa fa-angle-right"></i></a>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="pro-details">
							<p class="category">分类</p>
							<h2>商品名字</h2>
							<ul class="list-inline rate-stock">
								<li><i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</li>
								<li>4 综合评价 / 写入你的评价 </li>
								<li>库存 : 有货</li>
							</ul>
							<ul class="list-inline wish-email">
								<li><i class="fa fa-heart-o"></i> 加入收藏</li>
								<li><i class="fa fa-file-o"></i> 加入对比</li>
								<li><i class="fa fa-envelope-o"></i> 分享</li>
							</ul>
							<p>简介</p>
							<div class="currency">现价 <span>原价</span></div>
							<div class="add-cart"><a herf="#" class="btn btn-default">加入购物车</a></div>
							<p class="tags">标签 :  <a href="#">笔记本电脑</a>, <a href="#">台式</a>, <a href="#">标签内容</a>, <a href="#">标签内容</a>, <a href="#">标签内容</a></p>
							<ul class="list-inline p-d-social">
								<li>分享 : </li>
								<li><i class="fa fa-flickr"></i></li>
								<li><i class="fa fa-pinterest-square"></i></li>
								<li><i class="fa fa-facebook-square"></i></li>
								<li><i class="fa fa-twitter-square"></i></li>
								<li><i class="fa fa-linkedin-square"></i></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="desk-com">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="description">
							<!-- Nav tabs -->
							<ul role="tablist" class="nav nav-tabs">
								<li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="home" href="#description">商品详情</a></li>
								<li role="presentation"><a data-toggle="tab" role="tab" aria-controls="profile" href="#additional-info">参数</a></li>
								<li role="presentation"><a data-toggle="tab" role="tab" aria-controls="messages" href="#reviews">评论(4)</a></li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<div id="description" class="tab-pane active" role="tabpanel">
									<h2>商品的特点</h2>
									<p>介绍商品的特点</p>

									<ul class="list-ver">
										
										<li><i class="fa fa-check"></i>优点</li>
										<li><i class="fa fa-check"></i>优点</li>
										<li><i class="fa fa-check"></i>优点</li>
										<li><i class="fa fa-check"></i>优点</li>
										<li><i class="fa fa-check"></i>优点</li>
									</ul>
									<p></p>
								</div>
								<div id="additional-info" class="tab-pane" role="tabpanel">
									<h2>商品的更多信息</h2>
									<p>更多信息</p>
									<ul class="list-ver">
										<li><i class="fa fa-check"></i>更多信息</li>
										<li><i class="fa fa-check"></i>更多信息</li>
										<li><i class="fa fa-check"></i>更多信息</li>
										<li><i class="fa fa-check"></i>更多信息</li>
										<li><i class="fa fa-check"></i>更多信息</li>
										<li><i class="fa fa-check"></i>更多信息</li>
									</ul>
									<p> </p>

								</div>
								<div id="reviews" class="tab-pane" role="tabpanel">
									<h2>评论</h2>
									<p>Lorem ipsum dolor sit amet, no mea aeterno indoctum percipitur. Homero quaerendum ius ei. In pro decore tamquam 									appetere, ea mentitum mediocrem efficiantur quo. Quo no assentior conclusionemque. Qui cu ceteros accusata. Partem 									utamur explicari eos at. Ad brute veritus theophrastus vis, an quo mutat voluptaria mnesarchum, eum impetus numquam 								intellegam in. Eu alii oratio aliquip mea, eum inani tantas ex. In sit vidit eirmod, ceteros reprimique sit cu, 								    facilisis assueverit disputationi ad est.</p>

									<ul class="list-ver">
										<li><i class="fa fa-check"></i>Mutat voluptaria mnesarchum impetus</li>
										<li><i class="fa fa-check"></i>Mutat voluptaria mnesarchum impetus</li>
										<li><i class="fa fa-check"></i>Mutat voluptaria mnesarchum impetus</li>
										<li><i class="fa fa-check"></i>Mutat voluptaria mnesarchum impetus</li>
										<li><i class="fa fa-check"></i>Mutat voluptaria mnesarchum impetus</li>
										<li><i class="fa fa-check"></i>Mutat voluptaria mnesarchum impetus</li>
									</ul>
									<p></p>

								</div>
							</div>
							<nav>
							  	<ul class="pager">
									<li class="previous"><a href="#"><span aria-hidden="true">←</span> 上一个</a></li>
									<!-- 查看该分类的商品 -->
									<li class="center-block"><a href="#"><i class="fa fa-th"></i></a></li>
									<li class="next"><a href="#">下一个 <span aria-hidden="true">→</span></a></li>
							  	</ul>
							</nav>
							
						</div>
					</div>
				</div>
			</div>
		</section>

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


		
@endsection

