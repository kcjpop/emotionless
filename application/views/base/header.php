<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang chủ</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/stylesheet.css">
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,300,700,400italic&amp;subset=latin,vietnamese" rel="stylesheet" type="text/css">
</head>
<body>
	<!--Header-->
	<!--/Header-->
	
	<!--Navbar-->
	<div id="nav" class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="../emotionless">Trung tâm gia sư</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="../emotionless"><img class="home-img" src="assets/img/home.png" alt="Home"></a></li>
            <li><a href="about">Giới thiệu</a></li>
            <li><a href="contact">Liên hệ</a></li>
            <li><a href="register">Đăng ký</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">Dịch vụ</li>
                <li><a href="#">Tìm gia sư</a></li>
                <li><a href="#">Đăng ký làm gia sư</a></li>
                <li><a href="#">Các lớp hiện có</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Các lớp luyện thi</li>
                <li><a href="#">LT THPT</a></li>
                <li><a href="#">LTĐH</a></li>
              </ul>
            </li>
          </ul>
          <?php 
            if ($this->session->userdata('logged_in')){
              $session_data=$this->session->userdata('logged_in');
              $username=$session_data['username'];
          ?>
              <div id="user-panel" class="container pull-right">
                <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                    <li><a>Xin chào, <?php echo $username ?></a></li>
                    <li><a href="register">Hồ sơ</a></li>
                    <li><a href="auth/logout">Đăng xuất</a></li>
                  </ul>
                </div>
              </div>
          <?php    
            }
          else{
            ?>
            <form class="navbar-form navbar-right" method="POST" action  ="<?php echo site_url('login') ?>">
              <div class="form-group">
                <input type="text" name="username" placeholder="Tên người dùng" class="form-control">
              </div>
              <div class="form-group">
                <input type="password" name="password" placeholder="Mật khẩu" class="form-control">
              </div>
              <button type="submit" class="btn btn-success">Đăng nhập</button>
            </form>
            <?php
              }
            ?>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    <!--/Navbar-->