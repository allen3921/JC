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
         <img src = 'img\chu.jpg'></img>
          <h1 align="center"><span style="color:red">大学</span>时代</h1></tr>
         <tr>
          <h2 align="center">---楚汉争霸象棋比赛 十二月专场</h2>
	  <p style="line-height:1.8">&nbsp&nbsp&nbsp&nbsp象棋，可谓方寸之间有大智慧，是中华民族五千年古老文化的精髓，有其独特的魅力和思考方式。注重培养逻辑思维能力和记忆力，有助于提高判断能力和大局观念。同时，象棋也蕴含着很多的人生哲理。“棋如人生，人生如棋”“一着不慎，满盘皆输”，象棋不仅是国粹，也是每个人都应该了解的微型人生模型。项羽刘邦的历史，流传千年不绝，而楚河汉界，也成为了象棋的代表。</p>
         <p>&nbsp&nbsp&nbsp&nbsp发扬国粹是我们高校大学生义不容辞的责任，而学会在浮躁的社会中学会安静思考，则是我们对自己所必须担当起的责任。</p>
         <p>&nbsp&nbsp&nbsp&nbsp	12月,“楚汉争霸”高校象棋大赛将全面打响，全北京高校大学生均可报名参赛，欢迎各校社团报名参与活动主办。赛事历时3周，通过层层角逐，<span style="color:red;line-height:1.8">我们将评选出前三强，<font size="6">冠军奖10000元。</font></span>此外，我们将从所有参赛选手中随机抽选出10名选手，并予以参与奖。活动详情将于12月公布，届时，我们将通过星期八易信公众平台和星期八大学生网同步进行赛事通知。敬请关注。</p>
	</tr>

<tr>
<a href="#">具体活动安排流程</a>
</tr>
        </table>		
			
		
	</div>
</div>	

		

</body>
</html>
