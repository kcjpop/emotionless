<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trung tâm gia sư</title>
	<link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap.css') ?>">
	<link rel="stylesheet" href="<?php echo site_url('assets/css/stylesheet.css') ?>">
  <link rel="stylesheet" href="<?php echo site_url('assets/css/register.css') ?>">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/file-uploader/3.7.0/fineuploader.min.css">
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,300,700,400italic&amp;subset=latin,vietnamese" rel="stylesheet" type="text/css">
</head>
<body>
	<!--Navbar-->
	<div id="nav" class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo site_url() ?>">Trung tâm gia sư</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo site_url() ?>"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="<?php echo site_url('about') ?>">Giới thiệu</a></li>
            <li><a href="<?php echo site_url('contact') ?>">Liên hệ</a></li>
            <li><a href="<?php echo site_url('register') ?>">Đăng ký</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo site_url('portfolio') ?>">Tìm gia sư</a></li>
                <li><a href="<?php echo site_url('register') ?>">Đăng ký làm gia sư</a></li>
                <li><a href="<?php echo site_url('post') ?>">Các lớp hiện có</a></li>
              </ul>
            </li>
          </ul>
          <?php
            if ($this->session->userdata('logged_in')){
              $session_data=$this->session->userdata('logged_in');
              $user_username=$session_data['username'];
          ?>
              <div id="user-panel" class="container pull-right">
                <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                    <li><a>Xin chào, <?php echo $user_username ?></a></li>
                    <li><a href="<?php echo site_url('profile') ?>"><span class="glyphicon glyphicon-user"></span></a></li>
                    <li><a href="<?php echo site_url('auth/logout') ?>"><span class="glyphicon glyphicon-off"></span></a></li>
                  </ul>
                </div>
              </div>
          <?php    
            }
          else{
            ?>
            <form class="navbar-form navbar-right" method="POST" action  ="<?php echo site_url('login') ?>">
              <div class="form-group">
                <input type="text" name="username" placeholder="Tên đăng nhập" class="form-control">
              </div>
              <div class="form-group">
                <input type="password" name="password" placeholder="Mật khẩu" class="form-control">
              </div>
              <button type="submit" class="btn btn-success">Đăng nhập</button>
              <div class="form-group">
                <div class="input-group rmb-me">
                  <span class="input-group-addon">
                    <input type="checkbox" name="rmb-me" class="checkbox-addon">
                  </span>
                  <button class="btn btn-default form-control" type="button"><span class="glyphicon glyphicon-floppy-save"></span></button>
                </div>
              </div>
            </form>
            <?php
              }
            ?>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    <!--/Navbar-->
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <div class="container">
            <div class="carousel-caption">
              <h1>Một cái slider chạy linh tinh 1</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, suscipit, sapiente quaerat molestias nobis ad eligendi explicabo adipisci omnis accusantium. Explicabo cumque quae fuga labore alias quod inventore architecto debitis.</p>
              <p><a class="btn btn-large btn-primary" href="<?php echo site_url('register') ?>">Đăng ký làm gia sư ngay!</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
            <div class="carousel-caption">
              <h1>Một cái slider chạy linh tinh 2</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, suscipit, sapiente quaerat molestias nobis ad eligendi explicabo adipisci omnis accusantium. Explicabo cumque quae fuga labore alias quod inventore architecto debitis.</p>
              <p><a class="btn btn-large btn-primary" href="<?php echo site_url('post') ?>">Các lớp hiện có</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
           <div class="carousel-caption">
              <h1>Một cái slider chạy linh tinh 3</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, suscipit, sapiente quaerat molestias nobis ad eligendi explicabo adipisci omnis accusantium. Explicabo cumque quae fuga labore alias quod inventore architecto debitis.</p>
              <p><a class="btn btn-large btn-primary" href="<?php echo site_url('portfolio') ?>">Tìm gia sư</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
  