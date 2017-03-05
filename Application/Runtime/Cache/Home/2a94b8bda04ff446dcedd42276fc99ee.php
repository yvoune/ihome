<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Real Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<title><?php echo ($title); ?></title>
	<link href="/bishe/Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="/bishe/Public/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<link href="/bishe/Public/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="/bishe/Public/css/styles.css" rel="stylesheet">
	
	<script src="/bishe/Public/js/jquery.min.js"></script>
	<script src="/bishe/Public/js/scripts.js"></script>
	<script src="/bishe/Public/js/jquery.magnific-popup.js" type="text/javascript"></script>
	<script src="/bishe/Public/js/responsiveslides.min.js"></script>
	<script src="/bishe/Public/js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script>
		$(function () {
			$("#slider").responsiveSlides({
				auto: true,
				speed: 500,
				namespace: "callbacks",
				pager: true,
			});
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
		});
  </script>
</head>

<body>
	<!--header-->
	<div class="navigation">
		<div class="container-fluid">
			<nav class="pull">
				<ul>
					<li><a href="index.html">首页</a></li>
					<li><a href="about.html">关于我们</a></li>
					<li><a href="blog.html">博客</a></li>
					<li><a href="terms.html">条款</a></li>
					<li><a href="privacy.html">隐私</a></li>
					<li><a href="contact.html">联系我们</a></li>
				</ul>
			</nav>
		</div>
	</div>

	<div class="header">
		<div class="container">
			<!--logo-->
			<div class="logo">
				<h1><a href="index.html">iHOME</a></h1>
			</div>
			<!--//logo-->
			<div class="top-nav">
				<ul class="right-icons">
					<li><span><i class="glyphicon glyphicon-phone"> </i>+1384 757 546</span></li>
					<li><a href="login.html"><i class="glyphicon glyphicon-user"> </i>登录</a></li>
					<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a></li>
				</ul>
				<div class="nav-icon">
					<div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
						<a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i> </a>
					</div>
				</div>
				<div class="clearfix"> </div>
				<div id="small-dialog" class="mfp-hide">
					<!----- tabs-box ---->
					<div class="sap_tabs">
						<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
							<ul class="resp-tabs-list">
								<li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>全部</span></li>
								<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>出售</span></li>
								<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>出租</span></li>
								<div class="clearfix"></div>
							</ul>
							<div class="resp-tabs-container">
								<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>All Homes</h2>
								<div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
									<div class="facts">
										<div class="login">
											<input type="text" value="搜索地址，街区，城市或邮政编码" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search Address, Neighborhood, City or Zip';}">
											<input type="submit" value="">
										</div>
									</div>
								</div>
								<h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>For Sale</h2>
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="facts">
										<div class="login">
											<input type="text" value="搜索地址，街区，城市或邮政编码" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search Address, Neighborhood, City or Zip';}">
											<input type="submit" value="">
										</div>
									</div>
								</div>
								<h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>For Rent</h2>
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									<div class="facts">
										<div class="login">
											<input type="text" value="搜索地址，街区，城市或邮政编码" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search Address, Neighborhood, City or Zip';}">
											<input type="submit" value="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//-->



	<!--<!DOCTYPE html>
<html>
<head lang="zh">
	<title><?php echo ($title); ?></title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="/favicon.ico">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="/bishe/Public/bootstrap-3.3.0/css/bootstrap.min.css">
	 <link rel="stylesheet" href="/bishe/Public/css/home/headAndFoot.css">
	 <script src="/bishe/Public/js/jquery.1.11.1.min.js">	</script>
	 <script src="/bishe/Public/js/change.js" type="text/javascript" charset="utf-8"></script>
	 <script src="/bishe/Public/bootstrap-3.3.0/js/bootstrap.min.js">	</script>-->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>  
      <![endif]-->
<div class=" header-right">
	<div class=" banner">
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider">
					<li>
						<div class="banner2">
							<div class="caption">
								<h3><span>iHome</span>租房网</h3>
								<p>开启您的租房新旅程</p>
							</div>
						</div>
					</li>
					<li>
						<div class="banner3">
							<div class="caption">
								<h3><span>iHome</span>租房网</h3>
								<p>开启您的租房新旅程</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--header-bottom-->
