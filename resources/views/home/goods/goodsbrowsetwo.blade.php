@extends('home.common.commontwo')

@section('title','所有商品')

@section('content')
<section class="desktop-bar">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
			 	<h3>所有商品 <i class="fa fa-bars"></i></h3>
			</div>
			<div class="col-sm-8">
				<ol class="breadcrumb hidden-xs pull-right">
					<li><a href="#">主页</a></li>
					<li><a href="#">Shop</a></li>
					<li class="active"><a href="#">所有商品</a></li>
				</ol>
			</div>
		</div>
	</div>
</section>
		
		<!-- 左侧筛选 -->
<section class="featured-product recommented-product">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="sidebar">
				<!-- 价格筛选 -->
					<div class="well wedget">
					 	<strong>通过价格筛选</strong>
						<div class="heading-border b-color-6"></div>
						
						<div class="progress">
						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
							<span class="sr-only">此处是控制上面width的百分比</span>
						  </div>
						</div>
						
						<small>价格区间 :</small>
						<p>价钱 : <span>$260 - $980</span></p>
						
						<a class="btn btn-default btn-block" href="#">立刻筛选</a>
					</div>
				<!-- 品牌筛选 -->
					<div class="well wedget">
					 	<strong>通过品牌</strong>
						<div class="heading-border b-color-6"></div>
						
						 <ul class="check-box">
							<li>
								<div class="btn-group" data-toggle="buttons">
									<label class="btn btn-primary active">
										<input type="checkbox" autocomplete="off" checked><i class="fa fa-check"></i>
									</label>华硕 - <span class="pull-right">846</span>
								</div>
							 </li>
							 <li>
								<div class="btn-group" data-toggle="buttons">
									<label class="btn btn-primary active">
										<input type="checkbox" autocomplete="off" checked><i class="fa fa-check"></i>
									</label>惠普 - <span class="pull-right">789</span>
								</div>
							 </li>
							  <li>
								<div class="btn-group" data-toggle="buttons">
									<label class="btn btn-primary active">
										<input type="checkbox" autocomplete="off" checked><i class="fa fa-check"></i>
									</label>苹果 - <span class="pull-right">313</span>
								</div>
							 </li>
							  <li>
								<div class="btn-group" data-toggle="buttons">
									<label class="btn btn-primary active">
										<input type="checkbox" autocomplete="off" checked><i class="fa fa-check"></i>
									</label>戴尔 - <span class="pull-right">452</span>
								</div>
							 </li>
							  <li>
								<div class="btn-group" data-toggle="buttons">
									<label class="btn btn-primary active">
										<input type="checkbox" autocomplete="off" checked><i class="fa fa-check"></i>
									</label>宏基 - <span class="pull-right">46</span>
								</div>
							 </li>
						</ul>
						<a class="btn btn-default btn-block" href="#">立刻筛选</a>
					</div>
				<!-- 特价优惠 -->
					<div class="well wedget footer-top">
					 	<strong>特价优惠</strong>
						<div class="heading-border b-color-6"></div>
						<ul class="media-list">
						<!-- 遍历 -->
							<li class="media">
								<div class="media-left"><img src="/uploads/goods/sale.jpg" alt=""></div>
								<div class="media-body">
									<p class="media-heading">商品名</p>
									<div class="category">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i> 
										<i class="fa fa-star"></i> 
										<i class="fa fa-star"></i> 
										<i class="fa fa-star-o"></i>
									</div>
									<strong>$899.99</strong>
								</div>
							</li>
							<li class="media">
								<div class="media-left"><img src="/uploads/goods/sale.jpg" alt=""></div>
								<div class="media-body">
									<p class="media-heading">商品名</p>
									<div class="category">
									<!-- 星级 字体 -->
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i> 
										<i class="fa fa-star"></i> 
										<i class="fa fa-star"></i> 
										<i class="fa fa-star-o"></i>
									</div>
									<strong>$899.99</strong>
								</div>
							</li>
						</ul>
					</div>
					
					<!-- 主打商品 -->
					<div class="well wedget footer-top">
					 	<strong>主打商品</strong>
						<div class="heading-border b-color-6"></div>
						<ul class="media-list">
						<!-- 遍历 -->
							<li class="media">
								<div class="media-left"><img src="/uploads/goods/sale.jpg" alt=""></div>
								<div class="media-body">
									<p class="media-heading">商品名</p>
									<div class="category">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i> 
										<i class="fa fa-star"></i> 
										<i class="fa fa-star"></i> 
										<i class="fa fa-star-o"></i>
									</div>
									<strong>$899.99</strong>
								</div>
							</li>
							
						</ul>
					</div>
					
				</div> 
			</div>
			<!-- 右侧商品列表 -->
			<div class="col-sm-9">
			<!-- 一个小的轮播图 -->
				<div class="row">
				 	<div class="col-sm-12">
				 		<div id="desk-slide" class="carousel slide" data-ride="carousel">
				 			<div class="carousel-inner" role="listbox">
				 				<!-- 遍历 -->
				 				<!-- 第一个商品的展示 -->
				 				<div class="item active">
				 					<div class="row">
				 						<div class="col-sm-8">
				 							<h2>商品的醒目标题</h2>
				 							<a class="btn btn-default" href="#">立即购买</a>
				 						</div>
				 						<div class="col-sm-4">
				 							<img class="img-responsive" src="/uploads/goods/slide.png" alt="" />
				 						</div>
				 					</div>
				 				</div>
				 				<!-- 第二个商品的展示 -->
				 				<div class="item">
				 					<div class="row">
				 						<div class="col-sm-8">
				 							<h2>商品的醒目标题</h2>
				 							<a class="btn btn-default" href="#">立即购买</a>
				 						</div>
				 						<div class="col-sm-4">
				 							<img class="img-responsive" src="/uploads/goods/slide.png" alt="" />
				 						</div>
				 					</div>
				 				</div>
				 			</div>
				 			<!-- 左右控制 -->
				 			<a class="left carousel-control" href="#desk-slide" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
				 			<a class="right carousel-control" href="#desk-slide" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
				 		</div>
				 	</div>
				</div> 
				
				<!-- 列表展示 -->
				<div class="slide-desktop">
					<div class="row">
						<div class="col-sm-12">
							<div class="row">
								<div class="col-sm-12">
									<h1><span class="t-color-6">商品列表</span></h1>
									<div class="heading-border b-color-6"></div>
								</div>
							</div> 
							<div class="row hidden-xs">
								<div class="col-sm-12">
									<nav class="navbar navbar-default desk-nav">
										<div class="navbar-header">
											<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#desktop" aria-expanded="false">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>

										<div class="collapse navbar-collapse" id="desktop">
											<div class="navbar-form nav navbar-nav navbar-left">
												
												<!-- 这两处随便定 -->
												<div class="selection"> Sort by
													<select class="form-control">
														<option>Position</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
													<i class="fa fa-long-arrow-up"></i>
												</div>

												<div class="selection"> Show
													<select class="form-control ">
														<option>12 Per Page</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
												</div>	
											</div>	

											<ul class="nav navbar-nav navbar-right">
												<!-- 这里是两个页面 grid是格子样式  list是列表样式-->
												<li class="active"><a href="#"><i class="fa fa-th"></i> 格子</a></li>
												<li class="active"><a href="#"><i class="fa fa-th-list"></i> 列表</a></li>
											</ul>
										</div>
									</nav>
								</div>
							</div>	
						</div>
					</div>
				<!-- 两种展示方式 -->
					@section('shower')
						

					@show
				
				</div> 

				<!-- 分页 -->
				<nav>
					<ul class="pagination">
						<li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</section>
		
		
		
		
@endsection

