<!doctype>
<html>
<head>
	<title>Admin Area</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/admin.css') ?>">
	<link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap.css') ?>">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
</head>
<body>
	<nav class="navbar navbar-default navbar-inverse navbar-static-top" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo admin_url() ?>">Admin Area</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo admin_url('user') ?>">Người dùng</a></li>
				<li><a href="<?php echo admin_url('article') ?>">Bài viết</a></li>
				<li><a href="<?php echo admin_url('portfolio') ?>">Gia sư</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo site_url() ?>" target="_blank">Trang chủ</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">You <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="">Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</nav>

	<div class="container">