<div class="banner-bottom-top">
	<div class="container">
		<div class="bottom-header">
			<div class="header-bottom">
				<div class=" bottom-head">
					<a href="<?php echo U('Index/shortRent');?>">
						<div class="buy-media">
							<i class="buy"> </i>
							<h6>短期租房</h6>
						</div>
					</a>
				</div>
				<div class=" bottom-head">
					<a href="longRent.html">
						<div class="buy-media">
							<i class="apart"> </i>
							<h6>长期租房</h6>
						</div>
					</a>
				</div>
				<div class=" bottom-head">
					<a href="<?php echo U('Index/publishing');?>">
						<div class="buy-media">
							<i class="rent"> </i>
							<h6>发布房源</h6>
						</div>
					</a>
				</div>
				<div class=" bottom-head">
					<a href="showRooms.html">
						<div class="buy-media">
							<i class="pg"> </i>
							<h6>房源展示</h6>
						</div>
					</a>
				</div>
				<div class=" bottom-head">
					<a href="buy.html">
						<div class="buy-media">
							<i class="sell"> </i>
							<h6>个人中心</h6>
						</div>
					</a>
				</div>
				<div class=" bottom-head">
					<a href="loan.html">
						<div class="buy-media">
							<i class="loan"> </i>
							<h6>联系与反馈</h6>
						</div>
					</a>
				</div>
				<div class=" bottom-head">
					<a href="dealers.html">
						<div class="buy-media">
							<i class="deal"> </i>
							<h6>帮助与服务</h6>
						</div>
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--//header-bottom-->

<!--//header-->
<!--content-->
<div class="content">
	<div class="content-grid">
		<div class="container">
			<h3>最受欢迎</h3>
			<?php if(is_array($homepopular_list)): $i = 0; $__LIST__ = $homepopular_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$homepopular_list): $mod = ($i % 2 );++$i;?><div class="col-md-4 box_2">
					<a href="<?php echo U('Index/room_detail',array(id=>$homepopular_list[id]));?>" class="mask">
						<img class="img-responsive zoom-img" src="/bishe/Public/<?php echo ($homepopular_list["imgsrc"]); ?>" alt="">
						<span class="four"><?php echo ($homepopular_list["price"]); ?></span>
					</a>
					<div class="most-1">
						<h5><a href="<?php echo U('Index/room_detail',array(id=>$homepopular_list[id]));?>"><?php echo ($homepopular_list["belongs"]); ?></a></h5>
						<p><?php echo ($homepopular_list["province"]); ?></p>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--service-->
	<div class="services">
		<div class="container">
			<div class="service-top">
				<h3>服务</h3>
				<p>倾尽我心，竭诚为您</p>
			</div>
			<div class="services-grid">
				<div class="col-md-6 service-top1">
					<div class=" ser-grid">
						<a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-user"> </a>
					</div>
					<div class="ser-top">
						<h4>可信赖的服务</h4>
						<p>iHome让分享变得简单、愉快、安全。我们验证用户的个人资料和房源信息，为房东和房客提供一个智能消息系统，让他们可以放心沟通，同时我们还提供一个值得信赖的收款和转款平台。</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 service-top1">
					<div class=" ser-grid">
						<a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-leaf"> </a>
					</div>
					<div class="ser-top">
						<h4>可信赖的服务</h4>
						<p>iHome让分享变得简单、愉快、安全。我们验证用户的个人资料和房源信息，为房东和房客提供一个智能消息系统，让他们可以放心沟通，同时我们还提供一个值得信赖的收款和转款平台。</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="services-grid">
				<div class="col-md-6 service-top1">
					<div class=" ser-grid">
						<a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-cog"> </a>
					</div>
					<div class="ser-top">
						<h4>可信赖的服务</h4>
						<p>iHome让分享变得简单、愉快、安全。我们验证用户的个人资料和房源信息，为房东和房客提供一个智能消息系统，让他们可以放心沟通，同时我们还提供一个值得信赖的收款和转款平台。</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 service-top1">
					<div class=" ser-grid">
						<a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-file"> </a>
					</div>
					<div class="ser-top">
						<h4>可信赖的服务</h4>
						<p>iHome让分享变得简单、愉快、安全。我们验证用户的个人资料和房源信息，为房东和房客提供一个智能消息系统，让他们可以放心沟通，同时我们还提供一个值得信赖的收款和转款平台。</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//services-->
	<!--project-->
	<div class="project">
		<div class="container">
			<h3>房屋画廊</h3>
			<div class="project-top">
				<?php if(is_array($gallery)): $i = 0; $__LIST__ = $gallery;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$gallery): $mod = ($i % 2 );++$i;?><div class="col-md-3 project-grid">
						<div class="project-grid-top">
							<a href="<?php echo U('Index/room_detail',array(id=>$gallery[id]));?>" class="mask">
								<img src="/bishe/Public/<?php echo ($gallery["imgsrc"]); ?>" class="img-responsive zoom-img" alt="" />
							</a>
							<div class="col-md1">
								<div class="col-md2">
									<div class="col-md3">
										<span class="star"><?php echo ($gallery["star"]); ?></span>
									</div>
									<div class="col-md4">
										<strong><?php echo ($gallery["province"]); ?></strong>
										<small><?php echo ($gallery["comment-quantity"]); ?>条评论</small>
									</div>
									<div class="clearfix"> </div>
								</div>
								<p><?php echo ($gallery["square"]); ?>平方</p>
								<p class="cost"><?php echo ($gallery["price"]); ?></p>
								<a href="<?php echo U('Index/room_detail',array(id=>$gallery[id]));?>" class="hvr-sweep-to-right more">查看详情</a>
							</div>
						</div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//project-->
	<!--感言-->
	<div class="content-bottom">
		<div class="container">
			<h3>感言</h3>
			<div class="col-md-6 name-in">
				<div class=" bottom-in">
					<p class="para-in">iHome提供的房子既漂亮又舒适，房东很nice，为我的旅途增添了不少色彩。</p>
					<i class="dolor"> </i>
					<div class="men-grid">
						<a href="#" class="men-top"><img class="img-responsive men-top" src="/bishe/Public/images/te.jpg" alt=""></a>
						<div class="men">
							<span>苏维安</span>
							<p>房客</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class=" bottom-in">
					<p class="para-in">iHome提供的房子既漂亮又舒适，房东很nice，为我的旅途增添了不少色彩。</p>
					<i class="dolor"> </i>
					<div class="men-grid">
						<a href="#" class="men-top"><img class="img-responsive " src="/bishe/Public/images/te2.jpg" alt=""></a>
						<div class="men">
							<span>皮特</span>
							<p>房客</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<div class="col-md-6  name-on">
				<div class="bottom-in ">
					<p class="para-in">自从在iHome上分布我的房源信息，我的房子有很多旅客在旅游时都会提前预定，有些甚至当长期租房来与我签租约。</p>
					<i class="dolor"> </i>
					<div class="men-grid">
						<a href="#" class="men-top"><img class="img-responsive " src="/bishe/Public/images/te1.jpg" alt=""></a>
						<div class="men">
							<span>匹克</span>
							<p>房东</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--footer-->
