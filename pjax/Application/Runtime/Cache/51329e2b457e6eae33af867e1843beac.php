<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="#">

	<title>TP+Pjax Demo</title>

	<link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">
	<link href="__PUBLIC__/css/todc-bootstrap.min.css" rel="stylesheet">
	<link href="__PUBLIC__/css/application.css" rel="stylesheet">

	<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="__PUBLIC__/js/html5shiv.min.js"></script>
		<script src="__PUBLIC__/js/respond.min.js"></script>
	<![endif]-->

	<script src="__PUBLIC__/js/jquery-1.10.2.min.js"></script>
	<script src="__PUBLIC__/js/jquery.pjax.js"></script>
	<script src="__PUBLIC__/js/bootstrap.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#loading').hide();
		});
		$(document).pjax('a', '#pjax-container');
		$(document).on('pjax:send', function() {
			$('#loading').show();
		});
		$(document).on('pjax:complete', function() {
			$('#loading').fadeOut(1000);
		});
	</script>
</head>

<body>
<div id="wrap">
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo U('Index/index');?>">Brand name</a>
			</div><!--/.navbar-header -->
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo U('Index/index');?>">Home</a></li>
					<li><a href="<?php echo U('Index/about');?>">About</a></li>
					<li><a href="<?php echo U('Index/page_list');?>">Page</a></li>
				</ul><!--/.nav -->
<!-- 				<ul class="nav navbar-nav navbar-right">
					<li id="loading"><button class="btn btn-danger">Loading...</button></li>
				</ul> -->
		</div><!--/.nav-collapse -->
	</div><!--/.container -->
</div><!--/.navbar -->

<div class="container" id="pjax-container">
<h2><?php echo ($data["name"]); ?></h2>
<h1>About me</h1>
<a class="btn btn-lg btn-primary" href="http://wx.cn/index.php/index/index" role="button">View navbar docs &raquo;</a>
<pre>
# pjax


            .--.
           /    \
          ## a  a
          (   '._)
           |'-- |
         _.\___/_   ___pjax___
       ."\> \Y/|<'.  '._.-'
      /  \ \_\/ /  '-' /
      | --'\_/|/ |   _/
      |___.-' |  |`'`
        |     |  |
        |    / './
       /__./` | |
          \   | |
           \  | |
           ;  | |
           /  | |
     jgs  |___\_.\_
          `-"--'---'

## pjax = pushState + ajax

pjax is a jQuery plugin that uses ajax and pushState to deliver a fast browsing experience with real permalinks, page titles, and a working back button.

pjax works by grabbing html from your server via ajax and replacing the content of a container on your page with the ajax'd html. It then updates the browser's current url using pushState without reloading your page's layout or any resources (js, css), giving the appearance of a fast, full page load. But really it's just ajax and pushState.

For [browsers that don't support pushState][compat] pjax fully degrades.
</pre>
</div> <!-- /container -->
</div><!-- /.wrap -->

<div id="footer">
	<div class="container">
		<p class="text-muted credit">
			&copy; 2013 ThinkPHP+Pjax Demo</p>
	</div>
</div>
</body>
</html>