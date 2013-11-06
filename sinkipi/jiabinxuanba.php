<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <meta http-equiv="refresh" content="0;URL=https://192.168.2.71" /> -->
<title>星期八</title>
<link rel="shortcut icon" href="img/logo.jpg" />
<link href="css/base.css" rel="stylesheet" type="text/css" />
<link href="css/styleNew.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.css" rel="stylesheet" />
<link href="css/bootstrap.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="css/task.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap-carousel.js"></script>
<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap-modal.js"></script>
<style type="text/css">
html, body {
	margin:0;
	padding:0
}
body {
	font-family: 微软雅黑;
}
.STYLE2 {font-size: 14px}
.STYLE3 {
	color: #1d8bd8;
	font-size: 28px;
	font-weight: bold;
}
</style>
</head>
<body>
<?php include 'header.php';?>
</br>
</br>

<div class="container">
	

	<ol class="breadcrumb">
	 <li><a href="index.php" style='font-size:18px'>首页    |</a></li>
        <li><a href="#" style='font-size:18px'>活动    |</a></li>
        <li><a href="#" style='font-size:18px'>话题    |</a></li>
        <li><a href="#" style='font-size:18px'>论坛    |</a> </li>
        <li><a href="#" style='font-size:18px'>资料    |</a></li>
        <li><a href="#" style='font-size:18px'>空间    |</a></li>
         <?php 
//     	$admin=false;
//         session_start();
//         start_session(60);
 		if (isset($_SESSION["admin"])&&$_SESSION["admin"]===true){
		?>
 		<li><a href="app.php">个人管理</a> </li>
 		<?php
}
 		?>    
	</ol>

	<div class="taskPanel panel panel-success">
	
		
				
	<table width="80%" border="1" align="center">
         <tr>
         
          <h1 align="center"><span style="color:red">大学</span>时代</h1></tr>
         <tr>
          <h2 align="center">11月专场之高校非诚勿扰</h2>
          <h3>嘉宾选拔和亲友团说明</h3>
	  <p style="line-height:1.8">&nbsp&nbsp&nbsp&nbsp1.所有参与者均需进行注册，未经注册者将不具备本次活动参与资格；为及时有效的进行活动通知并节省成本，所有参与者均需关注星期八易信公众平台二维码（易信公众平台名称“星期八”，易信号“sinkipi”），活动所有通知均将通过易信公众平台发送。</p>
         <p>&nbsp&nbsp&nbsp&nbsp2.所有参与者所提交信息应真实，不得进行虚假报名，凡是发现代报名、虚假信息报名的情况，星期八将会在“星期八高校大学生诚信记录表”中进行备案记录；</p>
         <p>&nbsp&nbsp&nbsp&nbsp	3.所有参与者需要扩充自己的粉丝团，具体方式有两种：<br/>
A邀请自己的同学进行注册，在注册时填写自己的姓名时后面括号备注（支持***）。例子：姓名___王华（支持刘涛）___
<br/>B关注易信公众平台，并发送“支持***”。例：支持刘涛。
星期八后台将会自动进行人气记录，“粉丝团”数量将会很大程度上影响报名者能否入围第一期：11月3日晚23点报名截止，结合后台人气数据记录和个人简历，各高校社团将会依据从高到低的顺序进行排序，各校前10名将会获得第一期参与资格。
</p>
         
         <p>&nbsp&nbsp&nbsp&nbsp4.获得参与资格的同学，各校社团将会负责帮助进行准备，包括VCR制作（VCR1是基本资料和朋友评价，VCR2是情感经历）<span style="color:blue">(仅男生拍摄VCR，女生不需要)</span>、各校参与者前期聚会、活动当天参与领队。</p>
           <p>&nbsp&nbsp&nbsp&nbsp5.粉丝团人气排名前三且满足粉丝数超过30的参与同学将会获得高校非诚勿扰“易信•人气之星”荣誉称号，并获得由星期八提供的拍立得相机一部，活动现场将会进行颁发。</p>
           <p>&nbsp&nbsp&nbsp&nbsp6.各校粉丝团人气排名第一的参与同学，粉丝团将会直接全部获得亲友团资格。</p>
	   <p>&nbsp&nbsp&nbsp&nbsp7.入选男女生每人可带1-2名“闺蜜”，现场帮忙把关。</p> 
           <p>&nbsp&nbsp&nbsp&nbsp8.亲友团的选拔：每位参与者可以邀请3位成员作为亲友团，特殊情况需向星期八团队申请。</p> 
           <p>&nbsp&nbsp&nbsp&nbsp9.有特殊需求的四校同学可以通过星期八“联系我们”里的联系方式联系星期八团队，我们将根据情况尽力帮忙。</p> 
           <p>&nbsp&nbsp&nbsp&nbsp</p>
	</tr>

<tr>

</tr>
        </table>		
			
		
	</div>
</div>	

		

</body>
</html>