<div class="footer">
	<div class="container">
		<div class="footer-top-at">
			<div class="col-md-3 amet-sed">
				<h4>我们的公司</h4>
				<ul class="nav-bottom">
					<li><a href="about.html">关于我们</a></li>
					<li><a href="blog.html">网站博客</a></li>
					<li><a href="mobile_app.html">移动端下载</a></li>
					<li><a href="terms.html">服务条款</a></li>
					<li><a href="privacy.html">隐私政策</a></li>
				</ul>
			</div>
			<div class="col-md-3 amet-sed ">
				<h4>与我们合作</h4>
				<ul class="nav-bottom">
					<li><a href="single.html">联盟计划</a></li>
					<li><a href="contact.html">网站地图</a></li>
					<li><a href="career.html">职业生涯</a></li>
					<li><a href="feedback.html">反馈</a></li>
				</ul>
			</div>
			<div class="col-md-3 amet-sed">
				<h4>客户支持</h4>
				<p>周一~周五, 7AM-7PM </p>
				<p>周六~周日, 8AM-5PM </p>
				<p>177-869-6559</p>
				<ul class="nav-bottom">
					<li><a href="faqs.html">常见问题</a></li>
					<li><a href="suggestion.html">意见反馈</a></li>
				</ul>
			</div>
			<div class="col-md-3 amet-sed ">
				<h4>Property Services</h4>
				<ul class="nav-bottom">
					<li><a href="single.html">注册资产</a></li>
					<li><a href="single.html">商业资产</a></li>
					<li><a href="login.html">登录</a></li>
					<li><a href="register.html">注册</a></li>
					<li><a href="typo.html">模板素材</a></li>
				</ul>
				<ul class="social">
					<li><a href="#"><i> </i></a></li>
					<li><a href="#"><i class="gmail"> </i></a></li>
					<li><a href="#"><i class="twitter"> </i></a></li>
					<li><a href="#"><i class="camera"> </i></a></li>
					<li><a href="#"><i class="dribble"> </i></a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="col-md-4 footer-logo">
				<h2><a href="index.html">iHOME</a></h2>
			</div>
			<div class="col-md-8 footer-class">
				<p>Copyright &copy; 2016.Company name All rights reserved.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--//footer-->
</body>

</html>